<?php

namespace App\Filament\Business\Resources\BusinessContactResource\Pages;

use App\Filament\Business\Resources\BusinessContactResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBusinessContact extends CreateRecord
{
    protected static string $resource = BusinessContactResource::class;
}
