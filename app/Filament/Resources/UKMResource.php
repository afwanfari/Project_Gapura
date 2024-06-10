<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\UKMResource\Pages;
use App\Models\UKM;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class UKMResource extends Resource
{
    protected static ?string $model = UKM::class;
    public static function getNavigationBadge(): ?string
    {
        return UKM::where('jenis_barang', 'Usaha Kecil Menengah (UKM)')->count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('idbarang')->required(),
            Forms\Components\TextInput::make('nama')->required(),
            Forms\Components\Hidden::make('jenis_barang')->default('Usaha Kecil Menengah (UKM)')->required(),

            FileUpload::make('gambar')
                ->image()
                ->disk('public')
                ->directory('snappic')
                ->preserveFilenames('')
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    $Name = $file->getClientOriginalName();
                    return 'barang-' . $Name;
                }),
            Forms\Components\Textarea::make('deskripsi')->required(),
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
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('jenis_barang')
                ->label('Jenis Barang')
                ->options(UKM::distinct()->pluck('jenis_barang', 'jenis_barang'))
                ->default('Usaha Kecil Menengah (UKM)') // Set the default value for the filter to 'UKM'
                ->query(function ($query, $data) {
                    return $query->where('jenis_barang', $data);
                }),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUKMS::route('/'),
            'create' => Pages\CreateUKM::route('/create'),
            'edit' => Pages\EditUKM::route('/{record}/edit'),
        ];
    }
}
