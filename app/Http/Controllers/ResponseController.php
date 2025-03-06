<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Http\Requests\StoreResponseRequest;
use App\Http\Requests\UpdateResponseRequest;
use Illuminate\Support\Facades\Validator;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responses = Response::all();
        return view('feedback',compact('responses'));
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
    public function store(StoreResponseRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required  | string',
            'email' => 'required | email',
            'category' => 'required',
            'rating' => 'required',
            'feedback' => 'required',
          ]);

            if($validator->passes()){
                $data = new Response();
                $data->full_name = $request->full_name;
                $data->email = $request->email;
                $data->category = $request->category;
                $data->rating = $request->rating;
                $data->feedback = $request->feedback;
                $data->save();
                return redirect()->route('feedback.index')->with('success','Feedback Submitted Successfully!');
            } else{
                return redirect()->back()->withErrors($validator)->withInput();
            }

    }

    /**
     * Display the specified resource.
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResponseRequest $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Response $response)
    {
        //
    }
}
