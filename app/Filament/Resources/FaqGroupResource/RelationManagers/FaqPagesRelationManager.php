<?php

namespace App\Filament\Resources\FaqGroupResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class FaqPagesRelationManager extends RelationManager
{
    protected static string $relationship = 'faqPages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->columnSpanFull()
                ->required()
                ->maxLength(191),
            Repeater::make('Sections')
                ->relationship('faqSections')
                ->columnSpanFull()
                ->schema([
                    Forms\Components\TextInput::make('question')
                        ->columnSpanFull()
                        ->required()
                        ->maxLength(191),
                    Forms\Components\RichEditor::make('answer')
                        ->fileAttachmentsDirectory('faq')
                        ->columnSpanFull()
                        ->required(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('faq_sections_count')->counts('faqSections'),
            ])
            ->filters([
                //
            ])
            ->headerActions([Tables\Actions\CreateAction::make()])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }
}
