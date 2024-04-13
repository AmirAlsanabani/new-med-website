<?php

namespace App\Filament\Resources\MedicineSideEffectResource\Pages;

use App\Filament\Resources\MedicineSideEffectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicineSideEffects extends ListRecords
{
    protected static string $resource = MedicineSideEffectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
