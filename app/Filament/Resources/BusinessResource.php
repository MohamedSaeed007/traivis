<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BusinessResource\Pages;
use App\Filament\Resources\BusinessResource\RelationManagers;
use App\Filament\Resources\BusinessResource\RelationManagers\SettingsRelationManager;
use App\Mail\SendMailFromSuperAdmin;
use App\Models\Business;
use App\Models\EmailTemplate;
use App\Models\PromoCode;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Mail;

class BusinessResource extends Resource
{
    protected static ?string $model = Business::class;
    protected static ?string $pluralModelLabel = 'marketing';
    protected static ?string $modelLabel = 'marketing';
    protected static ?string $slug = 'marketing';
    protected static ?string $recordTitleAttribute = 'marketing';
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 8;
    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('promoCodes')
                    ->relationship('promoCodes', 'title')
                    ->multiple()
                    ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('business_name'),
                TextColumn::make('business_type'),
                // TextColumn::make('business_number'),
                TextColumn::make('business_email'),
                // TextColumn::make('business_phone_one'),
                TextColumn::make('owner.name')->label('Owner Name'),
                TextColumn::make('owner.email')->label('Owner Email'),
                TagsColumn::make('industries.en_name')->label('Industries'),
                TagsColumn::make('categories.category_name')->label('Categories'),
                TagsColumn::make('promoCodes.title')->label('Promo Codes'),
            ])
            ->filters([
                SelectFilter::make('business_type')
                    ->multiple()
                    ->options([
                        'institute' => 'Institute',
                        'instructor' => 'Instructor',
                        'enterprise' => 'Enterprise',
                    ]),
                SelectFilter::make('industries')
                    ->multiple()
                    ->relationship('industries', 'en_name'),
                SelectFilter::make('categories')
                    ->multiple()
                    ->relationship('categories', 'category_name'),
                SelectFilter::make('promoCodes')
                    ->multiple()
                    ->relationship('promoCodes', 'title'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\BulkAction::make('sendMarketingEmail')
                    ->form([
                        Select::make('template')
                            ->options(EmailTemplate::all()->pluck('title', 'id'))
                            ->required(),
                    ])
                    ->action(function (Collection $records, $data) {
                        // $records->each->activate();
                        foreach ($records as $record) {
                            Mail::to($record->business_email)->send(new SendMailFromSuperAdmin($data['template'], $record));
                        }
                    }),
                Tables\Actions\BulkAction::make('assignPromoCode')
                    ->form([
                        Select::make('promo')
                            ->options(PromoCode::all()->pluck('title', 'id'))
                            ->required(),
                    ])
                    ->action(function (Collection $records, $data) {
                        foreach ($records as $record) {
                            $record->promoCodes()->sync([$data['promo']]);
                        }
                    })
            ]);
    }

    public static function getRelations(): array
    {
        return [
            SettingsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBusinesses::route('/'),
            'create' => Pages\CreateBusiness::route('/create'),
            'edit' => Pages\EditBusiness::route('/{record}/edit'),
        ];
    }
}