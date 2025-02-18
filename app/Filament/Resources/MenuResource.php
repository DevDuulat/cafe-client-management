<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use App\Models\MenuCategory;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationLabel = 'Меню';
    protected static ?string $pluralModelLabel = 'Меню';
    protected static ?string $modelLabel = 'Меню';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_menu')
                    ->required()
                    ->maxLength(255)
                    ->label('Название меню'),

                TextInput::make('price')
                    ->label('Цена')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(999999.99)
                    ->step(0.01),

                Textarea::make('body_menu')
                    ->required()
                    ->columnSpanFull()
                    ->label('Описание меню'),

                FileUpload::make('img_menu')
                    ->directory('menu_images')
                    ->image()
                    ->maxSize(2048)
                    ->required()
                    ->label('Изображение меню'),

                Select::make('menu_category_fk')
                    ->label('Категория')
                    ->options(MenuCategory::pluck('name_category', 'id'))
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_menu')
                    ->searchable()
                    ->label('Название меню'),

                Tables\Columns\ImageColumn::make('img_menu')
                    ->disk('public')
                    ->width(50)
                    ->height(50)
                    ->square()
                    ->label('Изображение'),

                Tables\Columns\TextColumn::make('price')
                    ->label('Цена')
                    ->sortable()
                    ->money('KGS'),

                Tables\Columns\TextColumn::make('menuCategory.name_category')
                    ->label('Категория')
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
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
