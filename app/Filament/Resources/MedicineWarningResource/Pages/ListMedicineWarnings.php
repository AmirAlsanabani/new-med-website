<?php

namespace App\Filament\Resources\MedicineWarningResource\Pages;

use App\Filament\Resources\MedicineWarningResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicineWarnings extends ListRecords
{
    protected static string $resource = MedicineWarningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
