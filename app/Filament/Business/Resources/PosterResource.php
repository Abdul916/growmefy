<?php

namespace App\Filament\Business\Resources;

use App\Filament\Business\Resources\PosterResource\Pages;
use App\Filament\Business\Resources\PosterResource\RelationManagers;
use App\Models\Poster;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\QrCode;

class PosterResource extends Resource
{
    protected static ?string $model = Poster::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Resources';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Poster Title')
                ->default('Please leave us a review')
                ->helperText('Enter a title to request a review')
                ->required(),
            Select::make('qr_code')
                ->label('QR Code')
                ->options(function () {
                    $business = filament()->getTenant();
                    return QrCode::where('business_id', $business->id)
                        ->pluck('qr_code_path', 'id'); // ID como valor y path para mostrar
                })
                ->helperText('Select the QR code for your business')
                ->required(),
            Select::make('paper_size')
                ->label('Paper Size')
                ->options([
                    'A4' => 'A4 (210 x 297 mm)',
                    'A5' => 'A5 (148 x 210 mm)',
                    'letter' => 'Letter (8.5 x 11 inches)',
                    'legal' => 'Legal (8.5 x 14 inches)',
                ])
                ->default('A4')
                ->helperText('Choose the paper size for your poster')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('qr_code')->label('QR Code'),
                Tables\Columns\TextColumn::make('paper_size')->label('Paper Size'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('download')
                    ->label('Generate PDF')
                    ->icon('heroicon-o-arrow-down-on-square-stack')
                    ->action(fn ($record) => static::generatePdf($record)),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function generatePdf($record)
{
    // Buscar el QR Code basado en el ID almacenado en el póster
    $qrCode = QrCode::find($record->qr_code);

    // Verificar si el QR Code existe
    if (!$qrCode) {
        return back()->withErrors(['qr_code' => 'QR Code not found. Please ensure the QR Code exists.']);
    }

    // Verificar si el archivo del QR code existe en el almacenamiento
    $qrCodePath = 'qr-codes/' . $qrCode->qr_code_path;
    if (!Storage::disk('public')->exists($qrCodePath)) {
        return back()->withErrors(['qr_code' => 'QR Code image not found on the server.']);
    }

    // Convertir la imagen a base64
    $qrCodeContent = Storage::disk('public')->get($qrCodePath);
    $qrCodeBase64 = 'data:image/png;base64,' . base64_encode($qrCodeContent);

    // Renderizar la vista del cartel en PDF con el tamaño de papel seleccionado
    $pdf = Pdf::loadView('posters.template', [
        'title' => $record->title,
        'qr_code_url' => $qrCodeBase64, // Usar la imagen como base64
        'paperSize' => strtolower($record->paper_size),
    ])->setPaper($record->paper_size, 'portrait');

    // Descargar el archivo PDF
    return response()->streamDownload(
        fn () => print($pdf->output()),
        'poster-' . time() . '.pdf'
    );
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
            'index' => Pages\ListPosters::route('/'),
            'create' => Pages\CreatePoster::route('/create'),
            'edit' => Pages\EditPoster::route('/{record}/edit'),
        ];
    }
}
