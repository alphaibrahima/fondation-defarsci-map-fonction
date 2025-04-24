<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProblemeResource\Pages;
use App\Filament\Resources\ProblemeResource\RelationManagers;
use App\Models\Probleme;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProblemeResource extends Resource
{
    protected static ?string $model = Probleme::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation';
    
    protected static ?string $navigationGroup = 'Gestion';
    
    protected static ?string $navigationLabel = 'Problèmes déclarés';
    
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('nom')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('prenom')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('tel')
                                    ->required()
                                    ->tel()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),

                            ])
                            ->columns(2),
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('lieu')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('lien_avec_lieu')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('profession')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('nbre_population')
                                    ->required()
                                    ->numeric(),
                            ])
                            ->columns(2),
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('latitude')
                                    ->required(),
                                Forms\Components\TextInput::make('longitude')
                                    ->required(),
                            ])
                            ->columns(2),
                        Forms\Components\Textarea::make('details')
                            ->required()
                            ->rows(5),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nom')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('prenom')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('lieu')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date de déclaration')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('creerProjet')
                    ->label('Créer un projet')
                    ->icon('heroicon-o-plus')
                    ->color('success')
                    ->url(fn (Probleme $record) => url('/admin/projets/create?probleme_id=' . $record->id))
                    // ->openUrlInNewTab(),
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
            'index' => Pages\ListProblemes::route('/'),
            'create' => Pages\CreateProbleme::route('/create'),
            'view' => Pages\ViewProbleme::route('/{record}'),
            'edit' => Pages\EditProbleme::route('/{record}/edit'),
        ];
    }    
}