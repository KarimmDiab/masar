<?php

namespace App\Livewire\Users;


use Livewire\Component;
use App\Models\User;

class UserIndex extends Component
{

    
    public function render()
    {
        $users = User::get();
        return view('livewire.users.user-index', compact('users'));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('success', 'تم حذف اسم المستخدم بنجاح');
    }
}
