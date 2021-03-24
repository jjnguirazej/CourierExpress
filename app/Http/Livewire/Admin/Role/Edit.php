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
            'name' => "required|string|unique:roles,name,$this->role_id"
        ]);

        $role = Role::findOrFail($this->role_id);
        $role->name = $this->name;
        if($role->isDirty('name')) {
            $role->save();
            session()->flash('update', 'Role : ' . $role->name . ' UPDATED Successfully!');
        } else {
            session()->flash('nothing-update', 'Nothing has been UPDATED!');
            return back();
        }

        $this->reset();
        return redirect()->route('admin.roles.index');
    }
    public function render()
    {
        return view('livewire.admin.role.edit');
    }
}
