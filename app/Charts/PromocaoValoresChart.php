<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Promocao;

class PromocaoValoresChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {

        $qtdPromocoes = Promocao::all()->count();

       // dd($qtdAlunos);

        return $this->chart->barChart()
            ->setTitle('Valores Promoções')
            ->setSubtitle('Media dos valores das promoções')
            ->addData('Preço antigo', [78.9, 45, 30, 40, 60, 80])
            ->addData('Preço atual', [50.9, 40, 25, 10, 35, 56])
            ->setXAxis(['Promoção 1', 'Promoção 2', 'Promoção 3', 'Promoção 4', 'Promoção 5', 'Promoção 6']);
    }
}
