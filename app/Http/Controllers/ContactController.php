<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = [
            'United States',
            'Canada',
            'France',
            'Germany',
            'Australia',
            'Japan',
            'India',
            'Brazil',
            'South Africa',
            'United Kingdom'
        ];
        return view('contact',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'name' => 'required  | string',
        'email' => 'required | email',
        'phone' => 'required | max:11',
        'company' => 'required',
        'country' => 'required',
        'job_title' => 'required',
        'job_detail' => 'required'
      ]);

        if($validator->passes()){
            $data = new Contact();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->company = $request->company;
            $data->country = $request->country;
            $data->job_title = $request->job_title;
            $data->job_detail = $request->job_detail;
            $data->save();
            return redirect()->route('contact.index')->with('success','Thank You For Contacting Us!');
        } else{
            return redirect()->back()->withErrors($validator)->withInput();
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Contact::find($id);
        return view('admin.inqueryDetail',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Contact::find($id);
        if($user){
            $user->delete();
            return redirect()->route('dashboard.index');
        }
    }
}
