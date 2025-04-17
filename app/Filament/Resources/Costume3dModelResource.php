<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Costume3dModelResource\Pages;
use App\Filament\Resources\Costume3dModelResource\RelationManagers;
use App\Models\costume3dModel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Costume3dModelResource extends Resource
{
    protected static ?string $model = costume3dModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Costumes';

    protected static ?string $modelLabel = 'Costume 3D Model';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Section::make() 
            ->schema([
                TextInput::make('costumeName'),
                Textarea::make('description'),
                Select::make('category')->options([
                    'Fantasy'=> 'Fantasy',
                    'UnitedNations'=> 'United Nations',
                    'Cultural'=> 'Cultural',
                ]),
                FileUpload::make('file_path')
                ->label('3D Model File (.obj)')
                ->disk('public')
                ->directory('costume-models')
                ->maxSize(122880)
                ->required(),
                FileUpload::make('thumbnail'),
            ]),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('costumeName')->label('Costume Name'),
                TextColumn::make('description')->label('Description'),
                TextColumn::make('category')->label('Category'),
                ImageColumn::make('thumbnail')->label('Thumbnail'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infoList(Infolist $infolist): Infolist
    {
        return $infolist
        ->schema([
                TextEntry::make('costumeName')->label('Costume Name'),
                TextEntry::make('descrption')->label('Description'),
                TextEntry::make('category')->label('Category'),
                ImageEntry::make('thumbnail'),
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
            'index' => Pages\ListCostume3dModels::route('/'),
            'create' => Pages\CreateCostume3dModel::route('/create'),
            'edit' => Pages\EditCostume3dModel::route('/{record}/edit'),
        ];
    }
}
