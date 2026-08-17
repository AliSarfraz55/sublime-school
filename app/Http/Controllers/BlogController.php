<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    // Blogs List
    public function blogs()
    {
        $blogs = DB::table('blogs')
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.blog.blogs', compact('blogs'));
    }

    // Add Blog Page
    public function add_blog()
    {
        return view('admin.blog.add_blog');
    }

    // Save Blog
    public function save_blog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'status' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        // Upload Folder
        $folder = public_path('uploads/blogs');

        // Create folder if it does not exist
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }

        // Image Upload
        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

        $request->image->move($folder, $imageName);

        DB::table('blogs')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'status' => $request->status,
            'image' => $imageName,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/blogs')
            ->with('success', 'Blog Added Successfully.');
    }

    // View Blog
    public function view_blog($id)
    {
        $blog = DB::table('blogs')
            ->where('id', $id)
            ->first();

        if (!$blog) {
            abort(404);
        }

        return view('admin.blog.view_blog', compact('blog'));
    }

    // Edit Blog
    public function edit_blog($id)
    {
        $blog = DB::table('blogs')
            ->where('id', $id)
            ->first();

        if (!$blog) {
            return redirect('/blogs')
                ->with('error', 'Blog not found.');
        }

        return view('admin.blog.edit_blog', compact('blog'));
    }

    // Update Blog
    public function update_blog(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'status' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $blog = DB::table('blogs')
            ->where('id', $id)
            ->first();

        if (!$blog) {
            return redirect('/blogs')
                ->with('error', 'Blog not found.');
        }

        // Old image by default
        $imageName = $blog->image;

        // If new image uploaded
        if ($request->hasFile('image')) {

            $folder = public_path('uploads/blogs');

            // Create folder if it does not exist
            if (!file_exists($folder)) {
                mkdir($folder, 0755, true);
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            $request->image->move($folder, $imageName);
        }

        DB::table('blogs')
            ->where('id', $id)
            ->update([

                'title' => $request->title,
                'author' => $request->author,
                'status' => $request->status,
                'image' => $imageName,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'updated_at' => now(),

            ]);

        return redirect('/blogs')
            ->with('success', 'Blog Updated Successfully.');
    }

    // Blog Detail
    public function blog_detail($id)
    {
        $blog = DB::table('blogs')
            ->where('id', $id)
            ->first();

        if (!$blog) {
            abort(404);
        }

        $latest = DB::table('blogs')
            ->where('id', '!=', $id)
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get();

        return view('admin.blog.blog_detail', compact('blog', 'latest'));
    }
}