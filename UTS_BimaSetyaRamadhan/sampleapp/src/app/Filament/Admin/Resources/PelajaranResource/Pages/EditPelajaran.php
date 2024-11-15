<?php

namespace App\Filament\Admin\Resources\PelajaranResource\Pages;

use App\Filament\Admin\Resources\PelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelajaran extends EditRecord
{
    protected static string $resource = PelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
