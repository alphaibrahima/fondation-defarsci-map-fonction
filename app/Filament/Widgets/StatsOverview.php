<?php

namespace App\Filament\Widgets;

use App\Models\Probleme;
use App\Models\Projet;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1; // Ceci le placera en premier
    
    protected function getCards(): array
    {
        return [
            Card::make('Total des problèmes', Probleme::count())
                ->description('Problèmes déclarés')
                ->descriptionIcon('heroicon-s-exclamation')
                ->color('danger'),
                
            Card::make('Total des projets', Projet::count())
                ->description('Projets créés')
                ->descriptionIcon('heroicon-s-clipboard-list')
                ->color('primary'),
                
            Card::make('Projets résolus', Projet::where('status', 'Resolu')->count())
                ->description('Projets terminés')
                ->descriptionIcon('heroicon-s-check-circle')
                ->color('success'),
                
            Card::make('Projets en cours', Projet::whereIn('status', ['En etude', 'En cours de traitement'])->count())
                ->description('En traitement')
                ->descriptionIcon('heroicon-s-clock')
                ->color('warning'),
        ];
    }
}