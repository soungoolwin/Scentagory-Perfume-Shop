<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DecantResource\Pages;
use App\Filament\Resources\DecantResource\RelationManagers;
use App\Models\Decant;
use App\Models\Size;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DecantResource extends Resource
{
    protected static ?string $model = Decant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('scent_accords')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('top_note')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('base_note')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('gender'),
                Forms\Components\TextInput::make('brand_category')
                    ->maxLength(255),
                Forms\Components\TextInput::make('country')
                    ->maxLength(255),
                Forms\Components\Select::make('brand_id')
                    ->label('Brand')
                    ->relationship('brand', 'name')
                    ->required(),
                Forms\Components\Textarea::make('img_url')
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('brand_category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand_id')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListDecants::route('/'),
            'create' => Pages\CreateDecant::route('/create'),
            'edit' => Pages\EditDecant::route('/{record}/edit'),
        ];
    }
}
