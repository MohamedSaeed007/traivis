<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstitutionResource\Pages;
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

class InstitutionResource extends Resource
{
    protected static ?string $model = Business::class;
    protected static ?string $modelLabel = 'institutes';
    protected static ?string $slug = 'institutes';
    protected static ?string $recordTitleAttribute = 'institutes';
    protected static ?string $navigationIcon = 'heroicon-o-library';
    protected static ?int $navigationSort = 2;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('business_type', 'institute');
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
                TextInput::make('business_name'),
                TextInput::make('business_email')->email(),
                TextInput::make('business_phone_one')->tel(),
                TextInput::make('business_phone_two')->tel(),
                // TextInput::make('country_id')->tel(),
                // TextInput::make('state_id')->tel(),
                // TextInput::make('city_id')->tel(),
                TextInput::make('hold_balance')->numeric(),
                TextInput::make('balance')->numeric(),
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
                TextColumn::make('hold_balance')->money('usd',true),
                TextColumn::make('balance')->money('usd',true),
                TextColumn::make('tier.name'),
                TextColumn::make('owner.name'),
                ToggleColumn::make('approved'),
                ToggleColumn::make('suspend'),
                ToggleColumn::make('waiting'),
            ])
            ->filters([
                SelectFilter::make('tier')->relationship('tier', 'name'),
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
            'index' => Pages\ListInstitutions::route('/'),
            'create' => Pages\CreateInstitution::route('/create'),
            'edit' => Pages\EditInstitution::route('/{record}/edit'),
        ];
    }
}