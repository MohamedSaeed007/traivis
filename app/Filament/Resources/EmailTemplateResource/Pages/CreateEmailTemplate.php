<?php

namespace App\Filament\Resources\EmailTemplateResource\Pages;

use App\Filament\Resources\EmailTemplateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmailTemplate extends CreateRecord
{
    protected static string $resource = EmailTemplateResource::class;
}