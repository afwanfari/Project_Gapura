<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\GaleriResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class GaleriResource extends Resource
{
    protected static ?string $model = Berita::class;
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
                ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required(),
                    TextInput::make('waktu')
                    ->default(function () {
                        return Carbon::now()->format('Y-m-d H:i:s');
                    })
                    ->required(),
                FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->directory('berita')
                    ->preserveFilenames('')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        $Name = $file->getClientOriginalName();
                        return 'barang-' . $Name;
                    }),
                    TextInput::make('orang')
                    ->default(function () {
                        $user = Auth::user();
                        return $user ? $user->name : '';
                    })
                    ->required()
                    ->disabled() // Optional: Menonaktifkan input agar tidak bisa diubah
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('waktu'),
                Tables\Columns\TextColumn::make('gambar'),
                Tables\Columns\TextColumn::make('orang'),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
