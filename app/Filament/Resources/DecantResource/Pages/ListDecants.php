<?php

namespace App\Filament\Resources\DecantResource\Pages;

use App\Filament\Resources\DecantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDecants extends ListRecords
{
    protected static string $resource = DecantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
