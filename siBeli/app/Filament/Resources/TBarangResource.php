<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Filament\Resources\BarangResource\RelationManagers;
use App\Models\tBarang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BarangResource extends Resource
{
    protected static ?string $model = tBarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('kode_barang')
                ->label('Kode Barang')
                ->maxLength(5)  
                ->required(),  
    
            Forms\Components\TextInput::make('nama_barang')
                ->label('Nama Barang')
                ->maxLength(20)  
                ->required(),
    
            Forms\Components\TextInput::make('satuan')
                ->label('Satuan')
                ->numeric() 
                ->maxLength(6) 
                ->required(),
    
            Forms\Components\TextInput::make('harga_jual')
                ->label('Harga Jual')
                ->numeric()  
                ->maxLength(8)
                ->required(),
    
            Forms\Components\TextInput::make('harga_beli')
                ->label('Harga Beli')
                ->numeric()  
                ->maxLength(8) 
                ->required(),
    
            Forms\Components\TextInput::make('stok')
                ->label('Stok')
                ->numeric()
                ->maxLength(5) 
                ->required(),
    
            Forms\Components\TextInput::make('status')
                ->label('Status')
                ->maxLength(8) 
                ->required(), 
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListTBarangs::route('/'),
            'create' => Pages\CreateTBarang::route('/create'),
            'edit' => Pages\EditTBarang::route('/{record}/edit'),
        ];
    }
}
