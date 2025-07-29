<?php

namespace App\Livewire\Roles;

use Livewire\Component;
//use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Permission;

class RoleEdit extends Component
{
    public $name, $role;
    public $allPermissions = [];
    public $permissions = [];

    public function mount($id)
    {
        $this->role = Role::find($id);
        $this->allPermissions = Permission::get();
        $this->name = $this->role->name;
        $this->permissions = $this->role->permissions()->pluck('name');
    }
    public function render()
    {
        return view('livewire.roles.role-edit');
    }

    public function editRole()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:roles,name,'. $this->role->id . '',
            'permissions' => 'required',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'الاسم يجب أن يكون نصًا.',
            'name.max' => 'الاسم لا يجب أن يزيد عن 255 حرفًا.',

            'permissions.required' => 'يجب تحديد اذن واحد علي الاقل'
        ]);

        //dd($this->allPermissions);
        $this->role->name = $this->name;
        $this->role->save();
 
        $this->role->syncPermissions($this->permissions);


        return to_route('roles.index')->with('success', 'تم تعديل بيانات المجموعة الإدارية بنجاح');
    }
}
