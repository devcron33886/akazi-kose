<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertResource\Pages;
use App\Models\Advert;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;

class AdvertResource extends Resource
{
    protected static ?string $model = Advert::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\Select::make('institution_id')
                    ->relationship('institution', 'name')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                TiptapEditor::make('body')
                    ->required()
                    ->profile('default|simple|minimal|none|custom')
                    ->tools([]) // individual tools to use in the editor, overwrites profile
                    ->disk('string') // optional, defaults to config setting
                    ->directory('string or Closure returning a string') // optional, defaults to config setting
                    ->acceptedFileTypes(['array of file types']) // optional, defaults to config setting
                    ->maxFileSize('integer in KB') // optional, defaults to config setting
                    ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
                    ->maxContentWidth('5xl')
                    ->required(),
                Forms\Components\DatePicker::make('deadline')
                    ->required(),
                Forms\Components\Toggle::make('visible')
                    ->required(),
                Forms\Components\TextInput::make('location')
                    ->required(),
                Forms\Components\TextInput::make('sector')
                    ->required(),
                Forms\Components\TextInput::make('eductaion_level'),
                Forms\Components\TextInput::make('desired_experience'),
                Forms\Components\TextInput::make('contract_type'),
                Forms\Components\TextInput::make('number_of_positions')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('files')
                    ->multiple(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('institution.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deadline')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('visible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sector')
                    ->searchable(),
                Tables\Columns\TextColumn::make('eductaion_level')
                    ->searchable(),
                Tables\Columns\TextColumn::make('desired_experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contract_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_of_positions')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('files')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListAdverts::route('/'),
            'create' => Pages\CreateAdvert::route('/create'),
            'edit' => Pages\EditAdvert::route('/{record}/edit'),
        ];
    }
}
