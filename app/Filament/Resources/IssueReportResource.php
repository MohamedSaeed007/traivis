<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IssueReportResource\Pages;
use App\Filament\Resources\IssueReportResource\RelationManagers\RepliesRelationManager;
use App\Models\IssueReport;
use Filament\Forms;
use Filament\Pages\Actions\Action;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use App\Filament\Resources\ReviewResource\RelationManagers;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class IssueReportResource extends Resource
{
    protected static ?string $model = IssueReport::class;

    protected static ?string $slug = 'issue-reports';
    protected static ?string $navigationIcon = 'heroicon-o-support';

    protected static ?string $recordTitleAttribute = 'number';
    protected static ?int $navigationSort = 50;

    public static function table(Table $table): Table
    {
        return $table
            ->poll()
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->label('#')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('has_payload')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('warning'),
                Tables\Columns\TextColumn::make('severity')
                    ->enum(config('traivis.issue_reports.severities.list'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->enum(config('traivis.issue_reports.statuses.list'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('initiatedByUser.name'),
                Tables\Columns\TextColumn::make('updated_at')->since(),
            ])
            ->actions([
                Tables\Actions\Action::make('Close')->action(function (IssueReport $record) {
                    $record->update([
                        'status' => 'closed',
                    ]);
                }),
            ])
            //            ->bulkActions([
            //                // Tables\Actions\DeleteBulkAction::make(),
            //                Tables\Actions\BulkAction::make('Close selected')->action(
            //                    fn(Collection $records) => $records->each->update(['status' => 'closed']),
            //                ),
            //            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->default(['open', 'in-progress'])
                    ->multiple()
                    ->options(config('traivis.issue_reports.statuses.list')),
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form->columns(4)->schema([
            Forms\Components\TextInput::make('title')
                ->columnSpanFull()
                ->required(),
            Forms\Components\RichEditor::make('description')
                ->columnSpanFull()
                ->required(),
            Forms\Components\Placeholder::make('')
                ->columnSpanFull()
                ->label('URL')
                ->view('forms.columns.login-as-user'),
            //                ->content(fn(?IssueReport $record): string => $record->title)
            Forms\Components\Textarea::make('debug_info')
                ->disabled()
                ->columnSpanFull(),
            Forms\Components\Select::make('user_id')
                ->placeholder('Select issue initiator')
                ->columnSpan(2)
                ->searchable()
                ->relationship('initiatedByUser', 'name')
                ->required(),
            Forms\Components\Select::make('severity')
                //                ->hiddenOn('view')
                ->required()
                ->default(config('traivis.issue_reports.severities.default'))
                ->options(config('traivis.issue_reports.severities.list')),
            Forms\Components\Select::make('status')
                //                ->hiddenOn('view')
                ->required()
                ->default(config('traivis.issue_reports.statuses.default'))
                ->options(config('traivis.issue_reports.statuses.list')),
            //            Placeholder::make('created_at')
            //                ->label('Created Date')
            //                ->content(
            //                    fn(?IssueReport $record): string => $record?->created_at?->diffForHumans() ?? '-',
            //                ),
            //
            //            Placeholder::make('updated_at')
            //                ->label('Last Modified Date')
            //                ->content(
            //                    fn(?IssueReport $record): string => $record?->updated_at?->diffForHumans() ?? '-',
            //                ),
        ]);
    }

    public static function getRelations(): array
    {
        return [RepliesRelationManager::class];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIssueReports::route('/'),
            'create' => Pages\CreateIssueReport::route('/create'),
            'view' => Pages\ViewIssueReport::route('/{record}'),
            'edit' => Pages\EditIssueReport::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            //            ->where('status', '!=', 'close')
            ->orderByDesc('updated_at')
            ->withoutGlobalScopes([SoftDeletingScope::class]);
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()
            ::whereIn('status', ['open', 'in-progress'])
            ->count();
    }
}
