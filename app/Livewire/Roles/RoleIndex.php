<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use App\Livewire\Roles\Roles;
use Spatie\Permission\Models\Role;
//use App\Models\Role;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = Role::with('permissions')->get();
        return view('livewire.roles.role-index', compact('roles'));
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'تم حذف المجموعة الإدارية بنجاح');

    }
}
