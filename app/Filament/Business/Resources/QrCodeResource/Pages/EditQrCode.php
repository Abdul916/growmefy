<?php

namespace App\Filament\Business\Resources\QrCodeResource\Pages;

use App\Filament\Business\Resources\QrCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQrCode extends EditRecord
{
    protected static string $resource = QrCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}