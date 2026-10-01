<?php

namespace App\Filament\Resources\Galleries\Schemas;

use App\Models\Program;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('program_id')
                ->label('Program')
                ->options(Program::pluck('nama', 'id'))
                ->searchable()
                ->required(),

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