<?php

namespace App\Filament\Resources\PustakawanResource\Pages;

use App\Filament\Resources\PustakawanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPustakawans extends ListRecords
{
    protected static string $resource = PustakawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
