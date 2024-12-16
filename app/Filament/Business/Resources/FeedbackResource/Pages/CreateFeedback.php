<?php

namespace App\Filament\Business\Resources\FeedbackResource\Pages;

use App\Filament\Business\Resources\FeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeedback extends CreateRecord
{
    protected static string $resource = FeedbackResource::class;
}
