<?php

namespace App\Filament\Resources;

use App\Enums\AdvertStatus;
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

    protected static ?string $navigationIcon = 'heroicon-c-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema(static::getAdvertForm())
                            ->columns(2),
                        Forms\Components\Section::make('Advert Details')
                            ->schema(static::getAdvertDetailsForm())
                            ->columns(2),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('deadline')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('visible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),

                Tables\Columns\TextColumn::make('number_of_positions')
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
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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

    /** @return Forms\Components\Component[] */
    public static function getAdvertForm(): array
    {
        return [
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),
            Forms\Components\Select::make('institution_id')
                ->native(false)
                ->searchable()
                ->relationship('institution', 'name')

                ->required(),
            Forms\Components\TextInput::make('title')

                ->required(),
            Forms\Components\DatePicker::make('deadline')
                ->required(),
            TiptapEditor::make('body')
                ->disk('string') // optional, defaults to config setting
                ->directory('string or Closure returning a string') // optional, defaults to config setting
                ->acceptedFileTypes(['array of file types']) // optional, defaults to config setting
                ->maxFileSize(4048) // optional, defaults to config setting
                ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
                ->columnSpanFull(),

        ];
    }

    public static function getAdvertDetailsForm(): array
    {
        return [
            Forms\Components\ToggleButtons::make('status')
                ->inline()
                ->options(AdvertStatus::class)
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
        ];
    }
}
