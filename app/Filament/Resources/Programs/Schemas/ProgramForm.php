<?php

namespace App\Filament\Resources\Programs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama')
                ->label('Nama Program')
                ->required(),

            TextInput::make('deskripsi')
                ->label('Deskripsi Singkat')
                ->required(),

            Textarea::make('detail')
                ->label('Detail Program')
                ->rows(5),

            FileUpload::make('image')
                ->label('Gambar')
                ->image()
                ->disk('public')
                ->directory('programs'),
        ]);
    }
}