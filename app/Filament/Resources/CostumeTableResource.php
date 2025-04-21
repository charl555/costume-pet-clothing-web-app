<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CostumeTableResource\Pages;
use App\Filament\Resources\CostumeTableResource\RelationManagers;
use App\Models\costumeTable;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CostumeTableResource extends Resource
{
    protected static ?string $model = costumeTable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Costumes';

    protected static ?string $modelLabel = 'Costumes';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('')
                ->schema([
                    TextInput::make('costumeName')->label('Costume Name')->required(),
                    Select::make('ageCategory')
                    ->options(['1-6'=> '1-6','7-12'=> '7-12','13-18'=> '13-18','19-24'=> '19-24'])
                    ->label('Age Category')
                    ->required(),
                    Select::make('costumeCategory')
                    ->label('Costume Category')
                    ->options(['Book Festival', 'United Nations'])
                    ->required(),
                    Textarea::make('description')->label('Description')->required(),
                    TextInput::make('measurements')->label('Measurements')->required(),
                ]),
    
            Section::make('')
                ->schema([
                    FileUpload::make('filePath')
                    ->label('3D Model File (.obj)')
                    ->disk('public')
                    ->directory('costume-models')
                    ->preserveFilenames()
                    ->maxSize(122880)
                    ->required(),
                ]),
    
            Section::make('')
                ->schema([
                    FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->directory('costume-thumbnails')
                    ->required(),

                    FileUpload::make('imagePath')
                    ->label('Gallery Images')
                    ->disk('public')
                    ->directory( 'costume-gallery-images')
                    ->multiple()
                    ->maxParallelUploads(4),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('costumeName')->label('Costume Name'),
                TextColumn::make('ageCategory')->label('Age Category'),
                TextColumn::make('costumeCategory')->label('Costume Category'),
                TextColumn::make('description')->label('Description'),
                TextColumn::make('measurements')->label('Measurements'),
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
            'index' => Pages\ListCostumeTables::route('/'),
            'create' => Pages\CreateCostumeTable::route('/create'),
            'edit' => Pages\EditCostumeTable::route('/{record}/edit'),
        ];
    }
}
