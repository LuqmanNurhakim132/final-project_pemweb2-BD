<?php

namespace App\Filament\Widgets;

use App\Models\TransaksiKas;
use App\Models\ReimburseRequest;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KasStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $pemasukan = \App\Models\TransaksiKas::whereHas(
            'kategori',
            fn ($query) => $query->where('tipe', 'Masuk')
        )->sum('nominal');

        $pengeluaran = \App\Models\TransaksiKas::whereHas(
            'kategori',
            fn ($query) => $query->where('tipe', 'Keluar')
        )->sum('nominal');

        $saldo = $pemasukan - $pengeluaran;

        $pending = \App\Models\ReimburseRequest::where(
            'status',
            'Pending'
        )->count();

        return [
            Stat::make(
                'Total Pemasukan',
                'Rp ' . number_format($pemasukan, 0, ',', '.')
            ),

            Stat::make(
                'Total Pengeluaran',
                'Rp ' . number_format($pengeluaran, 0, ',', '.')
            ),

            Stat::make(
                'Saldo Kas',
                'Rp ' . number_format($saldo, 0, ',', '.')
            ),

            Stat::make(
                'Reimburse Pending',
                $pending
            ),
        ];
    }
}