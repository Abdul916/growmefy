<?php

namespace App\Filament\Business\Resources\BusinessContactResource\Pages;

use App\Filament\Business\Resources\BusinessContactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBusinessContact extends EditRecord
{
    protected static string $resource = BusinessContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
