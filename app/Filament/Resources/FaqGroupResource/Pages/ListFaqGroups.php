<?php

namespace App\Filament\Resources\FaqGroupResource\Pages;

use App\Filament\Resources\FaqGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaqGroups extends ListRecords
{
    protected static string $resource = FaqGroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
