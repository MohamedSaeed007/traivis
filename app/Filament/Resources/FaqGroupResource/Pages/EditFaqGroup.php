<?php

namespace App\Filament\Resources\FaqGroupResource\Pages;

use App\Filament\Resources\FaqGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaqGroup extends EditRecord
{
    protected static string $resource = FaqGroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
