<?php

namespace App\Filament\Resources\PriceResource\Pages;

use App\Filament\Resources\PriceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrice extends EditRecord
{
    protected static string $resource = PriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Additional logic before saving a price record, if needed
        return $data;
    }
}
