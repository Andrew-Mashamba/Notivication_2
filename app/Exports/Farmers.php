<?php

namespace App\Exports;

use App\Models\ClientsModel;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet;

class Farmers implements FromArray,WithHeadings, WithStyles, ShouldAutoSize, WithEvents,WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public $tableData=[];
    public $header=[];


    public function __construct($header,$value)
    {
        $this->tableData=$value;
        $this->header=$header;
    }


    public function array():array
    {
        $main_array = [];
        foreach ($this->tableData as $farmer) {
            $row = [];
            for ($i=0; $i<count($farmer) ; $i++){
                foreach ($farmer[$i] as $key => $value) {
                    $row[$key] = is_array($value) ? array_values($value)[$i] : $value;
                }
            }

            $main_array[] = $row;
        }

        return $main_array;

    }


    public function title(): string
    {
        return "Farmers";
    }

    public function headings(): array
    {
        return $this->header;
    }

    public function styles(Worksheet|\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true],
                'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['argb' => 'FFFF00']],
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:F1')->applyFromArray([
                    'font' => [
                        'color' => ['argb' => 'FF0000'],
                    ],
                ]);
            },
        ];
    }
}
