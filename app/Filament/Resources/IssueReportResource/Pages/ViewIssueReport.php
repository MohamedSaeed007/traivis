<?php

namespace App\Filament\Resources\IssueReportResource\Pages;

use App\Filament\Resources\IssueReportResource;
use App\Models\IssueReport;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIssueReport extends ViewRecord
{
    protected static string $resource = IssueReportResource::class;
    public string $status;
    public string $severity;

    public function mount($record): void
    {
        parent::mount($record);
        $this->status = $this->getRecord()->status;
        $this->severity = $this->getRecord()->severity;
    }

    public function updated($field, $value)
    {
        if (in_array($field, ['status', 'severity'])) {
            $this->record->update([$field => $value]);

            $list = match ($field) {
                'status' => config('traivis.issue_reports.statuses.list'),
                'severity' => config('traivis.issue_reports.severities.list'),
            };
            $this->refreshFormData([$field]);

            Notification::make()
                ->title('The ' . $field . ' changed to "' . $list[$value] . '" successfully')
                ->success()
                ->send();
        }
    }

    protected function getActions(): array
    {
        return [
            Actions\SelectAction::make('severity')->options(
                collect(config('traivis.issue_reports.severities.list'))->map(
                    fn($item) => 'Severity - ' . $item,
                ),
            ),
            Actions\SelectAction::make('status')->options(
                collect(config('traivis.issue_reports.statuses.list'))->map(
                    fn($item) => 'Status - ' . $item,
                ),
            ),
            Actions\Action::make('Close this')
                ->hidden(fn() => $this->record->status == 'closed')
                ->action(function () {
                    $this->record->update(['status' => 'closed']);
                    Notification::make()
                        ->title('The issue report #' . $this->record->number . ' is closed successfully')
                        ->success()
                        ->send();
                    return redirect()->to($this->getResource()::getUrl('index'));
                }),

            Actions\EditAction::make(),
        ];
    }
}
