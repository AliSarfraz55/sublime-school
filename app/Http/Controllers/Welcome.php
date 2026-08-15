<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Welcome extends Controller
{
  public function index()
  {
    return view('home');
  }
  public function about()
  {
    return view('about');
  }
  public function academic()
  {
    return view('academic');
  }
  public function admission()
  {
    return view('admission');
  }
 public function gallery()
{
    $galleries = DB::table('galleries')
        ->where('status', 'Published')
        ->orderBy('id', 'DESC')
        ->get();

    return view('gallery', compact('galleries'));
}
  public function blog()
{
    $featured = DB::table('blogs')
        ->where('status','Published')
        ->latest()
        ->first();

    $blogs = DB::table('blogs')
        ->where('status','Published')
        ->latest()
        ->get();

    return view('blog', compact('featured','blogs'));
}
  public function contact()
  {
    return view('contact');
  }
public function contact_store(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    DB::table('contacts')->insert([
        'name'       => $request->name,
        'email'      => $request->email,
        'message'    => $request->message,
        'status'     => 'Unread',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return back()->with('success', 'Message sent successfully!');
}

  public function applynow()
  {
    return view('applynow');
  }
  public function admission_store(Request $request)
{
    $request->validate([
        'student_name'     => 'required|string|max:255',
        'father_name'      => 'required|string|max:255',
        'dob'              => 'required|date',
        'gender'           => 'required',
        'class'            => 'required',
        'previous_school'  => 'nullable|string|max:255',
        'contact'          => 'required|string|max:20',
        'email'            => 'nullable|email|max:255',
        'address'          => 'nullable|string',
        'document'         => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    $documentName = null;

    if ($request->hasFile('document')) {

        $documentName = time().'_'.$request->file('document')->getClientOriginalName();

        $request->file('document')->move(
            public_path('admission_documents'),
            $documentName
        );
    }

    DB::table('admissions')->insert([
        'student_name'    => $request->student_name,
        'father_name'     => $request->father_name,
        'dob'             => $request->dob,
        'gender'          => $request->gender,
        'class'           => $request->class,
        'previous_school' => $request->previous_school,
        'contact'         => $request->contact,
        'email'           => $request->email,
        'address'         => $request->address,
        'document'        => $documentName,
        'status'          => 'Pending',
        'created_at'      => now(),
        'updated_at'      => now(),
    ]);

    return back()->with('success', 'Admission application submitted successfully.');
}
    public function login()
  {
    return view('login');
  }

}