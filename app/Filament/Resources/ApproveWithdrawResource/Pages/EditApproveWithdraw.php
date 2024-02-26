<?php

namespace App\Filament\Resources\ApproveWithdrawResource\Pages;

use App\Filament\Resources\ApproveWithdrawResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApproveWithdraw extends EditRecord
{
    protected static string $resource = ApproveWithdrawResource::class;

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
