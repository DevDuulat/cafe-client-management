<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Models\Reservation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;
    protected static ?string $navigationLabel = 'Бронирования';
    protected static ?string $pluralModelLabel = 'Бронирования';
    protected static ?string $modelLabel = 'Бронирование';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Имя клиента'),
                Forms\Components\DatePicker::make('reservation_date')
                    ->required()
                    ->label('Дата бронирования'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255)
                    ->label('Телефон'),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255)
                    ->label('Местоположение'),
                Forms\Components\TextInput::make('number_of_persons')
                    ->required()
                    ->numeric()
                    ->label('Кол-во гостей'),
                Forms\Components\TextInput::make('table_number')
                    ->required()
                    ->numeric()
                    ->label('Номер стола'),
                Forms\Components\TextInput::make('time')
                    ->required()
                    ->label('Время'),
                Forms\Components\Textarea::make('wishes')
                    ->columnSpanFull()
                    ->label('Пожелания'),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'В обработке',
                        'approved' => 'Принят',
                        'rejected' => 'Отклонен',
                    ])
                    ->default('pending')
                    ->required()
                    ->label('Статус брони'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Бронировал')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Имя клиента'),
                Tables\Columns\TextColumn::make('reservation_date')
                    ->date()
                    ->sortable()
                    ->label('Дата бронирования'),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->label('Телефон'),
                Tables\Columns\TextColumn::make('location')
                    ->searchable()
                    ->label('Местоположение'),
                Tables\Columns\TextColumn::make('number_of_persons')
                    ->numeric()
                    ->sortable()
                    ->label('Кол-во гостей'),
                Tables\Columns\TextColumn::make('table_number')
                    ->numeric()
                    ->sortable()
                    ->label('Номер стола'),
                Tables\Columns\TextColumn::make('time')
                    ->label('Время'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Статус')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'В обработке',
                        'approved' => 'Принят',
                        'rejected' => 'Отклонён',
                        default => 'Неизвестно',
                    })
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Дата создания'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Дата обновления'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'В обработке',
                        'approved' => 'Принят',
                        'rejected' => 'Отклонен',
                    ])
                    ->label('Фильтр по статусу'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Редактировать'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Удалить выбранные'),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservation::route('/create'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
}
