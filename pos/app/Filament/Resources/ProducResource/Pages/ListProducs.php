<?php

namespace App\Filament\Resources\ProducResource\Pages;

use App\Filament\Resources\ProducResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProducs extends ListRecords
{
    protected static string $resource = ProducResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
