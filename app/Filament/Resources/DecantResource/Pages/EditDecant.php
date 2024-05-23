<?php

namespace App\Filament\Resources\DecantResource\Pages;

use App\Filament\Resources\DecantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDecant extends EditRecord
{
    protected static string $resource = DecantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->record->update([
            'brand_id' => $data['brand_id'],
            'size_id' => $data['size_id'],
            'price' => $data['price'],
        ]);

        return $data;
    }
}
