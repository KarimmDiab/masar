<?php

namespace App\Livewire\Roles;

//use App\Models\Role;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


//use App\Models\Permission;

class RoleCreate extends Component
{
    public $name;
    public $allPermissions = [];
    public $permissions = [];

    public function mount()
    {
        $this->allPermissions = Permission::get();
    }

    public function render()
    {
        return view('livewire.roles.role-create');
    }

    public function addRole()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'الاسم يجب أن يكون نصًا.',
            'name.max' => 'الاسم لا يجب أن يزيد عن 255 حرفًا.',

            'permissions.required' => 'يجب تحديد اذن واحد علي الاقل'
        ]);

//dd($this->allPermissions);
        $role = Role::create([
            'name' => $this->name,
        ]);
        $role->syncPermissions($this->permissions);


        return to_route('roles.index')->with('success', 'تم إنشاء مجموعة إدارية جديدة بنجاح');
    }
}
