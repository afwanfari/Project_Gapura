<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Katalog;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\KatalogResource\Pages;

class KatalogResource extends Resource
{
    protected static ?string $model = Katalog::class;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form->schema([Forms\Components\Textarea::make('nama')->label('Nama Katalog')->required()->unique(static::getModel(), 'nama'), Forms\Components\TextArea::make('deskripsi')->required(), FileUpload::make('file_path')->disk('public')->directory('katalog')->rules('required', 'mimes:xlsx,xls,doc,docx')->label('Upload File Katalog')]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([Tables\Columns\TextColumn::make('nama'), Tables\Columns\TextColumn::make('deskripsi'), Tables\Columns\TextColumn::make('file_path')])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKatalogs::route('/'),
            'create' => Pages\CreateKatalog::route('/create'),
            'edit' => Pages\EditKatalog::route('/{record}/edit'),
        ];
    }
    public static function getLabel(): string
    {
        return 'Katalog';
    }
}
