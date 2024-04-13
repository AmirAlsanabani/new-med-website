<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicineResource\Pages;
use App\Filament\Resources\MedicineResource\RelationManagers;
use App\Models\Medicine;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class MedicineResource extends Resource
{
    protected static ?string $model = Medicine::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('commercial_name')->regex('/^[A-Za-z]+$/')
                    ->maxLength(255),
                Forms\Components\TextInput::make('scientific_name')->regex('/^[A-Za-z]+$/')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('men_dosage')
                    ->maxLength(255),
                Forms\Components\TextInput::make('women_dosage')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kids_dosage')
                    ->maxLength(255),
                Forms\Components\Select::make('category_id')
                ->label('Medicine Category')
                ->relationship('medicine_category','name')
                ->searchable(),
                Forms\Components\Select::make('country_id')
                ->label('Medicine Country')
                ->relationship('origin_country','name')
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('commercial_name')
                    ->searchable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('scientific_name')
                    ->searchable()
                    ->wrap(),
                    Tables\Columns\TextColumn::make('medicine_category.name')
                    ->wrap(),
                Tables\Columns\TextColumn::make('origin_country.name')
                    ->wrap(),
                Tables\Columns\TextColumn::make('men_dosage')
                    ->wrap(),
                Tables\Columns\TextColumn::make('women_dosage')
                    ->wrap(),
                Tables\Columns\TextColumn::make('kids_dosage')
                    ->wrap(),

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
            'index' => Pages\ListMedicines::route('/'),
            'create' => Pages\CreateMedicine::route('/create'),
            'edit' => Pages\EditMedicine::route('/{record}/edit'),
        ];
    }
}
