<?php

namespace App\Http\Livewire\Sidebar;

use App\Models\departmentsList;
use App\Models\menus;
use App\Models\Role;
use App\Models\sub_menus;
use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Sidebar extends Component
{
    // Public properties for the component
    public $tab_id;
    public $currentUserId;
    public $currentUserDepartment;
    public $menuItems = [];

    // Method to handle when a menu item is clicked
    public function menuItemClicked($item)
    {
        $this->tab_id = $item;
        $this->emit('menuItemClicked', $item);

    }

    /**
     * Renders the component.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     *
     * @throws BindingResolutionException
     */
    public function render()
    {
        // Get the current user ID
        $this->currentUserId = Auth::user()->id;

        // Get the current user's department
        $this->currentUserDepartment = User::where('id', $this->currentUserId)->first()->department;

        // Get the menu items for the current user's department
        $this->menuItems = Role::where('id', $this->currentUserDepartment)->first()->permissions;

        //dd($this->menuItems);

        if ($this->menuItems) {
            // Clean up the menu items and sort them
            $str_json = json_encode($this->menuItems);
            $this->menuItems = json_decode($str_json, TRUE);
            $this->menuItems = str_replace(array('[', ']', '"', ' '), '', $this->menuItems);
            $permissions = explode(",", $this->menuItems);
            //sort($permissions);



            // Store the permissions in the session
            session()->put('permissions', $permissions);
        } else {
            // If there are no menu items, store a null value in the session
            session()->put('permissions', null);
        }
//        dd($permissions);

        // Get the IDs of the menus that the user has access to
        $menuIds = [];

        foreach ($permissions as $permission) {
            $rows = DB::table('permissions')->select('id', 'menu_id')->where('id', $permission)->get();


            foreach ($rows as $row) {
                if (!in_array($row->menu_id, $menuIds)) {
                    $menuIds[] = $row->menu_id;
                }
            }

        }
        //$this->menuItems = $menuIds;

        //dd($this->menuItems);




        // Given array of ids
        //$ids = [13, 2, 12, 10, 11, 0, 9, 4, 5, 7, 14, 15, 16];






        $permissionsArray = [];

        $role = \Illuminate\Support\Facades\Auth::user()->role;

        $steps = \Illuminate\Support\Facades\DB::table('steps')->where('role_id', $role)->get();

        if ($steps->isNotEmpty()) {
            $processIds = $steps->pluck('process_id')->toArray();

            $permissions = \Illuminate\Support\Facades\DB::table('step_permissions')
                ->whereIn('Process_id', $processIds)
                ->pluck('permission_id')
                ->map(function ($value) {
                    return (int) $value;
                })
                ->toArray();

            $permissionsArray = array_unique($permissions);  // To ensure unique permissions
        }

        // If needed, reindex the array
        $permissionsArray = array_values($permissionsArray);

        //dd($permissionsArray);

        session()->put('permission_items', $permissionsArray);




        $ids = $permissionsArray;
        //$ids = $menuIds;

        // Create an array to map id to menu_number
        $idToMenuNumber = [];

        $menuItems = menus::select('id', 'menu_number')->get();
        foreach ($menuItems as $item) {
            $idToMenuNumber[$item['id']] = $item['menu_number'];
        }

        // Create a new array to store the sorted ids
        $sortedIds = [];

        // Sort the given ids array based on menu_number
        foreach ($ids as $id) {
            if (isset($idToMenuNumber[$id])) {
                $sortedIds[$idToMenuNumber[$id]] = $id;
            }
        }

        // Sort by menu_number (array keys)
        ksort($sortedIds);

        // Extract the ids in the sorted order
        $sortedIds = array_values($sortedIds);

        // Now $sortedIds contains the ids rearranged as per their menu_number
        $this->menuItems = $sortedIds;

        //dd($this->menuItems);




        $permission_items =[];
        foreach ($permissions as $permission){
            $rows = DB::table('permissions')->select('permission')->where('id', $permission)->first();

            if($rows){
                $permission_items[] = $rows->permission;
            }



        }

        //session()->put('permission_items', $permission_items);



//        dd($permission_items);
        // Check the user's status and return the appropriate view
        $userStatus = User::where('id', Auth::user()->id)->value('status');
        if ($userStatus == 'PENDING' || $userStatus == 'BLOCKED' || $userStatus == 'DELETED') {
            return view('livewire.empty-div');
        } else {
            return view('livewire.sidebar.sidebar');
        }
    }
}
