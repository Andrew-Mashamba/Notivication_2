{{--@if (in_array( "Review and approve requests" , session()->get('permission_items')) || in_array( "Reject Requests" , session()->get('permission_items')) )--}}
<div>
    <div class="flex gap-4">

        <button wire:click="approve({{$id}})" type="button" class=" text-white bg-gray-100 hover:bg-blue-200 hover:text-blue focus:ring-4 focus:outline-none focus:ring-blue-100 font-medium rounded-lg text-sm p-1 text-center inline-flex items-center mr-2 dark:bg-blue-200 dark:hover:bg-blue-200 dark:focus:ring-blue-200">

            <svg xmlns="http://www.w3.org/2000/svg" fill="blue" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

        </button>

        <button wire:click="reject({{$id}})" type="button" class=" text-white bg-gray-100 hover:bg-red-200 hover:text-red focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-sm p-1 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-200 dark:focus:ring-red-200">

            <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

        </button>

    </div>
</div>
{{--@endif--}}