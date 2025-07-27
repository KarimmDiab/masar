<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{

    use WithFileUploads;

    public $name, $email, $password, $password_confirm, $branch, $role, $picture;
    public function render()
    {
        return view('livewire.users.user-create');
    }

    public function addUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|same:password_confirm',
            'branch' => 'required|string|max:255',
            //'picture' => 'nullable|image|max:1024',
            'role' => 'required|string|in:admin,user,manager',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'الاسم يجب أن يكون نصًا.',
            'name.max' => 'الاسم لا يجب أن يزيد عن 255 حرفًا.',

            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
            'email.unique' => 'البريد الإلكتروني مستخدم من قبل.',

            'password.required' => 'كلمة المرور مطلوبة.',
            'password.string' => 'كلمة المرور يجب أن تكون نصًا.',
            'password.min' => 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل.',
            'password.confirmed' => 'تأكيد كلمة المرور غير مطابق.',

            'branch.required' => 'الفرع مطلوب.',
            'branch.string' => 'الفرع يجب أن يكون نصًا.',
            'branch.max' => 'الفرع لا يجب أن يزيد عن 255 حرفًا.',

            'picture.image' => 'يجب أن يكون الملف صورة.',
            'picture.max' => 'أقصى حجم للصورة هو 1 ميجابايت.',

            'role.required' => 'الدور مطلوب.',
            'role.string' => 'الدور يجب أن يكون نصًا.',
            'role.in' => 'الدور يجب أن يكون إما: admin أو user أو manager.',
        ]);
        $picturePath = null;

        if ($this->picture) {
            $originalName = pathinfo($this->picture->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $this->picture->getClientOriginalExtension();
            $filename = now()->timestamp . '_' . Str::slug($originalName) . '.' . $extension;
            $picturePath = $this->picture->storeAs('images/profile_pic', $filename, 'public');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'branch_id' => $this->branch,
            'role' => $this->role,
            'picture' => $picturePath,
        ]);

        return to_route('users.index')->with('success', 'تم إنشاء المستخدم بنجاح');
    }
}
