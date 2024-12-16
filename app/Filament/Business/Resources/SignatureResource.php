<?php

namespace App\Filament\Business\Resources;

use App\Filament\Business\Resources\SignatureResource\Pages;
use App\Filament\Business\Resources\SignatureResource\RelationManagers;
use App\Models\Signature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Illuminate\View\View;
use Illuminate\Support\HtmlString;

class SignatureResource extends Resource
{
    protected static ?string $model = Signature::class;

    protected static ?string $navigationGroup = 'Resources';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Prompt Text') // Cambiado a un nombre más descriptivo
                    ->default('Please rate our service') // Ejemplo para ayudar al usuario
                    ->required()
                    ->helperText(new HtmlString('Alternative suggestions:<br>
                            <li>Give us your feedback.</li>
                            <li>Let us know how we did!</li>
                            <li>Was our service satisfactory?</li>
                            <li>Please share your feedback</li>')),
                Select::make('rating_type')
                    ->label('Rating Type')
                    ->options([
                        'numbers' => 'Numbers (1-5)',
                        'stars' => 'Stars (5 stars)',
                        'faces' => 'Faces (happy and sad faces)',
                    ])
                    ->default('numbers')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Prompt text'),
            Tables\Columns\TextColumn::make('rating_type')
                ->label('Rating Type')
                ->formatStateUsing(function ($state) {
                    // Convierte el valor de la base de datos en una etiqueta legible
                    return match ($state) {
                        'numbers' => 'Numbers (1-5)',
                        'stars' => 'Stars (5 stars)',
                        'faces' => 'Faces (happy and sad faces)',
                        default => $state,
                    };
                }),
        ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('view')
                    ->label('View Signature')
                    ->icon('heroicon-o-eye')
                    ->modalHeading('Preview and Copy Signature HTML')
                    ->modalWidth('lg')
                    ->modalContent(fn ($record) => view('signatures.preview', [
                        'name' => $record->name,
                        'rating_type' => $record->rating_type,
                        'business' => $record->business,
                    ])), // Devuelve la vista directamente
                Action::make('download')
                    ->label('Download HTML')
                    ->icon('heroicon-o-arrow-down-circle')
                    ->action(fn ($record) => static::downloadHtml($record)),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function downloadHtml($record)
    {
        // Genera el HTML de la firma para descarga
        $html = view('signatures.preview', [
            'name' => $record->name,
            'rating_type' => $record->rating_type,
            'business' => $record->business,
        ])->render();

        // Define el nombre del archivo y devuelve la respuesta de descarga
        $filename = 'signature-' . $record->id . '.html';
        return response()->streamDownload(function() use ($html) {
            echo $html;
        }, $filename);
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
            'index' => Pages\ListSignatures::route('/'),
            'create' => Pages\CreateSignature::route('/create'),
            'edit' => Pages\EditSignature::route('/{record}/edit'),
        ];
    }
}
