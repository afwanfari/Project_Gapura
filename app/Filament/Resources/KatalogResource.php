<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Katalog;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\ComponentContainer;
use App\Filament\Resources\KatalogResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KatalogResource\RelationManagers;

class KatalogResource extends Resource
{
    protected static ?string $model = Katalog::class;
    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('nama')
                ->required(),
            Forms\Components\TextArea::make('deskripsi')
                ->required(),
                    FileUpload::make('file_path')
                ->disk('public')
                ->directory('katalog')
                ->rules('required', 'mimes:xlsx,xls')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\TextColumn::make('file_path'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKatalogs::route('/'),
            'create' => Pages\CreateKatalog::route('/create'),
            'edit' => Pages\EditKatalog::route('/{record}/edit'),
        ];
    }
}
