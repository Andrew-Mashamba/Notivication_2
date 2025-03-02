<div>
    <div class="w-full p-1 mt-8 bg-gray-200 rounded-3xl flex flex-wrap gap-1" id="steps-container">

            @foreach(\Illuminate\Support\Facades\DB::table('steps')->where('process_id',13)->orderBy('step_number')->get() as $step)

            <div id="card{{ $step->id }}" class="w-1/6 p-2 bg-white border border-gray-200 rounded-3xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" data-step-id="{{ $step->id }}">
                <div class="w-full flex justify-between mb-2">
                    <div class="step-number font-semibold text-xs inline-flex items-center shrink-0 justify-center w-6 h-6 rounded-full text-white bg-blue-200 focus:outline-none cursor-pointer">
                        {{ $step->step_number }}
                    </div>
                    <div class="flex justify-between gap-2">
                        <svg wire:click="edit({{$step->id}})" class="w-6 h-6" width="24" height="24" data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                        </svg>
                        <svg class="w-6 h-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-xs font-semibold text-gray-700 dark:text-gray-400">
                    {{ $step->step_name }}
                </p>
                <hr class="mt-1 mb-1 border-b-1 border-gray-100">
                <p class="text-xs font-normal text-gray-700 dark:text-gray-400">
                    {{ $roles->where('id', $step->role_id)->first()->department_name }}
                </p>
            </div>
        @endforeach

    </div>





    @if($this->isEdit)


        <div class="mb-4 mt-4">
            <label for="process_role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Role</label>
            <select wire:model="process_role" id="process_role" class="border border-gray-300 shadow-sm px-4 py-2 font-medium placeholder-blueGray-300 text-blueGray-600 bg-white rounded-3xl text-sm shadow w-full ease-linear transition-all duration-150">
                <option value="">Select Role</option>
                @foreach(\Illuminate\Support\Facades\DB::table('roles')->get() as $role)
                    <option value="{{ $role->id }}" style="font-size: 16px;">{{ $role->department_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="process_stage_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stage Name</label>
            <input wire:model="process_stage_name" type="text" id="process_stage_name" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 text-xs focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
        </div>


        <div class="mb-4">
            <form wire:submit.prevent="savePermissions">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($permissions as $permission)
                        @php
                            $step_permissions = \Illuminate\Support\Facades\DB::table('step_permissions')
                                ->where('permission_id', $permission->id)
                                ->where('process_id', $this->processId)
                                ->get();
                            $permission_name = $permission->permission;
                        @endphp

                        @if($step_permissions->isNotEmpty())
                            @foreach($step_permissions as $step_permission)
                                @if($step_permission->step_id == $this->step_id)
                                    <label for="hs-checkbox-{{ $step_permission->permission_id }}" class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                        <input type="checkbox"
                                               value="{{ $step_permission->permission_id }}"
                                               wire:model="selectedPermissions.{{ $step_permission->permission_id }}"
                                               class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                               id="hs-checkbox-{{ $step_permission->permission_id }}">
                                        <span class="text-xs text-gray-500 ms-3 dark:text-neutral-400">{{ $permission_name }}</span>
                                    </label>
                                @else
                                    <label for="hs-checkbox-{{ $step_permission->permission_id }}" class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                        <input type="checkbox"
                                               value="{{ $step_permission->permission_id }}"
                                               wire:model="selectedPermissions.{{ $step_permission->permission_id }}"
                                               class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                               id="hs-checkbox-{{ $step_permission->permission_id }}" disabled>
                                        <span class="text-xs text-gray-500 ms-3 dark:text-neutral-400">{{ $permission_name }}</span>
                                    </label>
                                @endif
                            @endforeach
                        @else
                            <label for="hs-checkbox-{{ $permission->id }}" class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input type="checkbox"
                                       value="{{ $permission->id }}"
                                       wire:model="selectedPermissions.{{ $permission->id }}"
                                       class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                       id="hs-checkbox-{{ $permission->id }}">
                                <span class="text-xs text-gray-500 ms-3 dark:text-neutral-400">{{ $permission_name }}</span>
                            </label>
                        @endif
                    @endforeach
                </div>
            </form>
        </div>




    @endif


    <script>
        //document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('steps-container');

        const sortable = Sortable.create(container, {
            animation: 150,
            onEnd: function (event) {

                const orderedIds = Array.from(container.children).map((card, index) => {
                    // Update the step number in the DOM
                    card.querySelector('.step-number').textContent = index + 1;
                    return {
                        id: card.getAttribute('data-step-id'),
                        step_number: index + 1
                    };
                });

                //const orderedIds = Array.from(container.children).map(card => card.getAttribute('data-step-id'));

                // Send the new order to the server
                fetch('{{ route('update-steps-order') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ orderedIds })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Order updated successfully');
                            //Livewire.emit('refreshComponent');
                            window.Livewire.emit('refreshComponent', 'data');
                        } else {
                            console.error('Failed to update order');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
        //});
    </script>

</div>
