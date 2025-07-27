<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobSeekerResource\Pages;
use App\Filament\Resources\JobSeekerResource\RelationManagers;
use App\Models\JobSeeker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class JobSeekerResource extends Resource
{
    protected static ?string $model = JobSeeker::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('phone')->tel(),
                TextInput::make('email')->email(),
                TextInput::make('password')->password(),
                TextInput::make('city'),
                TextInput::make('area'),
                TextInput::make('pincode'),
                TextInput::make('street')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('phone'),
                TextColumn::make('email'),
                TextColumn::make('city')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListJobSeekers::route('/'),
            'create' => Pages\CreateJobSeeker::route('/create'),
            'edit' => Pages\EditJobSeeker::route('/{record}/edit'),
        ];
    }
}
