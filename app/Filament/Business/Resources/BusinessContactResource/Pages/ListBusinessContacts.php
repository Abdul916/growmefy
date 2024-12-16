<?php

namespace App\Filament\Business\Resources\BusinessContactResource\Pages;

use App\Filament\Business\Resources\BusinessContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BusinessContact;
use Illuminate\Support\Facades\Cache;

class ListBusinessContacts extends ListRecords
{
    protected static string $resource = BusinessContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->badge($this->getTotalCount())
                ->badgeColor('primary'),
            'no_email' => Tab::make()
                ->label('No Email')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereDoesntHave('latestEmail'))
                ->badge($this->getNoEmailCount())
                ->badgeColor('warning'),
            'pending' => Tab::make()
                ->label('Pending')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('latestEmail', fn (Builder $q) => $q->where('status', 'pending')))
                ->badge($this->getStatusCount('pending'))
                ->badgeColor('info'),
            'queued' => Tab::make()
                ->label('Queued')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('latestEmail', fn (Builder $q) => $q->where('status', 'queued')))
                ->badge($this->getStatusCount('queued'))
                ->badgeColor('info'),
            'sent' => Tab::make()
                ->label('Sent')
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('latestEmail', fn (Builder $q) => $q->where('status', 'sent')))
                ->badge($this->getStatusCount('sent'))
                ->badgeColor('success'),
            'failed' => Tab::make()
                ->label('Failed')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('latestEmail', fn (Builder $q) => $q->where('status', 'failed')))
                ->badge($this->getStatusCount('failed'))
                ->badgeColor('danger'),
        ];
    }

    protected function shouldPersistTablePageInSession(): bool
    {
        return false;
    }

    private function applyBusinessFilter(Builder $query): Builder
    {
        $businessId = filament()->getTenant()->id;

        if (!$businessId) {
            // Retornar un query vacío si no hay un tenant actual
            return $query->whereRaw('0 = 1');
        }

        return $query->where('business_id', $businessId);
    }

    private function getTotalCount(): int
    {
        $businessId = filament()->getTenant()->id;

        if (!$businessId) {
            return 0;
        }

        return BusinessContact::where('business_id', $businessId)->count();
    }

    private function getNoEmailCount(): int
    {
        $businessId = filament()->getTenant()->id;

        if (!$businessId) {
            return 0;
        }

        return BusinessContact::where('business_id', $businessId)
            ->whereDoesntHave('latestEmail')
            ->count();
    }

    private function getStatusCount(string $status): int
    {
        $businessId = filament()->getTenant()->id;

        if (!$businessId) {
            return 0;
        }

        return BusinessContact::where('business_id', $businessId)
            ->whereHas('latestEmail', fn (Builder $q) => $q->where('status', $status))
            ->count();
    }
}
