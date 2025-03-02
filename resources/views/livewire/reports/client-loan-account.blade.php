<div>

  <div class=" ">
      <div class=" flex w-full justify-end item-end" >
          <div  class="flex items-center">
              <div class="relative">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#DD0035" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                      </svg>
                  </div>
                  <input name="start" type="date" wire:model="start_date" class="bg-gray-50 border border-gray-300 yellow text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
              </div>
              <span class="mx-4 text-gray-500">to</span>

              <div class="relative">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#DD0035" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                      </svg>
                  </div>
                  <input name="end" type="date" wire:model="end_date" class="bg-gray-50 border border-gray-300 yellow text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
              </div>
          </div>

      </div>


      <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
          <div class="px-4 mx-auto max-w-screen-2xl lg:px-1">
              <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                  <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                      <div class="flex items-center flex-1 w-full space-x-4">

                          <form class="flex items-center">
                              <label for="simple-search" class="sr-only">Search</label>
                              <div class="relative w-full">
                                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="#DD0035" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                      </svg>
                                  </div>
                                  <input wire:model="search" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 yellow text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                              </div>
                          </form>


                      </div>
                      <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                          <button type="button" wire:click="refresh" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium yellow bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="#DD0035">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                              </svg>
                              Update stocks
                          </button>
                          <button wire:click="exportExcel" type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium yellow bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="#DD0035" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                              </svg>
                              Export
                          </button>
                      </div>
                  </div>

                  <div class="overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  @if(is_array($this->tableHeader))

                  @foreach($this->tableHeader as $key=> $header)
                      <th  scope="col" class="px-4 py-3 cursor-pointer @if($loop->iteration==15)  text-white bg-gray-500  @endif">
                          <div class="flex justify-between" wire:click="sortingColumn('{{json_encode([$loop->iteration,$header])}}')">
                             <div>{{$header}}</div>
                              @if($this->order=='asc')
                              <svg data-slot="icon" fill="none" class="w-4 h-4" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                              </svg>

                              @else

                              <svg data-slot="icon" fill="none" class="w-4 h-4" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path>
                              </svg>
                              @endif
                          </div>


                      </th>
                      @endforeach


                          @else
                      <th scope="col" class="px-4 py-3">
{{--                          {{ $header }}--}} no
                      </th>
                          @endif



              </tr>
              </thead>
              <tbody>

              @if(is_array($this->tableData))
              @foreach($this->tableData as $key=> $body)

                  <tr class="border-b  dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                      @if(is_array($body))
                      @foreach($body as $key=>$values)
                              @if(is_array($values))
                              @foreach($values as $value)
                          <td class="px-4 py-2  @if($key==14)  text-white bg-gray-500  @endif ">
                <span class="text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:text-primary-300 @if($key==14)  text-white bg-gray-500  @endif ">
                    {{$value}}
                </span>
                          </td>
                      @endforeach
                              @endif
                      @endforeach
                      @endif
                  </tr>
              @endforeach

              @endif



              </tbody>
              <tfoot>
              <tr>
              @foreach($this->table_summary as $summary)

                      <td class="px-4 py-2 bg-gray-500">
                <span class="text-white  h-10 text-xs font-medium px-2 py-0.5 rounded dark:text-primary-300">
                   {{$summary}}
                </span>
                      </td>


                  @endforeach

                  </tr>

              </tfoot>

          </table>

{{--                      {{}}--}}

{{--                      {{ $farmers->links() }}--}}
      </div>

                  <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
              <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                  Showing
                  <span class="font-semibold yellow dark:text-white">1-{{$list_number}}</span>
                  of
                  <span class="font-semibold yellow dark:text-white"> {{count(DB::table('farmers')->get())}} </span>
                  <span class="font-semibold yellow dark:text-white">
                    <select wire:model="list_number" class="bg-gray-50 border border-gray-300 yellow text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach(range(1,1000,2) as $range)
                        <option value="{{$range}}"> {{$range}}</option>
                        @endforeach
                    </select>
                  </span>
              </span>
                      <ul class="inline-flex items-stretch -space-x-px">
                          <li>
                              <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                  <span class="sr-only">Previous</span>
                                  <svg class="w-5 h-5" aria-hidden="true" fill="#DD0035" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                  </svg>
                              </a>
                          </li>
                          @foreach(range(1,$this->last_range) as $number)

                              @if($number >3 && $number <100)
{{--                                  <li>--}}
{{--                                      <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>--}}
{{--                                  </li>--}}
                              @elseif($number <=3)
                                  <li>
                                      <a href="#" wire:click="page({{$number}})" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{$number}}</a>
                                  </li>
                              @elseif($number ==100)
                                  <li>
                                      <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{$number}}</a>
                                  </li>

                              @endif

                          @endforeach
                          <li>
                              <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                  <span class="sr-only">Next</span>
                                  <svg class="w-5 h-5" aria-hidden="true" fill="#DD0035" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                  </svg>
                              </a>
                          </li>
                      </ul>
                  </nav>

              </div>
          </div>
      </section>
  </div>
</div>
