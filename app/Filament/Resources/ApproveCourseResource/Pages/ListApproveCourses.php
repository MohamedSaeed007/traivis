<?php

namespace App\Filament\Resources\ApproveCourseResource\Pages;

use App\Filament\Resources\ApproveCourseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApproveCourses extends ListRecords
{
    protected static string $resource = ApproveCourseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
