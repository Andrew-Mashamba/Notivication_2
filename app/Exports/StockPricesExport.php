<?php

namespace App\Exports;

use App\Models\StockPrice;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class StockPricesExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $stockPrices;

    public function __construct($stockPrices)
    {
        $this->stockPrices = $stockPrices;
    }

    public function collection()
    {
        $formattedData = [];

        foreach ($this->stockPrices as $price) {
            $formattedData[] = [
                'Month' => \Carbon\Carbon::parse($price->recorded_at)->format('Y M d'),
                'Price Per Kilo' => floatval($price->price),
            ];
        }

        return collect($formattedData);
    }

    public function headings(): array
    {
        return [
            'Date',
            'Price Per Kilo',
        ];
    }
}
