<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PustakawanResource\Pages;
use App\Filament\Resources\PustakawanResource\RelationManagers;
use App\Models\Pustakawan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PustakawanResource extends Resource
{
    protected static ?string $model = Pustakawan::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Pustakawan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('pustaka')
                    ->helperText('Pastikan gambar memiliki ukuran panjang dan lebar yang sama. Contoh: 360 x 360'),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('deskripsi')
                    ->required(),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPustakawans::route('/'),
            'create' => Pages\CreatePustakawan::route('/create'),
            'edit' => Pages\EditPustakawan::route('/{record}/edit'),
        ];
    }
}
