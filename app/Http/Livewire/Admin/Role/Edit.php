<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;

class Edit extends Component
{
    public $role_id;
    public $name;

    public function mount($role)
    {
        $this->role_id = $role->id;
        $this->name = $role->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string',
        ]);

        $role = Role::findOrFail($this->role_id);
        $role->name = $this->name;

        $role->save();
        session()->flash('update', 'Role : ' . $role->name . ' Updated Successfully!');
        $this->reset();
        return redirect()->route('admin.roles.index');
    }
    public function render()
    {
        return view('livewire.admin.role.edit');
    }
}
