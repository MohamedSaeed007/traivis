<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfluencerResource\Pages;
use App\Filament\Resources\InfluencerResource\RelationManagers\UserRelationManager;
use App\Mail\InfluencerRegister;
use App\Models\InfluencerInformation;
use App\Models\Model;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InfluencerResource extends Resource
{
    const statusOptions = [
        1 => 'Pending',
        2 => 'Approved',
        3 => 'Rejected'
    ];

    protected static ?string $model = InfluencerInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('facebook_url')->url(),
                TextInput::make('instagram_url')->url(),
                TextInput::make('twitter_url')->url(),
                TextInput::make('youtube_url')->url(),
                TextInput::make('snap_chat_url')->url(),
                TextInput::make('tiktok_url')->url(),

                TextInput::make('facebook_followers')->numeric(),
                TextInput::make('instagram_followers')->numeric(),
                TextInput::make('twitter_followers')->numeric(),
                TextInput::make('youtube_followers')->numeric(),
                TextInput::make('snap_chat_followers')->numeric(),
                TextInput::make('tiktok_followers')->numeric(),


                TextInput::make('message'),

                Select::make('status')->options(self::statusOptions),

            ]);
    }
    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('User'),
                TextColumn::make('message'),
                TextColumn::make('status')->enum(self::statusOptions),
            ])
            ->filters([
                SelectFilter::make('user')
                    ->multiple()
                    ->relationship('user', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->after(function (Model $record, array $data): void {
                        if ($record->status != 1) {
                            $user = User::find($record->user_id);
                            Mail::to($user->email)->send(new InfluencerRegister($record));
                        }
                    }),
            ]);
    }
    public static function getRelations(): array
    {
        return [
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInfluencers::route('/')
        ];
    }

}