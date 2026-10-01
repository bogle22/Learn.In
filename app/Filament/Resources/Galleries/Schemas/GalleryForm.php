<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('judul')
                ->required(),

            FileUpload::make('image')
                ->label('Foto')
                ->image()
                ->disk('public')
                ->directory('gallery')
                ->required(),
        ]);
    }
}