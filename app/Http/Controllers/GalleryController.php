<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    // Gallery Management
    public function gallery_management()
    {
        $galleries = DB::table('galleries')
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.gallery.gallery_management', compact('galleries'));
    }

    // Add Gallery Page
    public function add_gallery()
    {
        return view('admin.gallery.add_gallery');
    }

    // Save Gallery
    public function save_gallery(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'image' => 'required|image'
        ]);

        // Upload folder
        $folder = public_path('uploads/gallery');

        // Create folder if it does not exist
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }

        // Image name
        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

        // Move image
        $request->image->move($folder, $imageName);

        // Save in database
        DB::table('galleries')->insert([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/gallery_management')
            ->with('success', 'Gallery Added Successfully');
    }

    // View Gallery
    public function view_gallery($id)
    {
        $gallery = DB::table('galleries')
            ->where('id', $id)
            ->first();

        return view('admin.gallery.view_gallery', compact('gallery'));
    }

    // Edit Gallery
    public function edit_gallery($id)
    {
        $gallery = DB::table('galleries')
            ->where('id', $id)
            ->first();

        return view('admin.gallery.edit_gallery', compact('gallery'));
    }

    // Update Gallery
    public function update_gallery(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'image' => 'nullable|image'
        ]);

        $data = [
            'title' => $request->title,
            'status' => $request->status,
            'updated_at' => now()
        ];

        // If new image uploaded
        if ($request->hasFile('image')) {

            $folder = public_path('uploads/gallery');

            // Create folder if it does not exist
            if (!file_exists($folder)) {
                mkdir($folder, 0755, true);
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            $request->image->move($folder, $imageName);

            $data['image'] = $imageName;
        }

        DB::table('galleries')
            ->where('id', $id)
            ->update($data);

        return redirect('/gallery_management')
            ->with('success', 'Gallery Updated Successfully');
    }

    // Delete Gallery
    public function delete_gallery($id)
    {
        DB::table('galleries')
            ->where('id', $id)
            ->delete();

        return redirect('/gallery_management');
    }
}