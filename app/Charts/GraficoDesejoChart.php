<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficodesejoChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Gráfico da lista de desejos')
            ->setSubtitle('Quantidade de itens de cada lista criada')
            ->addData([9, 5, 10])
            ->setLabels(['Lista de calçados', 'Lista de viagens', 'Lista de compras']);
    }
}
       