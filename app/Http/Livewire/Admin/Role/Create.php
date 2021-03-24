<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;

class Create extends Component
{
    public $name;

    public function store()
    {
        $this->validate([
            'name' => 'required|string|unique:roles,name'
        ]);

        $role = new Role();
        $role->name = $this->name;
        $role->save();
        session()->flash('success', 'Role CREATED Successfully!');
        $this->reset();
        return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.role.create');
    }
}
