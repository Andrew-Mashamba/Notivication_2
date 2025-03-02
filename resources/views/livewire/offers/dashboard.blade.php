<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>



                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                            <!-- Photo File Input -->
                            <input type="file" class="hidden" x-ref="photo" x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);">

                            <div class="text-center">
                                <!-- Current Profile Photo -->
                                <div class="mt-2 block" style="height: 200px">

                                    <livewire:livewire-pie-chart
                                            key="{{ $pieChartModel->reactiveKey() }}"
                                            :pie-chart-model="$pieChartModel"
                                    />
                                </div>

                                <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                                    Offers Distribution
                                </h3>


                            </div>
                        </div>


                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Offers Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Offers</h3>
                                <p class="text-gray-600 text-4xl font-bold">
                                    {{DB::table('offers')->get()->count()}}
                                </p>
                            </div>

                            <!-- Total Value of Pledged Stock -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Approved Offers</h3>
                                <p class="text-gray-600">
                                    {{DB::table('offers')->where('offer_status','APPROVED')->get()->count()}}
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Rejected Offers</h3>
                                <p class="text-gray-600">
                                    {{DB::table('offers')->where('offer_status','REJECTED')->get()->count()}}
                                </p>
                            </div>


                        </div>

                        <!-- Stock Summary -->
                        <div class="bg-gray-100 p-4 rounded-3xl w-full mt-4">
                            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->

                            <div class="relative">
                                <input wire:model.live="search" type="text" class="rounded-3xl peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter name">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#DD0035" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 w-4 h-4 text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full border border-collapse border-gray-300 text-xs rounded-t rounded-b">
                                    <thead>
                                    <tr>
                                        @foreach ($this->data['columns'] as $column)
                                            <th class="border p-2 text-left">{{ is_array($column) ? $column['label'] : $column }}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($this->data['rows'] as $row)
                                        <tr>
                                            @foreach ($row as $cell)
                                                <td class="border p-2">{{ $cell }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </form>
                </div>
            </div>

        </div>

    </div>
</div>






