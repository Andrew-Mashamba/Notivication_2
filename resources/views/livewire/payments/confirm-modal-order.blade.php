<div>
    <button type="button" wire:click="$emit('closeDeleteOrderModal')" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:yellow rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
        <svg class="w-5 h-5" fill="#DD0035" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="py-6 px-6 lg:px-8">
        <h3 class="mb-4 text-xl font-medium yellow dark:text-white">Delete Order</h3>
        <div class="my-4">

            <div class="p-3">
                <div class="mt-2 text-sm text-gray-500">
                    Are you sure, you want to delete this order?
                </div>

            </div>

        </div>
    </div>

    <div class="flex" align="right">
        <div class="mt-5"  align="right">

            <button wire:click="$emit('deleteOrderConfirmed')" class="mr-4 inline-flex items-center px-4 py-2 border border-solid rounded-md font-semibold text-xs text-gray lowercase tracking-widest hover:bg-gray-200 active:bg-gray-300 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" >
                YES
            </button>

        </div>
        <div class="mt-5"  align="right">

            <button wire:click="$emit('closeDeleteOrderModal')" class="mr-4 inline-flex items-center px-4 py-2 border border-solid rounded-md font-semibold text-xs text-gray lowercase tracking-widest hover:bg-gray-200 active:bg-gray-300 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" >
                CANCEL
            </button>

        </div>

    </div>

</div>
