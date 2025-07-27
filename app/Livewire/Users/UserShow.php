<?php

namespace App\Livewire\Users;
use App\Models\User;

use Livewire\Component;

class UserShow extends Component
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
        return view('livewire.users.user-show');
    }
}
