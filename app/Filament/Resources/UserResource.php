<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Resources\UserResource\RelationManagers\BusinessesRelationManager;
use App\Models\Model;
use App\Models\User;
use App\Tables\Columns\UserBusinesses;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?int $navigationSort = 1;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('id', '>', 1);
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('password')->password()->required()->hiddenOn('edit'),
                TextInput::make('phone')->tel(),
                TextInput::make('username')->required(),
                TextInput::make('first_name')->required(),
                TextInput::make('middle_name'),
                TextInput::make('last_name')->required(),
                TextInput::make('city'), // will be city_id in V1
                TextInput::make('country'), // will be city_id in V1
                TextInput::make('zip_code')->numeric(),
                TextInput::make('postcode')->numeric(),
                TextInput::make('website'),
                TextInput::make('company_name'),
                DatePicker::make('date_of_birth'),
                Select::make('user_type')->options(
                    [
                        'user' => 'user',
                        'admin' => 'admin',
                        'support' => 'support',
                        'sub_admin' => 'sub_admin'
                    ]
                ),
                Select::make('gender')->required()->options(
                    [
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ]
                ),
                Textarea::make('address')->rows(1),
                Textarea::make('address_2')->rows(1),
                Textarea::make('about_me')->rows(1),
//                FileUpload::make('profile_pic')->image(),
                SpatieMediaLibraryFileUpload::make('profile_pic')
                    ->disk('media'),
                Toggle::make('approved'),
                Toggle::make('active_status'),
                // TextInput::make('role'),
                // TextInput::make('course_type'),
                // Textarea::make('coupon'),
                // TextInput::make('options'),
                // Select::make('state_id'),
                // Select::make('city_id'),
                // Select::make('country_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->disk('media'),
                TextColumn::make('name')->sortable(),
                TextColumn::make('email')->view('tables.columns.login-as-user')->sortable()->tooltip('Click to Login As User'),
                TextColumn::make('businesses.business_name')->view('tables.columns.user-businesses')->tooltip('Click to Login As Business'),
                ToggleColumn::make('active_status')->label('Active'),
                ToggleColumn::make('approved'),

            ])
            ->filters([
                SelectFilter::make('businesses')
                    ->relationship('businesses', 'business_name')
                    ->multiple(),
                TernaryFilter::make('active_status')
                    ->placeholder('Pending')
                    ->trueLabel('Active')
                    ->falseLabel('Blocked')
                    ->default(true)
                    ->queries(
                        true: fn(Builder $query) => $query->where('active_status', 1),
                        false: fn(Builder $query) => $query->where('active_status', 0),
                        blank: fn(Builder $query) => $query->where('active_status', null),
                    ),

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
            // BusinessesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}