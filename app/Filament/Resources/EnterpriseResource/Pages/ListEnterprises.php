<?php

namespace App\Filament\Resources\EnterpriseResource\Pages;

use App\Filament\Resources\EnterpriseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Closure;

class ListEnterprises extends ListRecords
{
    protected static string $resource = EnterpriseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableRecordUrlUsing(): ?Closure
    {
        return null;
    }
}