<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformacionResource\Pages;
use App\Filament\Resources\InformacionResource\RelationManagers;
use App\Models\Informacion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformacionResource extends Resource
{
    protected static ?string $model = Informacion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('notes')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('description') // Cambiado de DatePicker a TextInput
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price') // Cambiado de DatePicker a TextInput
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('cliente_id')
                    ->relationship('cliente', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->label('Phone number')
                            ->tel()
                            ->required(),
                    ])
                    ->required()
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
            'index' => Pages\ListInformacions::route('/'),
            'create' => Pages\CreateInformacion::route('/create'),
            'edit' => Pages\EditInformacion::route('/{record}/edit'),
        ];
    }
}
