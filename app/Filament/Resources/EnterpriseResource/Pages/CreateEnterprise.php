<?php

namespace App\Filament\Resources\EnterpriseResource\Pages;

use App\Filament\Resources\EnterpriseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEnterprise extends CreateRecord
{
    protected static string $resource = EnterpriseResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['business_type'] = 'enterprise';
        return $data;
    }
}