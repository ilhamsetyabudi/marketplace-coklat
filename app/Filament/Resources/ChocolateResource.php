<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChocolateResource\Pages;
use App\Filament\Resources\ChocolateResource\RelationManagers;
use App\Models\Chocolate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ChocolateResource extends Resource
{
    protected static ?string $model = Chocolate::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Select::make('kategori')
                    ->options([
                        'batang' => 'Coklat Batang',
                        'permen' => 'Permen Coklat',
                        'serbuk' => 'Coklat Serbuk',
                    ])
                    ->required(),
                RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                FileUpload::make('gambar')
                    ->required()
                    ->image()
                    ->disk('public'), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->disk('public'),
                TextColumn::make('nama')
                    ->searchable(), // Membuat kolom ini bisa dicari
                TextColumn::make('kategori')
                    ->searchable()
                    ->badge(), // Tampilkan sebagai badge agar lebih menarik
                TextColumn::make('harga')
                    ->money('IDR') // Format sebagai mata uang Rupiah
                    ->sortable(), // Membuat kolom ini bisa diurutkan
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan default, bisa dimunculkan
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListChocolates::route('/'),
            'create' => Pages\CreateChocolate::route('/create'),
            'edit' => Pages\EditChocolate::route('/{record}/edit'),
        ];
    }
}
