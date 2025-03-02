<div>

    @switch($this->menu_id)
        @case('0')
            <livewire:dashboard.dashboard/>
            @break
        @case('1')
            <livewire:branches.branches />
            @break
        @case('2')
            <livewire:clients.clients />
            @break
        @case('3')
        <livewire:shares.shares />
          @break
          @case('4')
            <livewire:approvals.approvals-processor />
            @break
          @case('5')
            <livewire:offers.offers />
          @break
         @case('6')
            <livewire:reports.reports />
          @break
          @case('7')
            <livewire:subscribers.subscribers/>

            @break
          @case('8')
            <livewire:approvals.approvals-processor />
            @break
          @case('9')
            <livewire:users.users />
            @break
            @case('10')
            <livewire:cm.cm />
            @break
            @case('11')
            <livewire:commodities.commodities />
            @break
            @case('12')
            <livewire:sys-settings.settings />
            @break
            @case('13')
            <livewire:reports.reports />
            @break

            @case('14')
            <livewire:branches.branches />
            @break

        @case('15')
            <livewire:services.services />
            @break

            @case('16')
            <div class="p-4">
                <livewire:expenses.expense />
{{--                <livewire:accounting.expenses-table />--}}
            </div>
             @break

        @case('17')
            <livewire:notification.notifications/>
            @break



           @case('18')
              <livewire:teller-management.teller/>

        @break

        @case('17')
        <livewire:budget-management.budget/>
        @break

           @case('19')
            <livewire:profile-setting.profile/>
            @break
        @default
            <livewire:dashboard.dashboard/>
    @endswitch
</div>

