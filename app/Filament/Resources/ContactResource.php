<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $modelLabel = 'Pesan';
    protected static ?string $pluralModelLabel = 'Daftar Pesan';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([Tables\Columns\TextColumn::make('name')->label('Nama Pengirim'), Tables\Columns\TextColumn::make('email'), Tables\Columns\TextColumn::make('message')->label('Pesan')])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Contacts');
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
    public static function getLabel(): string
    {
        return 'Pesan';
    }
}
