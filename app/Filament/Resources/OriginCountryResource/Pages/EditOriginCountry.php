<?php

namespace App\Filament\Resources\OriginCountryResource\Pages;

use App\Filament\Resources\OriginCountryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOriginCountry extends EditRecord
{
    protected static string $resource = OriginCountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
