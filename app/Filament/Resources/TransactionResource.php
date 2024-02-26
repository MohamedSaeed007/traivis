<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Models\Course;
use App\Models\Transaction;
use App\Models\User;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?int $navigationSort = 5;

    protected static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }
    public static function getEloquentQuery(): Builder
    {
        $transactions = parent::getEloquentQuery()
        // ->join('courses','productable_id', '=', 'courses.id')
        ->orderBy('transaction_status');
        // ->orderBy('courses.last_lecture_end_date');
        // dd($transactions->first()->productable->lectures()->where('delivery_mode','!=',2)->latest()->first()?->end_date);
        return $transactions;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Radio::make('transaction_status')
                            ->label('Action')
                            ->options([
                                2 => 'Complete',
                                3 => 'Cancel',
                            ])
                            ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_num'),
                TextColumn::make('payment_method')->enum([
                    '1' => 'Card (Stripe)',
                    '2' => 'Paypal',
                    '3' => 'Wallet',
                ]),
                TextColumn::make('transaction_type')->enum([
                    '1' => 'Course Purchase',
                    '2' => 'Withdrawal',
                ]),
                TextColumn::make('transaction_status')->enum([
                    '1' => 'Pending',
                    '2' => 'Success',
                    '3' => 'Canceled',
                ]),
                TextColumn::make('order_id')->label('Order Id'),
                TextColumn::make('payerable')->label('Payer')
                    ->formatStateUsing(function ($state): string {
                        if ($state) {
                            if (get_class($state) == User::class) {
                                return '(Student) ' . $state->name;
                            } else {
                                return '(' . $state->business_type . ') ' . $state->business_name;
                            }
                        } else {
                            return 'N/A';
                        }
                    }),
                TextColumn::make('payeeable')->label('Payee')
                    ->formatStateUsing(function ($state): string {
                        if ($state) {
                            if (get_class($state) == User::class) {
                                return '(Student) ' . $state->name;
                            } else {
                                return '(' . $state->business_type . ') ' . $state->business_name;
                            }
                        } else {
                            return 'N/A';
                        }
                    }),
                TextColumn::make('productable')->label('Product')
                    ->formatStateUsing(function ($state): string {
                        if ($state) {
                            if (get_class($state) == Course::class) {
                                return '(Course) ' . substr($state->title, 0, 15);
                            } else {
                                return '(Plan) ' . $state->name;
                            }
                        } else {
                            return 'N/A';
                        }
                    }),
                TextColumn::make('product_price')->label('Amount')->money('usd', true),
                TextColumn::make('discount')->money('usd', true),
                TextColumn::make('amount_after_discount')->money('usd', true),
                TextColumn::make('traivis_commission')->money('usd', true),
                TextColumn::make('final_amount')->money('usd', true),
                TextColumn::make('hold_balance')->money('usd', true),
                TextColumn::make('balance')->money('usd', true),

                /* TextColumn::make('productable_type')->label('Product Type')->enum([
                Course::class => 'Course',
                Plan::class => 'Subscription',
                ]), */

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('markTransactionAsCompleted')
                    ->label('Complete Transaction')
                    ->mountUsing(function (Forms\ComponentContainer $form, Transaction $record) {
                        $form->fill([
                        'action' => $record->transaction_status,
                        ]);
                    })
                    ->form([
                        Forms\Components\Radio::make('action')
                            ->label('Action')
                            ->options([
                                2 => 'Complete',
                                3 => 'Cancel',
                            ])
                            ->required(),
                    ])
                    ->action(function (Transaction $record, array $data): void {
                        $record->transaction_status = $data['action'];
                        $record->save();
                    })
                    ->visible(fn($record) => $record->transaction_status==1),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}