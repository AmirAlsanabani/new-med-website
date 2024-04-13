<?php

namespace App\Filament\Resources\MemberSubmittedSideEffectResource\Pages;

use App\Filament\Resources\MemberSubmittedSideEffectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMemberSubmittedSideEffects extends ListRecords
{
    protected static string $resource = MemberSubmittedSideEffectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
