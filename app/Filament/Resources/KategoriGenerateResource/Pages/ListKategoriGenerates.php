<?php

namespace App\Filament\Resources\KategoriGenerateResource\Pages;

use App\Filament\Resources\KategoriGenerateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriGenerates extends ListRecords
{
    protected static string $resource = KategoriGenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
