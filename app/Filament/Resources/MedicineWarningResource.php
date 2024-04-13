<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicineWarningResource\Pages;
use App\Filament\Resources\MedicineWarningResource\RelationManagers;
use App\Models\MedicineWarning;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicineWarningResource extends Resource
{
    protected static ?string $model = MedicineWarning::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('medicine_id')
                ->label('Medicine Name')
                ->relationship('medicine','commercial_name')
                ->searchable(),
                Forms\Components\Select::make('warning_id')
                ->label('SideEffect Name')
                ->relationship('warning','description')
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('medicine.commercial_name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('warning.description')
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
            'index' => Pages\ListMedicineWarnings::route('/'),
            'create' => Pages\CreateMedicineWarning::route('/create'),
            'edit' => Pages\EditMedicineWarning::route('/{record}/edit'),
        ];
    }
}
