<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    

    // BLOG LIST
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }



    // CREATE FORM
    public function create()
    {
        return view('admin.blogs.create');
    }



    // STORE BLOG
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image',
            'published_at' => 'nullable|date'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('blogs'), $imageName);
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => $imageName,
            'published_at' => $request->published_at,
            'status' => 'published'
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success','Blog created successfully');

    }



    // EDIT FORM
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.edit', compact('blog'));
    }



    // UPDATE BLOG
    public function update(Request $request, $id)
    {

        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        $imageName = $blog->image;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('blogs'), $imageName);
        }

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => $imageName,
            'published_at' => $request->published_at
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success','Blog updated successfully');

    }



    // DELETE BLOG
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success','Blog deleted successfully');
    }

}