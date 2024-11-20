<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use App\Models\Blog;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class BlogWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Postingan', Blog::all()->count()),
        ];
    }
}
