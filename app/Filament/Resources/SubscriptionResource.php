<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Filament\Resources\SubscriptionResource\RelationManagers;
use App\Models\Model;
use App\Models\Plan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Subscription;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ReplicateAction;
use Filament\Tables\Columns\SelectColumn;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 6;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes();
    }
    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('status')->options([
                    '1' => 'Active',
                    '3' => 'Canceled',
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plan.name'),
                TextColumn::make('subscriber.business_name'),
                TextColumn::make('started_at')->label('Starting Date')->date(),
                TextColumn::make('expired_at')->label('Expiration Date')->date(),
                TextColumn::make('status')->enum([
                    '1' => 'Active',
                    '2' => 'Expired',
                    '3' => 'Canceled',
                    '4' => 'Upgraded',
                ]),
                TextColumn::make('canceled_at')->label('Cancellation date')->date(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->multiple()
                    ->options([
                        '1' => 'Active',
                        '2' => 'Expired',
                        '3' => 'Canceled',
                        '4' => 'Upgraded',
                    ]),
                SelectFilter::make('plan_id')->label('Plan')->relationship('plan', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn($record): bool => ($record->status == 1 || $record->status == 3)),
                ReplicateAction::make()->label('Upgrade')
                    ->visible(fn($record): bool => $record->status == 1)
                    ->form([
                        Select::make('plan_id')->options([
                            1 => 'Free Enterprise',
                            2 => 'Small Enterprise',
                            3 => 'Medium Enterprise',
                            4 => 'Large Enterprise',
                        ])->required(),
                    ])
                    ->afterReplicaSaved(function ($record, $replica, array $data): void {
                        $plan = Plan::find($data['plan_id']);
                        $expiration = $plan->calculateNextRecurrenceEnd(now());
                        $graceDaysEnd = $plan->hasGraceDays
                            ? $plan->calculateGraceDaysEnd($expiration)
                            : null;
                        // Replicated Model
                        $replica->update([
                            'status' => 1,
                            'started_at' => now(),
                            'expired_at' => $expiration,
                            'grace_days_ended_at' => $graceDaysEnd,
                            'canceled_at' => null,
                            'suppressed_at' => null,
                            'plan_id' => $data['plan_id'],
                        ]);
                        // Original Model 
                        $record->update([
                            'status' => 4
                        ]);
                    })
            ])
            ->bulkActions([
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
            'index' => Pages\ManageSubscriptions::route('/'),
        ];
    }
}