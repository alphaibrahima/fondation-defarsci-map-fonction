<?php

namespace App\Filament\Widgets;

use App\Models\Probleme;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestProblemes extends BaseWidget
{
    protected static ?int $sort = 2; // Ceci le placera en second
    
    // Le widget prendra toute la largeur
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Probleme::query()->latest()->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->sortable(),
            Tables\Columns\TextColumn::make('nom')
                ->searchable(),
            Tables\Columns\TextColumn::make('prenom')
                ->searchable(),
            Tables\Columns\TextColumn::make('lieu')
                ->searchable(),
            Tables\Columns\TextColumn::make('tel'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Date')
                ->dateTime('d/m/Y H:i')
                ->sortable(),
        ];
    }
    
    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('creerProjet')
                ->label('Créer un projet')
                ->icon('heroicon-o-plus')
                ->color('success')
                ->url(fn (Probleme $record) => url('/admin/projets/create?probleme_id=' . $record->id))
                // ->openUrlInNewTab(),
        ];
    }
    
    protected function getTableHeading(): string
    {
        return 'Derniers problèmes déclarés';
    }
}