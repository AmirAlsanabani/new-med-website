<?php

namespace App\Filament\Resources\IllnessInteractionResource\Pages;

use App\Filament\Resources\IllnessInteractionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIllnessInteractions extends ListRecords
{
    protected static string $resource = IllnessInteractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
