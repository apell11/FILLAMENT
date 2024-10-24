<?php

namespace App\Filament\Resources\TransectionsResource\Pages;

use App\Filament\Resources\TransectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransections extends ListRecords
{
    protected static string $resource = TransectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
