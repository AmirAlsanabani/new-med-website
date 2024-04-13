<?php

namespace App\Filament\Resources\MemberMedicineResource\Pages;

use App\Filament\Resources\MemberMedicineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMemberMedicines extends ListRecords
{
    protected static string $resource = MemberMedicineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
