<?php

namespace App\Filament\Resources\IllnessResource\Pages;

use App\Filament\Resources\IllnessResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIllness extends EditRecord
{
    protected static string $resource = IllnessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
