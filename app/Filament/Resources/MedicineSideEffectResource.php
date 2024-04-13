<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicineSideEffectResource\Pages;
use App\Filament\Resources\MedicineSideEffectResource\RelationManagers;
use App\Models\MedicineSideEffect;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicineSideEffectResource extends Resource
{
    protected static ?string $model = MedicineSideEffect::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('medicine_id')
                ->label('Medicine Name')
                ->relationship('medicine','commercial_name')
                ->searchable(),
                Forms\Components\Select::make('side_effect_id')
                ->label('SideEffect Name')
                ->relationship('side_effect','name')
                ->searchable(),
                Forms\Components\TextInput::make('frequency')->regex('/^[1-5]$/')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('medicine.commercial_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('side_effect.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('frequency')
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
            'index' => Pages\ListMedicineSideEffects::route('/'),
            'create' => Pages\CreateMedicineSideEffect::route('/create'),
            'edit' => Pages\EditMedicineSideEffect::route('/{record}/edit'),
        ];
    }
}
