<?php

namespace App\Filament\Resources\ApproveWithdrawResource\Pages;

use App\Filament\Resources\ApproveWithdrawResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApproveWithdraws extends ListRecords
{
    protected static string $resource = ApproveWithdrawResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
