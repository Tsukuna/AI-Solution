<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{

    public function search(Request $request){
        $query = $request->input('query');
        $blogs = Blog::where('title','LIKE',"%$query%")
                            ->get();
        return view('blog',compact('blogs'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.createBlog');
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
          'title' => 'required | string',
          'content' => 'required | string',
          'image' => 'required',
          ]);

          if($validator->passes()){
            if($request->image){
                $file = $request->image;
                $imageName = "blog_image". uniqid() . "." . $file->extension();
                $file->storeAs("public/blogImage",$imageName);
            }
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->content = $request->content;
            $blog->image = $imageName;
            $blog->save();
            return redirect()->route('blog.index')->with('success','Blog Stored Successfully!');
          } else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
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
