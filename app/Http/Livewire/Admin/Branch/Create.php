<?php

namespace App\Http\Livewire\Admin\Branch;

use App\Models\Branch;
use Livewire\Component;

class Create extends Component
{
    public $branch_name;
    public $branch_email;
    public $branch_phone;
    public $branch_address;
    public $branch_city;
    public $branch_state;
    public $branch_zip_code;
    public $branch_country;

    public function store()
    {
        $this->validate([
            'branch_name' => 'required|string',
            'branch_email' => 'required|email',
            'branch_phone' => 'required|min:11|max:11',
            'branch_address' => 'required',
            'branch_city' => 'required|string',
            'branch_state' => 'required|string',
            'branch_zip_code' => 'required|string',
            'branch_country' => 'required|string',
        ]);

        $branch = new Branch();
        $branch->branch_name = $this->branch_name;
        $branch->branch_email = $this->branch_email;
        $branch->branch_phone = $this->branch_phone;
        $branch->branch_address = $this->branch_address;
        $branch->branch_city = $this->branch_city;
        $branch->branch_state = $this->branch_state;
        $branch->branch_zip_code = $this->branch_zip_code;
        $branch->branch_country = $this->branch_country;

        $branch->save();
        session()->flash('success', 'Branch : ' . $branch->branch_name . ' Created Successfully!');
        $this->reset();
        return redirect()->route('admin.branch-master.index');
    }

    public function render()
    {
        return view('livewire.admin.branch.create');
    }
}
