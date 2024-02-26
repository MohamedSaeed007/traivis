<?php

namespace App\Filament\Resources\IssueReportResource\Pages;

use App\Filament\Resources\IssueReportResource;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIssueReport extends EditRecord
{
    protected static string $resource = IssueReportResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [DeleteAction::make()];
    }
}
