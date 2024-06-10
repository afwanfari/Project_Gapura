<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Barang;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\BarangResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BarangResource extends Resource
{
    public static function getNavigationBadge(): ?string
{
    return Barang::where('jenis_barang', '!=', 'Usaha Kecil Menengah (UKM)')->count();
}
    protected static ?string $model = Barang::class;
    protected static ?string $recordTitleAttribute = 'barang';
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
                ->options(Barang::distinct()
                    ->where('jenis_barang', '!=', 'Usaha Kecil Menengah (UKM)')
                    ->pluck('jenis_barang', 'jenis_barang'))
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
            Forms\Components\Textarea::make('komponen_terpasang')
                ,
            Forms\Components\Textarea::make('dimensi')
                ,
            Forms\Components\Textarea::make('bahan')
                ,
            Forms\Components\Textarea::make('warna')
                ,
            Forms\Components\Textarea::make('sumber_daya')
                ,
            Forms\Components\Textarea::make('data_teknis')
                ,
            Forms\Components\Textarea::make('aksesoris')
                ,
            Forms\Components\Textarea::make('harga')
                ,
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
                Tables\Filters\Filter::make('non_ukm')
                    ->label('Exclude Usaha Kecil Menengah (UKM)')
                    ->query(fn ($query) => $query->where('jenis_barang', '!=', 'Usaha Kecil Menengah (UKM)'))
                    ->default(true),
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
