<?php

namespace App\Filament\Resources\InstitutionResource\Pages;

use App\Filament\Resources\InstitutionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInstitution extends CreateRecord
{
    protected static string $resource = InstitutionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tier_id'] = 1;
        $data['business_type'] = 'institute';
        return $data;
    }
}