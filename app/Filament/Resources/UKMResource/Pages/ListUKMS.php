<?php

namespace App\Filament\Resources\UKMResource\Pages;

use App\Filament\Resources\UKMResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUKMS extends ListRecords
{
    protected static string $resource = UKMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
