<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberSubmittedSideEffectResource\Pages;
use App\Filament\Resources\MemberSubmittedSideEffectResource\RelationManagers;
use App\Models\MemberSubmittedSideEffect;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberSubmittedSideEffectResource extends Resource
{
    protected static ?string $model = MemberSubmittedSideEffect::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('member_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('member_medicine_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('member_ilnesses_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('duration'),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('member_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('member_medicine_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('member_ilnesses_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->date()
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
            'index' => Pages\ListMemberSubmittedSideEffects::route('/'),
            'create' => Pages\CreateMemberSubmittedSideEffect::route('/create'),
            'edit' => Pages\EditMemberSubmittedSideEffect::route('/{record}/edit'),
        ];
    }
}
