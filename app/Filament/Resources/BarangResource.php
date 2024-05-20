<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Barang;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
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
                Forms\Components\Select::make('jenis_barang')
                    ->options([
                        'elektronika' => 'Elektronika',
                        'mekatronika' => 'Mekatronika',
                        'listrik' => 'Listrik',
                        'perkapalan' => 'Perkapalan',
                        'pesawat_udara' => 'Pesawat Udara',
                        'kereta_api' => 'Kereta Api',
                        'ukm' => 'Usaha Kecil Menengah (UKM)',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\TextInput::make('id_barang')->required(),
                Forms\Components\Textarea::make('deskripsi'),
                FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->directory('snappic')
                    ->preserveFilenames('')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        // Mendapatkan nama asli file yang diupload
                        $Name = $file->getClientOriginalName();

                        // Menggabungkan nama file dengan custom prefix
                        return 'barang-' . $Name;
                    }),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('id_barang'),
                Tables\Columns\TextColumn::make('jenis_barang'),
                Tables\Columns\TextColumn::make('gambar'),
                Tables\Columns\TextColumn::make('deskripsi'),
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
