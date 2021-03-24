<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::latest()->get();
        return view('admin.branch.index', compact('branches'));
    }

    public function create()
    {
        return view('admin.branch.create');
    }

    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
        return view('admin.branch.edit', compact('branch'));
    }

    public function destroy($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->delete();
        return redirect()->back()->with('delete', 'Branch : ' . $branch->branch_name . ' DELETED Successfully!');
    }
}
