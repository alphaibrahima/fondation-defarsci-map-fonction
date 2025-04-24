<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjetResource\Pages;
use App\Filament\Resources\ProjetResource\RelationManagers;
use App\Models\Projet;
use App\Models\Probleme;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Request;

class ProjetResource extends Resource
{
    protected static ?string $model = Projet::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';
    
    protected static ?string $navigationGroup = 'Gestion';
    
    protected static ?string $navigationLabel = 'Projets';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        // Récupérer le probleme_id s'il est passé en paramètre
        $problemeId = request()->query('probleme_id');
        
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nom du projet')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Select::make('probleme_id')
                                    ->label('Problème associé')
                                    ->options(Probleme::all()->pluck('lieu', 'id'))
                                    ->searchable()
                                    ->default($problemeId)
                                    ->required(),
                                Forms\Components\Select::make('status')
                                    ->options([
                                        'Non resolu' => 'Non résolu',
                                        'En etude' => 'En étude',
                                        'En cours de traitement' => 'En cours de traitement',
                                        'Resolu' => 'Résolu',
                                    ])
                                    ->default('Non resolu')
                                    ->required(),
                            ])
                            ->columns(2),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(5),
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->directory('images')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('probleme.lieu')
                    ->label('Problème associé')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'danger' => 'Non resolu',
                        'warning' => 'En etude',
                        'primary' => 'En cours de traitement',
                        'success' => 'Resolu',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProjets::route('/'),
            'create' => Pages\CreateProjet::route('/create'),
            'edit' => Pages\EditProjet::route('/{record}/edit'),
        ];
    }
}