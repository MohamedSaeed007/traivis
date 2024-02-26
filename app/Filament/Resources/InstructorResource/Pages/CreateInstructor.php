<?php

namespace App\Filament\Resources\InstructorResource\Pages;

use App\Filament\Resources\InstructorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInstructor extends CreateRecord
{
    protected static string $resource = InstructorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tier_id'] = 1;
        $data['business_type'] = 'instructor';
        return $data;
    }
}