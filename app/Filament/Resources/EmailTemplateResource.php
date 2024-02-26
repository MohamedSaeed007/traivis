<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmailTemplateResource\Pages;
use App\Filament\Resources\EmailTemplateResource\RelationManagers;
use App\Models\EmailTemplate;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmailTemplateResource extends Resource
{
    protected static ?string $model = EmailTemplate::class;
    protected static ?string $navigationIcon = 'heroicon-o-mail';
    protected static ?int $navigationSort = 10;
    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('key')->required(),
                // TextInput::make('from')->email(),
                // TextInput::make('to'),
                TextInput::make('subject'),
                MarkdownEditor::make('email_body')->columnSpan('full')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('key'),
                // TextColumn::make('from'),
                // TextColumn::make('to'),
                TextColumn::make('subject'),
                TextColumn::make('is_show')->enum([
                    1 => 'Yes',
                    0 => 'No',
                ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListEmailTemplates::route('/'),
            'create' => Pages\CreateEmailTemplate::route('/create'),
            'edit' => Pages\EditEmailTemplate::route('/{record}/edit'),
        ];
    }
}