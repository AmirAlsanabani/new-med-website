<?php

namespace App\Filament\Resources\IllnessResource\Pages;

use App\Filament\Resources\IllnessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIllnesses extends ListRecords
{
    protected static string $resource = IllnessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
