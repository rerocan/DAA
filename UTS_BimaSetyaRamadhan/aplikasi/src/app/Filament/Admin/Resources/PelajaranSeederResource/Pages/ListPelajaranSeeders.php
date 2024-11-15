<?php

namespace App\Filament\Admin\Resources\PelajaranSeederResource\Pages;

use App\Filament\Admin\Resources\PelajaranSeederResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelajaranSeeders extends ListRecords
{
    protected static string $resource = PelajaranSeederResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
