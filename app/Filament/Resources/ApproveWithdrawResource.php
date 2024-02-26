<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApproveWithdrawResource\Pages;
use App\Filament\Resources\ApproveWithdrawResource\RelationManagers;
use App\Models\ApproveWithdraw;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApproveWithdrawResource extends Resource
{
    protected static ?string $model = Transaction::class;
    protected static ?string $label = 'Approve Withdraw';
    protected static ?string $slug = 'approve-withdraw';
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('transaction_type', 2)->where('transaction_status', 1);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Textarea::make('feedback')->label('Course Feedback'),
                Radio::make('transaction_status')
                    ->label('Action')
                    ->options([
                        2 => 'Approve',
                        3 => 'Decline'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('payeeable.name')->label('User Name'),
                TextColumn::make('amount_after_discount')->label('Withdraw Amount')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApproveWithdraws::route('/'),
            'create' => Pages\CreateApproveWithdraw::route('/create'),
            'edit' => Pages\EditApproveWithdraw::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return false;
    }
}
