<?php

namespace App\Filament\Resources\IssueReportResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RepliesRelationManager extends RelationManager
{
    protected static string $relationship = 'replies';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\RichEditor::make('body')
                ->columnSpanFull()
                ->required()
                ->maxLength(65535),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->poll()
            ->columns([
                Tables\Columns\TextColumn::make('body')
                    ->searchable()
                    ->wrap()
                    ->html(),
                Tables\Columns\TextColumn::make('created_at')->since(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make('Reply')
                    ->successNotificationTitle('A reply has been created')
                    ->disableCreateAnother(),
                //                Tables\Actions\AssociateAction::make(),
            ])
            ->actions([
                //                Tables\Actions\EditAction::make(),
                //                Tables\Actions\DissociateAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                //                Tables\Actions\DissociateBulkAction::make(),
                //                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
