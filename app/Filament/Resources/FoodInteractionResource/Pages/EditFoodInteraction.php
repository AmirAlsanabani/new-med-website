<?php

namespace App\Filament\Resources\FoodInteractionResource\Pages;

use App\Filament\Resources\FoodInteractionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFoodInteraction extends EditRecord
{
    protected static string $resource = FoodInteractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
