<?php

namespace App\Exports;

use App\Models\ClientsModel;
use App\Models\general_ledger;
use App\Models\LoansModel;
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

class Company implements FromArray,WithHeadings, WithStyles, ShouldAutoSize, WithEvents,WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $value;



    public function __construct($value=null){
//        $this->value=$value;
    }


    public function array(): array
    {
        return [
            ['Name', 'Email', 'FARMERS'],
            ['John Doe', 'john@example.com',
                'Phone'
               ],
             ['Name', 'Email', 'FARMERS'],
            ['John Doe', 'john@example.com',
                'Phone'
               ],
             ['Name', 'Email', 'FARMERS'],
            ['John Doe', 'john@example.com',
                'Phone'
               ],

        ];
    }


    public function map($row):array
    {
        if($this->collateral_id==null){
            $this->collateral_id=DB::table('collateral_managers')->pluck('id')->toArray();
        }

//
//        foreach ($this->collateral_id as $id){
//
//        $array=[
//             'Collateral Name'=>
//             'Location'=>
//            'Farmers'=>[
//
//            ];
//
//         ];
//    }


        $array2= [
            $row['COLLATERAL MANAGER'],
            $row['LOCATION'],
            $row['FARMERS'],
        ];



        return $array2;
    }


    public function title(): string
    {
        return "Collateral Report";
    }

    public function headings(): array
    {
        $array=[
            'COLLATERAL MANAGER',
            'LOCATION',
            'FARMERS'

        ];
        return $array;
    }


    public function styles(Worksheet|\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true],
                'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['argb' => 'ADD8E6']],
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
