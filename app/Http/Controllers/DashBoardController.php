<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{

    public function searchJobTitle(Request $request){
        $query = $request->input('job_title');
        $users = Contact::where('job_title','LIKE',"%$query%")
                            ->paginate(5);
        return view('admin.dashboard',compact('users'));
    }

    public function searchCountry(Request $request){
        $query = $request->input('country');
        $users = Contact::where('country','LIKE',"%$query%")
                                ->paginate(5);
        return view('admin.dashboard',compact('users'));
    }

    public function searchDate(Request $request){
        $query = $request->input('date');
        $users = Contact::whereDate('created_at', Carbon::createFromFormat('Y-m-d', $query)->format('Y-m-d'))->paginate(5);
                return view('admin.dashboard',compact('users'));
    }


    public function searchStatus(Request $request)
    {
        $query = $request->query('status');
        $users = Contact::where('status', '=', $query)->paginate(5);
        return view('admin.dashboard',compact('users'));
    }

    public function exportCSV(){
        $users = Contact::all();

        if ($users->isEmpty()) {
            return redirect()->route('dashboard.index')->with('fail','No Data Available To Export');
            }

        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=users.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $columns = array('Name', 'Email', 'Phone', 'Company', 'Country', 'Job Title', 'Job Detail');
        $callback = function() use($users, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($users as $user) {
                fputcsv($file, array(
                    $user->name,
                    $user->email,
                    "\t" . $user->phone,
                    $user->company,
                    $user->country,
                    $user->job_title,
                    $user->job_detail));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Contact::paginate(5);
        return view('admin.dashboard',compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
