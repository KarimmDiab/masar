<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserEdit extends Component
{
    public $user;
    public $name, $email, $password, $password_confirm, $branch, $role;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->branch = $this->user->branch_id;
        $this->role = $this->user->role;
    }

    public function render()
    {
        return view('livewire.users.user-edit');
    }

    public function editUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user->id),
            ],
            'password' => 'nullable|string|min:8|same:password_confirm',
            'branch' => 'required|numeric',
            'role' => 'required|string|in:admin,user,manager',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.unique' => 'البريد الإلكتروني مستخدم من قبل.',
            'password.same' => 'تأكيد كلمة المرور غير مطابق.',
            'branch.required' => 'الفرع مطلوب.',
            'role.required' => 'الدور مطلوب.',
        ]);

        // تحديث القيم:
        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->branch_id = $this->branch;
        $this->user->role = $this->role;

        if ($this->password) {
            $this->user->password = $this->password;
        }

        $this->user->save();


        return to_route('users.index')->with('success', 'تم تعديل بيانات المستخدم بنجاح');
    }
}
