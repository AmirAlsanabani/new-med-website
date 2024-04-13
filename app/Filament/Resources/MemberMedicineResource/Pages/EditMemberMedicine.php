<?php

namespace App\Filament\Resources\MemberMedicineResource\Pages;

use App\Filament\Resources\MemberMedicineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMemberMedicine extends EditRecord
{
    protected static string $resource = MemberMedicineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
