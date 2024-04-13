<?php

namespace App\Filament\Resources\MedicineInteractionResource\Pages;

use App\Filament\Resources\MedicineInteractionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedicineInteraction extends EditRecord
{
    protected static string $resource = MedicineInteractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
