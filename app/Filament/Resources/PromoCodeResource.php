<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromoCodeResource\Pages;
use App\Filament\Resources\PromoCodeResource\RelationManagers;
use App\Models\PromoCode;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PromoCodeResource extends Resource
{
    protected static ?string $model = PromoCode::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 9;
    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('code')->required(),
                Select::make('type')->options([
                    'fixed' => 'Fixed',
                    'percentage' => 'Percentage',
                ])->required(),
                TextInput::make('discount_amount')->numeric()->required(),
                DatePicker::make('valid_from')->minDate(now()->format('y-m-d')),
                DatePicker::make('valid_to')->minDate(now()->format('y-m-d')),
                Select::make('valid_for')->multiple()->options([
                    'courses' => 'Courses',
                    'features' => 'Features',
                ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('code'),
                TextColumn::make('type'),
                TextColumn::make('discount_amount'),
                TextColumn::make('valid_from'),
                TextColumn::make('valid_to'),
                TagsColumn::make('valid_for'),
                ToggleColumn::make('is_active')
            ])
            ->filters([
                SelectFilter::make('type')->options([
                    'fixed' => 'Fixed',
                    'percentage' => 'Percentage',
                ]),
                // SelectFilter::make('valid_for')
                //     ->multiple()->options([
                //         'courses' => 'Courses',
                //         'features' => 'Features',
                //     ]),
                Filter::make('valid_between')
                    ->form([
                        Forms\Components\DatePicker::make('valid_from'),
                        Forms\Components\DatePicker::make('valid_to'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['valid_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('valid_from', '>=', $date),
                            )
                            ->when(
                                $data['valid_to'], fn(Builder $query, $date): Builder => $query->whereDate('valid_to', '<=', $date),
                            );
                    })
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
            'index' => Pages\ListPromoCodes::route('/'),
            'create' => Pages\CreatePromoCode::route('/create'),
            'edit' => Pages\EditPromoCode::route('/{record}/edit'),
        ];
    }
}