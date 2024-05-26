<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Barang;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BarangResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BarangResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('idbarang')
                ->required(),
            Forms\Components\TextInput::make('nama')
                ->required(),
            Forms\Components\Select::make('jenis_barang')
                ->label('Jenis Barang')
                ->options(Barang::distinct()->pluck('jenis_barang', 'jenis_barang'))
                ->searchable()
                ->required(),
                FileUpload::make('gambar')
                ->image()
                ->disk('public')
                ->directory('snappic')
                ->preserveFilenames('')
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    $Name = $file->getClientOriginalName();
                    return 'barang-' . $Name;
                }),
            Forms\Components\Textarea::make('deskripsi')
                ->required(),
            Forms\Components\TextInput::make('komponen_terpasang')
                ->required(),
            Forms\Components\TextInput::make('dimensi')
                ->required(),
            Forms\Components\TextInput::make('bahan')
                ->required(),
            Forms\Components\TextInput::make('warna')
                ->required(),
            Forms\Components\TextInput::make('sumber_daya')
                ->required(),
            Forms\Components\Textarea::make('data_teknis')
                ->required(),
            Forms\Components\TextInput::make('aksesoris')
                ->required(),
            Forms\Components\TextInput::make('harga')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('idbarang'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('jenis_barang'),
                Tables\Columns\TextColumn::make('gambar'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\TextColumn::make('komponen_terpasang'),
                Tables\Columns\TextColumn::make('dimensi'),
                Tables\Columns\TextColumn::make('bahan'),
                Tables\Columns\TextColumn::make('warna'),
                Tables\Columns\TextColumn::make('sumber_daya'),
                Tables\Columns\TextColumn::make('data_teknis'),
                Tables\Columns\TextColumn::make('aksesoris'),
                Tables\Columns\TextColumn::make('harga'),
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
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}
