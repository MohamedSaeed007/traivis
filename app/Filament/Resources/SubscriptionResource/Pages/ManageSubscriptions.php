<?php

namespace App\Filament\Resources\SubscriptionResource\Pages;

use App\Filament\Resources\SubscriptionResource;
use Closure;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSubscriptions extends ManageRecords
{
    protected static string $resource = SubscriptionResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getTableRecordActionUsing(): ?Closure
    {
        return null;
    }
}