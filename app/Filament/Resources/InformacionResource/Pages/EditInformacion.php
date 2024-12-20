<?php

namespace App\Filament\Resources\InformacionResource\Pages;

use App\Filament\Resources\InformacionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformacion extends EditRecord
{
    protected static string $resource = InformacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
