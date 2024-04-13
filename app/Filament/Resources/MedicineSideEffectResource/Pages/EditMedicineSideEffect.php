<?php

namespace App\Filament\Resources\MedicineSideEffectResource\Pages;

use App\Filament\Resources\MedicineSideEffectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedicineSideEffect extends EditRecord
{
    protected static string $resource = MedicineSideEffectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
