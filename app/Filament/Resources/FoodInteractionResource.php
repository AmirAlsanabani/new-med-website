<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FoodInteractionResource\Pages;
use App\Filament\Resources\FoodInteractionResource\RelationManagers;
use App\Models\FoodInteraction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FoodInteractionResource extends Resource
{
    protected static ?string $model = FoodInteraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('medicine_id')
                ->label('Medicine Name')
                ->relationship('medicine','commercial_name')
                ->searchable(),
                Forms\Components\Select::make('food_id')
                ->label('Food Name')
                ->relationship('food','name')
                ->searchable(),
                Forms\Components\Textarea::make('description')->notregex('/^[A-Za-z]+$/')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('severity_meter')->regex('/^[1-5]$/')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('medicine.commercial_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('food.name')
                    ->sortable(),
                    Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('severity_meter')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFoodInteractions::route('/'),
            'create' => Pages\CreateFoodInteraction::route('/create'),
            'edit' => Pages\EditFoodInteraction::route('/{record}/edit'),
        ];
    }
}


