<?php

namespace App\Filament\Resources\PustakawanResource\Pages;

use App\Filament\Resources\PustakawanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPustakawan extends EditRecord
{
    protected static string $resource = PustakawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
