<?php

namespace App\Filament\Business\Resources;

use App\Filament\Business\Resources\QrCodeResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use App\Models\QrCode;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Storage;

class QrCodeResource extends Resource
{
    protected static ?string $model = QrCode::class;

    protected static ?string $navigationGroup = 'Resources';

    protected static ?string $navigationIcon = 'heroicon-o-qr-code';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('size')
                    ->label('Size (px)')
                    ->required()
                    ->default(300)
                    ->numeric()
                    ->minValue(100)
                    ->maxValue(1000),
                Forms\Components\TextInput::make('margin')
                    ->label('Margin')
                    ->numeric()
                    ->default(1)
                    ->minValue(0)
                    ->maxValue(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('qr_code_path')
                    ->label('Preview')
                    ->disk('public') // Especifica el disco 'public'
                    ->getStateUsing(fn ($record) => 'qr-codes/' . $record->qr_code_path)
                    ->height(50)
                    ->width(50),
                Tables\Columns\TextColumn::make('size')
                    ->label('Size'),
                Tables\Columns\TextColumn::make('margin')
                    ->label('Margin'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('download') // Acción personalizada para descargar el QR
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down-circle')
                    ->url(fn ($record) => Storage::disk('public')->url('qr-codes/' . $record->qr_code_path))
                    ->openUrlInNewTab(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListQrCodes::route('/'),
            'create' => Pages\CreateQrCode::route('/create'),
            'edit' => Pages\EditQrCode::route('/{record}/edit'),
        ];
    }
}
