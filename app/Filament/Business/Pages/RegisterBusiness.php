<?php

namespace App\Filament\Business\Pages;

use App\Models\Business;
use Faker\Core\File;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use Illuminate\Support\Facades\DB;
use App\Services\SubscriptionManager;


class RegisterBusiness extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register business';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug')
                    ->unique(Business::class, 'slug', ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->directory('logos'),
            ]);
    }

    protected function handleRegistration(array $data): Business
    {
        $user = Auth::user();

        // Check if the user is an admin
        if ($user->is_admin) {
            // Admin users can create businesses without limitations
            // Create the new business
            $business = Business::create($data);

            // Associate the user to the business
            $business->members()->attach($user);

            return $business;
        }

        // Obtener la suscripción del usuario y verificar su estado
        $subscription = Subscription::where('user_id', $user->id)
            ->whereIn('status', ['active', 'trialing']) // Ajusta los estados válidos según tu configuración
            ->first();

        // Verificar si no hay una suscripción válida
        if (!$subscription) {
            // Mostrar notificación si no tiene una suscripción activa o en trial
            Notification::make()
                ->title('Suscripción Inactiva')
                ->body('No tienes una suscripción activa o válida para crear un negocio.')
                ->danger()
                ->duration(15000)
                ->actions([
                    Action::make('Ver Planes')
                        ->button()
                        ->url('https://dev.growmefy.com/#plans') // URL de la página de planes
                        ->openUrlInNewTab()
                ])
                ->send();

            $this->halt();
            throw new \Exception('No tienes una suscripción activa o válida.');
        }

        // Usar el contenedor de Laravel para resolver SubscriptionManager con sus dependencias
        $subscriptionManager = app()->make(SubscriptionManager::class);

        // Obtener los metadatos del plan asociado a la suscripción
        $metadata = $subscriptionManager->getUserSubscriptionProductMetadata($user);

        // Verificar si el límite de 'businesses' está definido en los metadatos del plan
        $maxBusinesses = (int) ($metadata['businesses'] ?? 0);

        // Contar cuántos "business" tiene actualmente el usuario
        $currentBusinessesCount = DB::table('business_user')
            ->where('user_id', $user->id)
            ->count();

        // Verificar si el usuario ha alcanzado el límite permitido
        if ($currentBusinessesCount >= $maxBusinesses) {
            // Mostrar notificación de error cuando se alcanza el límite
            Notification::make()
                ->title('Límite alcanzado')
                ->body('Has alcanzado el límite máximo de negocios permitidos por tu plan de suscripción.')
                ->danger()
                ->duration(15000)
                ->actions([
                    Action::make('Cambiar Plan')
                        ->button()
                        ->url('https://dev.growmefy.com/#plans') // URL de la página de planes
                        ->openUrlInNewTab()
                ])
                ->send();

            $this->halt();
            throw new \Exception('Límite de negocios alcanzado.');
        }

        // Crear el nuevo negocio
        $business = Business::create($data);

        // Asociar el usuario al negocio
        $business->members()->attach($user);

        return $business;
    }

    //protected function handleRegistration(array $data): Business
    //{
    //    $business = Business::create($data);
    //
    //    $business->members()->attach(Auth::user());
    //
    //    return $business;
    //}
}
