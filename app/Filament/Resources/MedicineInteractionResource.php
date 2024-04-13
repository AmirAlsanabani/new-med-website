<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicineInteractionResource\Pages;
use App\Filament\Resources\MedicineInteractionResource\RelationManagers;
use App\Models\MedicineInteraction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicineInteractionResource extends Resource
{
    protected static ?string $model = MedicineInteraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('medicine_id1')
                ->label('Medicine Name')
                ->relationship('medicine','commercial_name')
                ->searchable(),
                Forms\Components\Select::make('medicine_id2')
                ->label('Medicine Name')
                ->relationship('medicine','commercial_name')
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
                Tables\Columns\TextColumn::make('medicine_id1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('medicine_id2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('severity_meter')
                    ->numeric()
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
            'index' => Pages\ListMedicineInteractions::route('/'),
            'create' => Pages\CreateMedicineInteraction::route('/create'),
            'edit' => Pages\EditMedicineInteraction::route('/{record}/edit'),
        ];
    }
}
