<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Filament\Resources\PlanResource\RelationManagers\FeaturesRelationManager;
use App\Models\Model;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use LucasDotVin\Soulbscription\Models\Feature;
use LucasDotVin\Soulbscription\Models\FeaturePlan;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 7;
    /* public static function getEloquentQuery(): Builder
    {
    return parent::getEloquentQuery()->withoutGlobalScopes();
    } */
    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('price')->required(),
                // CheckboxList::make('features')
                //     ->relationship('features', 'name')
                //     ->columns(2),
                // Repeater::make('features.charges')
                //     ->relationship('features')
                //     ->schema([
                //         Select::make('feature_id')
                //             ->options(Feature::query()->pluck('name', 'id'))
                //             ->label('Feature Name')
                //             ->reactive()
                //             ->afterStateUpdated(function ($state, callable $set) {
                //                 $feature = FeaturePlan::where('feature_id', $state)->where('plan_id', $record->id)->first();
                //                 // dd($feature);
                //                 // $set('featuresRepeater', $features);
                //             })
                //             ->required(),
                //         TextInput::make('name')->label('Charges')->disabled()->required(),
                //         TextInput::make('charges')->label('Charges')->numeric()->required(),
                //     ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // AttachAction::make()->form(fn(AttachAction $action): array => [
                //     $action->getRecordSelect(),
                //     TextInput::make('charges')->required()
                // ]),
                Tables\Actions\EditAction::make(),
                // Tables\Actions\EditAction::make('editFeatures')
                //     ->label('Feature Charges')
                //     ->form([
                //         // ViewField::make('features')->view('filament.forms.components.features-charges'),
                //         Repeater::make('features')
                //             ->relationship('features', function ($query) {
                //                 $query->where('consumable', 1);
                //             })
                //             ->label('Features Charges')
                //             ->schema([
                //                 TextInput::make('name')->label('Name')->disabled()->required(),
                //                 TextInput::make('charges')->label('Charges')->numeric()->required(),
                //             ])
                //             ->disableItemCreation()
                //             ->disableItemDeletion()
                //             ->disableItemMovement()
                //             ->columns(2),
                //     ]),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    public static function getRelations(): array
    {
        return [
            FeaturesRelationManager::class
        ];
    }
    public static function getPages(): array
    {
        return [
            // 'index' => Pages\ManagePlans::route('/'),
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}