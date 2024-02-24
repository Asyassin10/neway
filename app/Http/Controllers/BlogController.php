<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('created_at')->paginate(30);
        return view("dashboard.blogs")->with("blogs", $blogs);
    }
    public function create()
    {
        return view('dashboard.add-blog');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Assuming you only accept image files
            'text' => 'required',
            "descrption"=> 'required'
        ]);
        // Handle file upload
        // Retrieve the file from the request
        $image = $request->file('image');
        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
        // Store the uploaded file in the public/uploads directory
        $request->image->move(public_path('/uploads'), $fileName);

        $title = $request->title;
        $slug = Str::slug($title);
        $text = $request->text;
        $by = $request->by;
        //add blog
        $blog = new Blog();
        $blog->descrption = $request->descrption;
        $blog->image = $fileName;
        $blog->title = $title;
        $blog->text = $text;
        $blog->slug = $slug;
        $blog->by = $by;
        $blog->save();
        return redirect()->route("blog");
    }



    public function edit($slug)
    {
        $blog = Blog::where("slug", $slug)->first();
        return view('dashboard.edit-blog')->with("blog", $blog);
    }

    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Allow image to be nullable for update
            'text' => 'required',
            "descrption"=> 'required'
        ]);

        // Find the blog entry by its ID
        $blog = Blog::where("slug", $slug)->first();

        // Update the blog entry with the new data
        $blog->title = $request->title;
        $blog->text = $request->text;
        $blog->descrption = $request->descrption;
        $slug = Str::slug($request->title);
        $blog->by = $request->by;

        // Handle image update if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads'), $fileName);
            // Delete old image file if exists
            if ($blog->image) {
                unlink(public_path('/uploads/' . $blog->image));
            }
            $blog->image = $fileName;
        }

        // Save the updated blog entry
        $blog->save();

        return redirect()->route("blog");
    }


    public function destroy($slug)
    {
        // Find the blog by its slug
        $blog = Blog::where('slug', $slug)->first();

        // Delete the blog
        $blog->delete();

        return redirect()->route("blog");
    }

    public function show($slug)
    {
        // Find the blog by its slug
        $blog = Blog::where('slug', $slug)->first();
        if ($blog) {
            return view('blog')->with("blog", $blog);
        } else {
            return abort(404);
        }

    }

}
