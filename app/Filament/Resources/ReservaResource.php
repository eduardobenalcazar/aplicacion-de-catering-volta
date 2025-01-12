<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservaResource\Pages;
use App\Filament\Resources\ReservaResource\RelationManagers;
use App\Models\Reserva;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservaResource extends Resource
{
    protected static ?string $model = Reserva::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\DatePicker::make('fecha_evento')
                    ->label('Fecha del Evento')
                    ->required(),

                Forms\Components\TimePicker::make('hora_inicio')
                    ->label('Hora de Inicio')
                    ->required(),

                Forms\Components\TimePicker::make('hora_fin')
                    ->label('Hora de Fin')
                    ->required(),

                Forms\Components\Select::make('tipo_evento')
                    ->label('Tipo de Evento')
                    ->options([
                        'boda' => 'Boda',
                        'corporativo' => 'Corporativo',
                        'cumpleanos' => 'Cumpleaños',
                        'otro' => 'Otro',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('numero_invitados')
                    ->label('Número Aproximado de Invitados')
                    ->numeric()
                    ->required(),

                Forms\Components\Select::make('cliente_id')
                    ->label('Cliente')
                    ->relationship('cliente', 'name') // Relación con el modelo Cliente
                    ->required(),
                Forms\Components\Radio::make('medio_pago')
                    ->label('Medios de Pago')
                    ->options([
                        'efectivo' => 'Efectivo',
                        'transferencia' => 'Transferencia',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('detalles') // Nuevo campo
                    ->label('Detalles de la Reserva')
                    ->placeholder('Ingresa información adicional sobre la reserva...')
                    ->rows(4)
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cliente.name')
                    ->label('Cliente')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_evento')->label('Fecha del Evento')->sortable(),
                Tables\Columns\TextColumn::make('hora_inicio')->label('Hora de Inicio')->sortable(),
                Tables\Columns\TextColumn::make('hora_fin')->label('Hora de Fin')->sortable(),
                Tables\Columns\TextColumn::make('tipo_evento')->label('Tipo de Evento'),
                Tables\Columns\TextColumn::make('medio_pago')->label('Medio de Pago'),
                Tables\Columns\TextColumn::make('numero_invitados')->label('N° de Invitados'),
                Tables\Columns\TextColumn::make('detalles')->label('Detalles')->limit(50), // Nuevo campo

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
            'index' => Pages\ListReservas::route('/'),
            'create' => Pages\CreateReserva::route('/create'),
            'edit' => Pages\EditReserva::route('/{record}/edit'),
        ];
    }
}
