<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>

                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Branches Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Branches</h3>
                                <p class="text-gray-600 text-4xl font-bold">
                                    {{DB::table('branches')->get()->count()}}
                                </p>
                            </div>

                            <!-- Total Value of Pledged Stock -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Active Branches</h3>
                                <p class="text-gray-600">
                                    {{DB::table('branches')->where('Status','ACTIVE')->get()->count()}}
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Suspended Branches</h3>
                                <p class="text-gray-600">
                                    {{DB::table('branches')->where('Status','PENDING')->get()->count()}}
                                </p>
                            </div>


                        </div>





                    </form>
                </div>
            </div>

        </div>

    </div>
</div>






