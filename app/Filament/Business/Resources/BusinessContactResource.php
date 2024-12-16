<?php

namespace App\Filament\Business\Resources;

use App\Filament\Business\Resources\BusinessContactResource\Pages;
use App\Filament\Business\Resources\BusinessContactResource\RelationManagers;
use App\Models\BusinessContact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Email;
use Illuminate\Database\Eloquent\Collection;
use Filament\Notifications\Notification;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Enums\FiltersLayout;

class BusinessContactResource extends Resource
{
    protected static ?string $model = BusinessContact::class;

    protected static ?string $navigationLabel = 'Send Requests';

    protected static ?string $navigationGroup = 'Resources';

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Name'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email'),
                Forms\Components\TextInput::make('phone')
                    ->label('Phone'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone')->label('Phone'),
                Tables\Columns\TextColumn::make('latestEmail.status')
                    ->label('Status')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return ucfirst($state ?? 'Not Sent');
                    }),
                Tables\Columns\TextColumn::make('latestEmail.sent_at')
                    ->label('Sent At')
                    ->sortable()
                    ->dateTime('d/m/Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('Send Request')
            ->action(function (BusinessContact $record) {
                $business = $record->business;
                $template = $business->emailTemplates()->first();

                if (!$template) {
                    Notification::make()
                        ->title('There is no email template configured for this business.')
                        ->danger()
                        ->send();

                    return;
                }

                Email::create([
                    'business_id' => $business->id,
                    'contact_id' => $record->id,
                    'template_id' => $template->id,
                    'status' => 'queued',
                ]);

                Notification::make()
                    ->title('The request has been queued to be sent.')
                    ->success()
                    ->send();
            })
            ->label('Send request')
            ->icon('heroicon-o-arrow-right-end-on-rectangle'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                Tables\Actions\BulkAction::make('Send Requests')
            ->action(function (Collection $records) {
                $business = $records->first()->business;
                $template = $business->emailTemplates()->first();

                if (!$template) {
                    Notification::make()
                        ->title('There is no email template configured for this business.')
                        ->danger()
                        ->send();

                    return;
                }

                foreach ($records as $record) {
                    Email::create([
                        'business_id' => $business->id,
                        'contact_id' => $record->id,
                        'template_id' => $template->id,
                        'status' => 'queued',
                    ]);
                }

                Notification::make()
                    ->title('The requests have been queued to be sent.')
                    ->success()
                    ->send();
            })
            ->requiresConfirmation()
            ->deselectRecordsAfterCompletion()
            ->label('Send Requests'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBusinessContacts::route('/'),
            'create' => Pages\CreateBusinessContact::route('/create'),
            'edit' => Pages\EditBusinessContact::route('/{record}/edit'),
        ];
    }
}
