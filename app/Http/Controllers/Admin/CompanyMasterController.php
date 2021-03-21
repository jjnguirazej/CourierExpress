<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyMaster;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CompanyMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies_master = CompanyMaster::all();
        if(count ($companies_master) > 0 ) {
            $company_master = CompanyMaster::find(1);
            return view('admin.company.index', compact('companies_master', 'company_master'));
        } else {
            return view('admin.company.index', compact('companies_master'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required|string',
            'company_logo' => 'required|image|mimes:jpg,jpeg,png,bmp',
            'company_address' => 'required',
            'company_city' => 'required',
            'company_state' => 'required',
            'company_zip_code' => 'required',
            'company_country' => 'required|string',
            'company_phone' => 'required|min:11|max:11',
            'company_email' => 'required|email',
            'company_gst' => 'required|string',
        ]);

        $slug = Str::of($request->company_name)->slug('-');
        $image = $request->file('company_logo');
        if (isset($image)) {
            $date = Carbon::now()->toDateString();
            $image_name = $slug . '-' . $date . '-' . uniqid() . $image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('company')) {
                Storage::disk('public')->makeDirectory('company');
            }
            $company_logo = Image::make($image)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('company/'.$image_name, $company_logo);
        }
        else {
            $image_name = 'default.png';
        }

        $company = new CompanyMaster();
        $company->company_name = $request->company_name;
        $company->company_logo = $image_name;
        $company->company_address = $request->company_address;
        $company->company_city = $request->company_city;
        $company->company_state = $request->company_state;
        $company->company_zip_code = $request->company_zip_code;
        $company->company_country = $request->company_country;
        $company->company_phone = $request->company_phone;
        $company->company_email = $request->company_email;
        $company->company_gst = $request->company_gst;

        $company->save();
        return redirect()->back()->with('success', 'Company Details Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required|string',
            'company_logo' => 'image|mimes:jpg,jpeg,png,bmp',
            'company_address' => 'required',
            'company_city' => 'required',
            'company_state' => 'required',
            'company_zip_code' => 'required',
            'company_country' => 'required|string',
            'company_phone' => 'required|min:11|max:11',
            'company_email' => 'required|email',
            'company_gst' => 'required|string',
        ]);
        $company = CompanyMaster::find(1);

        $slug = Str::of($request->company_name)->slug('-');
        $image = $request->file('company_logo');
        if (isset($image)) {
            $date = Carbon::now()->toDateString();
            $image_name = $slug . '-' . $date . '-' . uniqid() . $image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('company')) {
                Storage::disk('public')->makeDirectory('company');
            }
            if(Storage::disk('public')->exists('company/'.$company->company_logo)){
                Storage::disk('public')->delete('company/'.$company->company_logo);
            }
            $company_logo = Image::make($image)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('company/'.$image_name, $company_logo);
        }
        else {
            $image_name = $company->company_logo;
        }

        $company->company_name = $request->company_name;
        $company->company_logo = $image_name;
        $company->company_address = $request->company_address;
        $company->company_city = $request->company_city;
        $company->company_state = $request->company_state;
        $company->company_zip_code = $request->company_zip_code;
        $company->company_country = $request->company_country;
        $company->company_phone = $request->company_phone;
        $company->company_email = $request->company_email;
        $company->company_gst = $request->company_gst;

        $company->save();
        return redirect()->back()->with('update', 'Company Details Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
