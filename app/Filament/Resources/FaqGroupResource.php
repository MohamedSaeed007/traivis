<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqGroupResource\Pages;
use App\Filament\Resources\FaqGroupResource\RelationManagers;
use App\Models\FaqGroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaqGroupResource extends Resource
{
    protected static ?string $model = FaqGroup::class;
    protected static ?string $slug = 'faq-groups';
    protected static ?int $navigationSort = 20;

    protected static ?string $navigationLabel = 'FAQs';
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $label = 'FAQ Group';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(191),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('faq_pages_count')->counts('faqPages'),
            ])
            ->filters([Tables\Filters\TrashedFilter::make()])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [RelationManagers\FaqPagesRelationManager::class];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFaqGroups::route('/'),
            'create' => Pages\CreateFaqGroup::route('/create'),
            'edit' => Pages\EditFaqGroup::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
