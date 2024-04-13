<?php

namespace App\Filament\Resources\MemberIlnessResource\Pages;

use App\Filament\Resources\MemberIlnessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMemberIlnesses extends ListRecords
{
    protected static string $resource = MemberIlnessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
