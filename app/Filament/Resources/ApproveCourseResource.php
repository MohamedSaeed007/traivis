<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApproveCourseResource\Pages;
use App\Filament\Resources\ApproveCourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApproveCourseResource extends Resource
{
    protected static ?string $model = Course::class;
    protected static ?string $label = 'Approve Courses';
    protected static ?string $slug = 'approve-courses';

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('publish_status', 'Under review');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('courseDetails')
                    ->relationship('underReviewCourseDetails')
                    ->schema([
                        Textarea::make('review_feedback')->label('Course Feedback'),
                        Radio::make('publish_status')
                        ->label('Action')
                        ->options([
                            'Approved' => 'Approved',
                            'Declined' => 'Declined'
                        ])
                        ])
                    ->disableItemCreation()
                    ->disableItemDeletion()
                    ->disableItemMovement()
                    ->columns(2),
                Repeater::make('contents')
                    ->relationship('underReviewContents')
                    ->schema([
                        Textarea::make('review_feedback')->label('Feedback'),
                        Radio::make('publish_status')
                            ->label('Action')
                            ->options([
                                'Approved' => 'Approved',
                                'Declined' => 'Declined'
                            ]),
                    ])
                    ->disableItemCreation()
                    ->disableItemDeletion()
                    ->disableItemMovement()
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('id')->label('URL')
                ->action(function ($record) {
                    return redirect()->route('instructor-dashboard-courseDetails', ['id' => $record->getKey()]);
                })
                ->formatStateUsing(fn (string $state): string => route('instructor-dashboard-courseDetails', ['id' => $state]))
            ])
            ->filters([
                //
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
            'index' => Pages\ListApproveCourses::route('/'),
            'create' => Pages\CreateApproveCourse::route('/create'),
            'edit' => Pages\EditApproveCourse::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
       return false;
    }
}