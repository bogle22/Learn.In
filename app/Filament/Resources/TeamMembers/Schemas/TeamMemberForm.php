<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama')
                ->label('Nama')
                ->required(),

            TextInput::make('jabatan')
                ->label('Jabatan')
                ->required(),

            Textarea::make('deskripsi')
                ->label('Deskripsi'),

            FileUpload::make('image')
                ->label('Foto')
                ->image()
                ->disk('public')
                ->directory('team'),
        ]);
    }
}