<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IllnessInteractionResource\Pages;
use App\Filament\Resources\IllnessInteractionResource\RelationManagers;
use App\Models\IllnessInteraction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IllnessInteractionResource extends Resource
{
    protected static ?string $model = IllnessInteraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('medicine_id')
                ->label('Medicine Name')
                ->relationship('medicine','commercial_name')
                ->searchable(),
                Forms\Components\Select::make('ilness_id')
                ->label('Ilness Name')
                ->relationship('illness','name')
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
                Tables\Columns\TextColumn::make('illness.name')
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
            'index' => Pages\ListIllnessInteractions::route('/'),
            'create' => Pages\CreateIllnessInteraction::route('/create'),
            'edit' => Pages\EditIllnessInteraction::route('/{record}/edit'),
        ];
    }
}
