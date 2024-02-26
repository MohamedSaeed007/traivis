<?php

namespace App\Filament\Resources\ApproveCourseResource\Pages;

use App\Filament\Resources\ApproveCourseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditApproveCourse extends EditRecord
{
    protected static string $resource = ApproveCourseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}