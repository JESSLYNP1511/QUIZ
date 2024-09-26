<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplierResource\Pages;
use App\Filament\Resources\SupplierResource\RelationManagers;
use App\Models\tSupplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SupplierResource extends Resource
{
    protected static ?string $model = tSupplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form([
        Forms\Components\TextInput::make('kode_supplier')
        ->label('Kode Supplier')
        ->maxLength(5)
        ->required(), 

        Forms\Components\TextInput::make('nama_supplier')
        ->label('Nama Supplier')
        ->maxLength(20)  
        ->required(),

        Forms\Components\TextInput::make('alamat')
        ->label('Alamat')
        ->maxLength(30)  
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
            'index' => Pages\ListTSuppliers::route('/'),
            'create' => Pages\CreateTSupplier::route('/create'),
            'edit' => Pages\EditTSupplier::route('/{record}/edit'),
        ];
    }
}
