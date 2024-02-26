<?php

namespace App\Filament\Resources\EnterpriseResource\Pages;

use App\Filament\Resources\EnterpriseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEnterprise extends EditRecord
{
    protected static string $resource = EnterpriseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
