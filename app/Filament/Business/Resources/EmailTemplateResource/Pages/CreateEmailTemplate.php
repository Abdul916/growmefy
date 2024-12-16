<?php

namespace App\Filament\Business\Resources\EmailTemplateResource\Pages;

use App\Filament\Business\Resources\EmailTemplateResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmailTemplate extends CreateRecord
{
    protected static string $resource = EmailTemplateResource::class;
}
