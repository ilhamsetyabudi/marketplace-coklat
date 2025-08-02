<?php

namespace App\Filament\Resources\ChocolateResource\Pages;

use App\Filament\Resources\ChocolateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChocolates extends ListRecords
{
    protected static string $resource = ChocolateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
