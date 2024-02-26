<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 30;
    protected array $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
        'tableColumnSearchQueries',
    ];

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('status')->options(config('traivis.review_statuses')),
            Forms\Components\Select::make('approved_by_id')->relationship('approvedBy', 'name'),
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->disabled(),
            Forms\Components\Select::make('course_id')
                ->disabled()
                ->relationship('course', 'title')
                ->columnSpanFull(),
            Forms\Components\Textarea::make('review')
                ->maxLength(65535)
                ->columnSpanFull(),
            Forms\Components\TextInput::make('rating')->disabled(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->poll()
            ->columns([
                Tables\Columns\TextColumn::make('course.title')
                    ->url(
                        fn(Review $record): ?string => in_array($record->status, ['approve', 'hold'])
                            ? route('course', [
                                    'slug' => $record->course->slug,
                                ]) .
                                '#review-' .
                                $record->id
                            : null,
                    )
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('review')->limit(50),
                Tables\Columns\TextColumn::make('reply_to_id')
                    ->label('Type')
                    ->formatStateUsing(
                        fn(?string $state): string => $state ? 'Instructor\'s reply' : 'Review',
                    ),
                Tables\Columns\TextColumn::make('rating'),
                Tables\Columns\TextColumn::make('status')->enum(config('traivis.review_statuses')),
                Tables\Columns\TextColumn::make('approvedBy.name'),
                //                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
                //                Tables\Columns\TextColumn::make('deleted_at')->dateTime(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('Course')
                    ->relationship('course', 'title')
                    ->searchable(),
                Tables\Filters\SelectFilter::make('User')
                    ->relationship('user', 'name')
                    ->searchable(),

                Tables\Filters\SelectFilter::make('status')
                    ->multiple()
                    ->default(['spam', 'hold'])
                    ->options(config('traivis.review_statuses')),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('approve')
                    ->action(function (Review $record) {
                        $record->update([
                            'status' => 'approve',
                            'approved_by_id' => auth()->id(),
                        ]);
                    })
                    ->label('Approve'),
                Tables\Actions\Action::make('hold')
                    ->action(function (Review $record) {
                        $record->update([
                            'status' => 'hold',
                            'approved_by_id' => null,
                        ]);
                    })
                    ->label('Unapprove'),
                Tables\Actions\Action::make('spam')
                    ->action(function (Review $record) {
                        $record->update(['status' => 'spam', 'approved_by_id' => auth()->id()]);
                    })
                    ->label('Spam'),
                Tables\Actions\EditAction::make()->mutateRecordDataUsing(function (array $data): array {
                    $data['approved_by_id'] = auth()->id();

                    return $data;
                }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class])
            ->with('course');
    }

    public static function canCreate(): bool
    {
        return false;
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()
            ::whereIn('status', ['hold'])
            ->count();
    }
}
