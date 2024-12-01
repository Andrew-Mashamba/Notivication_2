<div>

    @if($status == 'ACTIVE')
        <span class="bg-blue-400 text-blue-800 text-sm font-medium mr-2 p-2 rounded dark:bg-blue-900 dark:text-blue-300">{{$status}}</span>
    @endif
    @if($status == 'Active')
        <span class="bg-blue-400 text-blue-800 text-sm font-medium mr-2 p-2 rounded dark:bg-blue-900 dark:text-blue-300">{{$status}}</span>
    @endif
    @if($status == 'PENDING')
        <span class="bg-yellow-400 text-yellow-800 text-sm font-medium mr-2 p-2 rounded dark:bg-yellow-900 dark:text-yellow-300">{{$status}}</span>
    @endif
    @if($status == 'DELETED')
        <span class="bg-red-400 text-red-800 text-sm font-medium mr-2 p-2 rounded dark:bg-red-900 dark:text-red-300">{{$status}}</span>
    @endif
    @if($status == 'BLOCKED')
        <span class="bg-red-400 text-gray-800 text-sm font-medium mr-2 p-2 rounded dark:bg-gray-700 dark:text-gray-300">{{$status}}</span>
    @endif

        @if($status == 'APPROVED')
            <span class="bg-blue-400 text-blue-800 text-sm font-medium mr-2 p-2 rounded dark:bg-blue-900 dark:text-blue-300">{{$status}}</span>
        @endif
        @if($status == 'REJECTED')
            <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 p-2 rounded dark:bg-red-900 dark:text-red-300">{{$status}}</span>
        @endif


</div>
