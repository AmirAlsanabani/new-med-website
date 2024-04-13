<?php

namespace App\Filament\Resources\MedicineWarningResource\Pages;

use App\Filament\Resources\MedicineWarningResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedicineWarning extends EditRecord
{
    protected static string $resource = MedicineWarningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
