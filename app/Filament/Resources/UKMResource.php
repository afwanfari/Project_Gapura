<?php

namespace App\Filament\Resources;

use App\Models\UKM;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\UKMResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class UKMResource extends Resource
{
    public $idbarang;
    public $nama;
    protected static ?string $model = UKM::class;
    public static function getNavigationBadge(): ?string
    {
        return UKM::where('jenis_barang', 'Usaha Kecil Menengah (UKM)')->count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('idbarang')
                ->label('Kode Produk')
                ->required()
                ->unique(static::getModel(), 'idbarang')
                ->reactive(),
            Forms\Components\TextInput::make('nama')
                ->label('Nama Produk')
                ->required()
                ->unique(static::getModel(), 'nama')
                ->reactive(),
            Forms\Components\FileUpload::make('gambar')
                ->image()
                ->disk('public')
                ->directory('snappic')
                ->preserveFilenames()
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $livewire) {
                    // Accessing the state from the Livewire component
                    $idbarang = $livewire->data['idbarang'] ?? 'default_id';
                    $nama = Str::slug($livewire->data['nama'] ?? 'default_name');
                    $extension = $file->getClientOriginalExtension();
                    return "{$idbarang}-{$nama}.{$extension}";
                })
                ->label('Upload Gambar Produk')
                ->unique(static::getModel(), 'gambar'),
            Forms\Components\Textarea::make('deskripsi')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([Tables\Columns\TextColumn::make('idbarang')->label('Kode Produk'), Tables\Columns\TextColumn::make('nama')->label('Nama Produk'), Tables\Columns\TextColumn::make('jenis_barang')->label('Jenis Produk'), Tables\Columns\TextColumn::make('gambar')->label('Lokasi Gambar'), Tables\Columns\TextColumn::make('deskripsi')])
            ->filters([
                Tables\Filters\SelectFilter::make('jenis_barang')
                    ->label('Jenis Barang')
                    ->options(UKM::distinct()->pluck('jenis_barang', 'jenis_barang'))
                    ->default('Usaha Kecil Menengah (UKM)')
                    ->query(function ($query, $data) {
                        return $query->where('jenis_barang', $data);
                    }),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUKMS::route('/'),
            'create' => Pages\CreateUKM::route('/create'),
            'edit' => Pages\EditUKM::route('/{record}/edit'),
        ];
    }
    public static function getLabel(): string
    {
        return 'Usaha Kecil Menengah';
    }
}
