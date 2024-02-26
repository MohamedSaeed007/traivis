<?php

namespace App\Filament\Resources\InstructorResource\Pages;

use App\Filament\Resources\InstructorResource;
use Closure;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstructors extends ListRecords
{
    protected static string $resource = InstructorResource::class;

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