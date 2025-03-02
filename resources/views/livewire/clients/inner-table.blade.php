<div>
    <!-- resources/views/livewire/clients/inner-table.blade.php -->
    <div class="overflow-x-auto mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">Commodity ID</th>
                <th scope="col" class="px-6 py-3">Kilos</th>
                <th scope="col" class="px-6 py-3">Value</th>
                <th scope="col" class="px-6 py-3">Price Per Kilo</th>
                <th scope="col" class="px-6 py-3">Warehouse</th>
                <th scope="col" class="px-6 py-3">Unit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($values as $stock)
                <tr class="border-t dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="px-6 py-4">{{ $stock->commodity_id }}</td>

                    <td class="px-6 py-4">{{ $stock->kilos }}</td>
                    <td class="px-6 py-4">{{ $stock->value }}</td>
                    <td class="px-6 py-4">{{ $stock->price_per_kilo }}</td>
                    <td class="px-6 py-4">{{ $stock->warehouse }}</td>
                    <td class="px-6 py-4">{{ $stock->unit }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
