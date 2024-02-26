<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnterpriseResource\Pages;
use App\Models\Business;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class EnterpriseResource extends Resource
{
    protected static ?string $model = Business::class;
    protected static ?string $modelLabel = 'enterprises';
    protected static ?string $slug = 'enterprises';
    protected static ?string $recordTitleAttribute = 'enterprises';
    protected static ?string $navigationIcon = 'heroicon-o-office-building';
    protected static ?int $navigationSort = 4;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('business_type', 'enterprise');
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                SpatieMediaLibraryFileUpload::make('profile_pic')
                    ->disk('media'),
                TextInput::make('business_name')->required(),
                // TextInput::make('business_number')->unique()->required(),
                TextInput::make('business_email')->email()->required(),
                TextInput::make('business_phone_one')->numeric()->required(),
                TextInput::make('business_phone_two')->numeric(),
                // TextInput::make('country_id')->tel(),
                // TextInput::make('state_id')->tel(),
                // TextInput::make('city_id')->tel(),
                Select::make('created_by')->label('Owner')->relationship('owner', 'name')->required(),
                Toggle::make('approved'),
                Toggle::make('suspend'),
                Toggle::make('waiting'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->disk('media'),
                TextColumn::make('business_name'),
                TextColumn::make('business_number'),
                TextColumn::make('business_email'),
                TextColumn::make('business_phone_one'),
                TextColumn::make('owner.name'),
                ToggleColumn::make('approved'),
                ToggleColumn::make('suspend'),
                ToggleColumn::make('waiting'),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('id');
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
            'index' => Pages\ListEnterprises::route('/'),
            'create' => Pages\CreateEnterprise::route('/create'),
            'edit' => Pages\EditEnterprise::route('/{record}/edit'),
        ];
    }
}