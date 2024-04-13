<?php

namespace App\Filament\Resources\MemberIlnessResource\Pages;

use App\Filament\Resources\MemberIlnessResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMemberIlness extends EditRecord
{
    protected static string $resource = MemberIlnessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
