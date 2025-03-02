<div>


  <div class="w-full flex gap-2">


      <div class="w-1/3">

          <div class="flex items-center justify-center p-2 h-full ">
                  <div aria-label="card" class="p-6 rounded-3xl bg-white w-full h-full  ">

                      <div aria-label="header" class="flex items-center space-x-2">

                          <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25"></path>
                          </svg>


                          <div wire:click="loadView('b')" class="space-y-0.5 flex-1 cursor-pointer">
                              <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                  Transmission Costs
                              </h3>
                              <p class="text-sm font-normal text-gray-400 leading-none">
                                  Costs of SMS transmission
                              </p>
                          </div>




                      </div>


                      <div aria-label="content" class="mt-9 grid gap-2.5">

                          <p class="mb-2 text-3xl font-extrabold">
                              {{number_format(DB::table('stocks')->where('status','PLEDGED')->sum('kilos'),2)}}
                          </p>

                      </div>

                  </div>


              </div>

      </div>

      <div class="w-1/3">
          <div class="flex items-center justify-center p-2 h-full ">
              <div aria-label="card" class="p-6 rounded-3xl bg-white w-full h-full ">
                  <div aria-label="header" class="flex items-center space-x-2">
                      <svg data-slot="icon"class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12"></path>
                      </svg>


                      <div  class="space-y-0.5 flex-1 cursor-pointer">
                          <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                              Number Of Processed SMS
                          </h3>
                          <p class="text-sm font-normal text-gray-400 leading-none">
                              Total lifetime number of processed SMS
                          </p>
                      </div>




                  </div>



                  <div aria-label="content" class="mt-9 grid gap-2.5">

                      <p class="mb-2 text-3xl font-extrabold">
                          {{number_format(DB::table('stocks')->where('status','PLEDGED')->sum('kilos'),2)}}
                      </p>

                  </div>


              </div>
          </div>
      </div>



      <div class="w-1/3">
          <div class="flex items-center justify-center p-2 h-full ">
              <div aria-label="card" class="p-6 rounded-3xl bg-white w-full h-full ">
                  <div aria-label="header" class="flex items-center space-x-2">
                      <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25"></path>
                      </svg>
                      <div  class="space-y-0.5 flex-1 cursor-pointer">
                          <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                              Number Of Processed Emails
                          </h3>
                          <p class="text-sm font-normal text-gray-400 leading-none">
                              Total lifetime number of processed Emails
                          </p>
                      </div>
                  </div>

                  <div aria-label="content" class="mt-9 grid gap-2.5">

                      <p class="mb-2 text-3xl font-extrabold">
                          {{number_format(DB::table('stocks')->where('status','PLEDGED')->sum('kilos'),2)}}
                      </p>

                  </div>




                  </div>
              </div>
      </div>


      </div>


</div>





    <script>
        // JavaScript to toggle the dropdown
        document.addEventListener('livewire:load', function () {
            Livewire.on('toggleDropdown', () => {
                const dropdownMenu = document.querySelector('.absolute.right-0.mt-2.rounded-md.shadow-lg.bg-white.ring-1.ring-black.ring-opacity-5.p-1.space-y-1');
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>

    <script>
        window.onload = function() {
            const clearAfter = "{{ session('ClearSuccessAfter') }}";
            if (clearAfter) {
                setTimeout(function() {
                    @if(session()->has('RegisterStockSuccess'))
                    @php session()->forget('RegisterStockSuccess') @endphp
                    @endif
                }, 5000); // Clear after 5 seconds (adjust duration as needed)
            }
        }
    </script>


</div>
