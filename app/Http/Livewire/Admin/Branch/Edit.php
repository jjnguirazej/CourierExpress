<?php

namespace App\Http\Livewire\Admin\Branch;

use App\Models\Branch;
use Livewire\Component;

class Edit extends Component
{
    public $branch_id;
    public $branch_name;
    public $branch_email;
    public $branch_phone;
    public $branch_address;
    public $branch_city;
    public $branch_state;
    public $branch_zip_code;
    public $branch_country;

    public function mount($branch)
    {
        $this->branch_id = $branch->id;
        $this->branch_name = $branch->branch_name;
        $this->branch_email = $branch->branch_email;
        $this->branch_phone = $branch->branch_phone;
        $this->branch_address = $branch->branch_address;
        $this->branch_city = $branch->branch_city;
        $this->branch_state = $branch->branch_state;
        $this->branch_zip_code = $branch->branch_zip_code;
        $this->branch_country = $branch->branch_country;
    }

    public function update()
    {
        $this->validate([
            'branch_name' => "required|string|unique:branches,branch_name,$this->branch_id",
            'branch_email' => "required|email|unique:branches,branch_email,$this->branch_id",
            'branch_phone' => "required|min:11|max:11|unique:branches,branch_phone,$this->branch_id",
            'branch_address' => 'required',
            'branch_city' => 'required|string',
            'branch_state' => 'required|string',
            'branch_zip_code' => 'required|string',
            'branch_country' => 'required|string',
        ]);

        $branch = Branch::findOrFail($this->branch_id);
        $branch->branch_name = $this->branch_name;
        $branch->branch_email = $this->branch_email;
        $branch->branch_phone = $this->branch_phone;
        $branch->branch_address = $this->branch_address;
        $branch->branch_city = $this->branch_city;
        $branch->branch_state = $this->branch_state;
        $branch->branch_zip_code = $this->branch_zip_code;
        $branch->branch_country = $this->branch_country;

        if($branch->isDirty('branch_name', 'branch_email', 'branch_phone', 'branch_address', 'branch_city', 'branch_state', 'branch_zip_code', 'branch_country')) {
            $branch->save();
            session()->flash('update', 'Branch : ' . $branch->branch_name . ' UPDATED Successfully!');
        } else {
            session()->flash('nothing-update', 'Nothing has been UPDATED!');
            return back();
        }

        $this->reset();
        return redirect()->route('admin.branches.index');
    }

    public function render()
    {
        return view('livewire.admin.branch.edit');
    }
}
