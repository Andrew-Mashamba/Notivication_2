<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}


    <div class="relative overflow-x-auto ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Kilos
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Value (TZS)
                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($values as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium yellow whitespace-nowrap dark:text-white">
                       <?php
                            $wards=DB::table('Wards')->where('id',$value['ward_location'])->first();
                            if($wards){
                                $ward_name=$wards->ward_name;
                                $districts=DB::table('districts')->where('id',$wards->district_id)->first();
                                $district_name=$districts->district_name;
                                $region_name=DB::table('regions')->where('id',$districts->region_id)->value('region_name');
                                echo $region_name.'('.$district_name.' ,'.$ward_name.')';


                            }
                           ?>

                    </th>
                    <td class="px-6 py-4">
                        {{DB::table('stocks')->where('status','ACTIVE')->where('ward_location',$value['ward_location'])->where('commodity_id',$value['commodity_id'])->sum('kilos') }}
                    </td>
                    <td class="px-6 py-4">
                        {{number_format(  DB::table('stocks')->where('status','ACTIVE')->where('ward_location',$value['ward_location'])->where('commodity_id',$value['commodity_id'])->sum(DB::raw('kilos * price_per_kilo')),2) }}
                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
    </div>


</div>
