<?php

namespace App\Filament\Resources\IssueReportResource\Pages;

use App\Filament\Resources\IssueReportResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIssueReports extends ListRecords
{
    protected static string $resource = IssueReportResource::class;
    protected ?string $maxContentWidth = 'full';

    protected function getActions(): array
    {
        return [CreateAction::make()];
    }
}
