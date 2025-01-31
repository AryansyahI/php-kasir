<?php

namespace App\Filament\Resources\ProducResource\Pages;

use App\Filament\Resources\ProducResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduc extends EditRecord
{
    protected static string $resource = ProducResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
