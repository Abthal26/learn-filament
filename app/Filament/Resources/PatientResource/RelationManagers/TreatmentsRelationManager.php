<?php

namespace App\Filament\Resources\PatientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class TreatmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'treatments';

    public static function getRelations(): array
    {
       return [
           RelationManagers\TreatmentsRelationManager::class,
       ];
    }

    public function form(Form $form): Form
    {
        return $form
        ->schema([
            //
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                //
             
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}

