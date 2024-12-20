<?php

namespace App\Filament\Resources\InformacionResource\Pages;

use App\Filament\Resources\InformacionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformacions extends ListRecords
{
    protected static string $resource = InformacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
