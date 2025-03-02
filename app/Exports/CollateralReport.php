<?php

namespace App\Exports;

use App\Exports\Company;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;



class CollateralReport  implements FromArray,WithHeadings, WithStyles, ShouldAutoSize, WithEvents,WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public $collateral_id=[];


    function  __construct($collateral_id=null)
    {
        $this->collateral_id=$collateral_id;
    }

    public function array(): array
    {
        if($this->collateral_id==null){
            $collateral_manager_id=DB::table('stocks')->where('status','ACTIVE')->distinct('collateral_manager_id')->pluck('collateral_manager_id')->toArray();

            $cms=DB::table('collateral_managers')->whereIn('id',$collateral_manager_id)->get();
        }else{
            $cms=DB::table('collateral_managers')->whereIn('id',$this->collateral_id)->get();

        }


        $array[]=null;
        $mainArray=[];
        foreach($cms as $managers){
            $array[]=['name'=>$managers->FirstName .' '. $managers->LastName,

            ];
            foreach (DB::table('farmers')->where('collateral_manager_id',$managers->id)->get() as $farmer){

                $array[]=[
                    'third name'=>$farmer->first_name.' '.$farmer->last_name,
                ];
                foreach (DB::table('commodities')->get() as $commodity){
                    $array[]=[$commodity->name=> DB::table('stocks')->where('client_id',$farmer->id)->where('commodity_id',$commodity->id)->where('collateral_manager_id',$managers->id)->where('status',"ACTIVE")->sum('kilos')];
                                                                       }

            }

            $mainArray=$array;

            $array=[];



            $result[]=$this->flattenArray($mainArray);

        }


        dd($result);

       // dd($mainArray);

       // $result;


        $array=[];

//        foreach ($cms as $manager) {
//            $i = 1;
//            $data = [];
//
//            foreach (DB::table('farmers')->where('collateral_manager_id', $manager->id)->get() as $farmer) {
//                if ($i == 1) {
//                    $data[0] = [
//                        'Manager Name' => $manager->FirstName . ' ' . $manager->LastName,
//                        'Location' => 'Location',
//                        'Farmer Name' => 'FARMER NAME',
//                        'COTTON MAIZE' => 'COTTON MAIZE',
//                        'ASHEW NUTS' => 'ASHEW NUTS',
//                        'COCOA' => 'COCOA',
//                        'COFFEE' => 'COFFEE',
//                        'SESAME' => 'SESAME',
//                        'RED BEANS' => 'RED BEANS',
//                        'SUGAR BEANS' => 'SUGAR BEANS',
//                        'SORGHUM' => 'SORGHUM',
//                        'PADDY' => 'PADDY',
//                        'DIESEL' => 'DIESEL',
//                        'PETROL' => 'PETROL',
//                        'MOGAS' => 'GASOLINE',
//                        'Total' => 'Total',
//                    ];
//                }
//
//
//
//                // Calculate and add commodity quantities to the row
//                foreach (DB::table('commodities')->get() as $commodity) {
//
//
//                }
//
//               // $data[1] = $row;
//                $i++;
//            }
//        }






        return  $result;
    }


 public   function flattenArray($array) {
        $result = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, $this->flattenArray($value));
            } else {
                $result[$key] = $value;
            }
        }
        return $result;
    }



    public function title(): string
    {
        return "Collateral Report";
    }

    public function headings(): array
    {
        $array[]=[
            "0",
        'COLLATERAL MANAGER',
        'FARMER NAME',
        'COTTON MAIZE',
        'ASHEW NUTS',
        'COCOA',
        'COFFEE',
        'SESAME',
        'RED BEANS',
        'SUGAR BEANS',
        'SORGHUM',
        'PADDY',
        'DIESEL',
        'PETROL',
        'GASOLINE',

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
               // $event->sheet->mergeCells('C1:P1'); // Merge cells for Header 2 - Multiple Columns

            },
        ];
    }

}
