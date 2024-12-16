<?php

namespace App\Filament\Business\Resources\QrCodeResource\Pages;

use App\Filament\Business\Resources\QrCodeResource;
use Filament\Resources\Pages\CreateRecord;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use Endroid\QrCode\Writer\PngWriter;
use Filament\Notifications\Actions\Action;


class CreateQrCode extends CreateRecord
{
    protected static string $resource = QrCodeResource::class;

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        // URL de la landing del negocio actual
        $businessSlug = filament()->getTenant()->slug;
        $url = url('/landing/' . $businessSlug);

        // Generar el QR Code con `endroid/qr-code`
        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($url)
            ->encoding(new Encoding('UTF-8'))
            ->size($data['size'])
            ->margin($data['margin'])
            ->build();

        // Guardar el código QR en almacenamiento
        $filename = 'qr-code-' . time() . '.png';
        Storage::disk('public')->put('qr-codes/' . $filename, $result->getString());

        // Guardar en la base de datos
        $record = parent::handleRecordCreation(array_merge($data, ['qr_code_path' => $filename]));

        // Notificar al usuario con un enlace para descargar el QR
        Notification::make()
            ->title('QR Code generated successfully')
            ->success()
            ->body('You can download your QR Code from this link.')
            ->actions([
                Action::make('Download') // Uso correcto de la acción
                    ->url(Storage::disk('public')->url('qr-codes/' . $filename))
                    ->button()
                    ->openUrlInNewTab(),
            ])
            ->send();

        return $record;
    }
}

