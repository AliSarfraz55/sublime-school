<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{

    public function teacher()
    {
        $teachers = DB::table('add_teacher')->get();

        $totalTeachers = DB::table('add_teacher')->count();

        $activeTeachers = DB::table('add_teacher')
            ->where('status', 'Active')
            ->count();

        $maleTeachers = DB::table('add_teacher')
            ->where('gender', 'Male')
            ->count();

        $femaleTeachers = DB::table('add_teacher')
            ->where('gender', 'Female')
            ->count();

        return view('admin.teachers.teacher', compact(
            'teachers',
            'totalTeachers',
            'activeTeachers',
            'maleTeachers',
            'femaleTeachers'
        ));
    }


    public function add_teachers()
    {
        return view('admin.teachers.add_teachers');
    }


    public function store_teacher(Request $request)
{
    $photo = '';

    if ($request->hasFile('photo')) {
        $photo = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('teacher_images'), $photo);
    }

    DB::table('add_teacher')->insert([
        'teacher_id' => $request->teacher_id,
        'name' => $request->name,
        'father_name' => $request->father_name,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'cnic' => $request->cnic,
        'religion' => $request->religion,
        'designation' => $request->designation,
        'department' => $request->department,
        'joining_date' => $request->joining_date,
        'status' => $request->status,
        'experience' => $request->experience,
        'phone' => $request->phone,
        'whatsapp' => $request->whatsapp,
        'email' => $request->email,
        'emergency_contact' => $request->emergency_contact,
        'address' => $request->address,
        'qualification' => $request->qualification,
        'specialization' => $request->specialization,
        'institute' => $request->institute,
        'passing_year' => $request->passing_year,
        'salary' => $request->salary,
        'bank_name' => $request->bank_name,
        'account_number' => $request->account_number,
        'iban' => $request->iban,
        'photo' => $photo,

        'username' => $request->username,
        'password' => Hash::make($request->password),

        // NEW
        'role' => 'teacher',
'access' => 'attendance',

        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/teacher')->with('success', 'Teacher Added Successfully');
}


    


    public function view_teacher($id)
    {
        $teacher = DB::table('add_teacher')
            ->where('id', $id)
            ->first();

        return view('admin.teachers.view_teacher', compact('teacher'));
    }

    
    public function edit_teacher($id)
    {
        $teacher = DB::table('add_teacher')
            ->where('id', $id)
            ->first();

        return view('admin.teachers.edit_teacher', compact('teacher'));
    }

   
    public function update_teacher(Request $request, $id)
    {
       dd([
        'id' => $id,
        'role' => $request->role,
        'access' => $request->access,
        'all' => $request->all(),
    ]);

    $teacher = DB::table('add_teacher')->where('id', $id)->first();

        $photo = $teacher->photo;

       
        if ($request->hasFile('photo')) {

            if ($photo && file_exists(public_path('teacher_images/' . $photo))) {
                unlink(public_path('teacher_images/' . $photo));
            }

            $photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('teacher_images'), $photo);
        }

        DB::table('add_teacher')
    ->where('id', $id)
    ->update([
        'teacher_id' => $request->teacher_id,
        'name' => $request->name,
        'father_name' => $request->father_name,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'cnic' => $request->cnic,
        'religion' => $request->religion,
        'designation' => $request->designation,
        'department' => $request->department,
        'joining_date' => $request->joining_date,
        'status' => $request->status,
        'experience' => $request->experience,
        'phone' => $request->phone,
        'whatsapp' => $request->whatsapp,
        'email' => $request->email,
        'emergency_contact' => $request->emergency_contact,
        'address' => $request->address,
        'qualification' => $request->qualification,
        'specialization' => $request->specialization,
        'institute' => $request->institute,
        'passing_year' => $request->passing_year,
        'salary' => $request->salary,
        'bank_name' => $request->bank_name,
        'account_number' => $request->account_number,
        'iban' => $request->iban,
        'photo' => $photo,

        'username' => $request->username ?? $teacher->username,

        // NEW
       'role' => $teacher->role ?: 'teacher',
'access' => $teacher->access ?: 'attendance',

        'updated_at' => now(),
    ]);

        return redirect('/teacher')->with('success', 'Teacher Updated Successfully');
    }

    public function delete_teacher($id)
    {
        $teacher = DB::table('add_teacher')
            ->where('id', $id)
            ->first();

        if ($teacher) {

            if ($teacher->photo && file_exists(public_path('teacher_images/' . $teacher->photo))) {
                unlink(public_path('teacher_images/' . $teacher->photo));
            }

            DB::table('add_teacher')
                ->where('id', $id)
                ->delete();
        }

        return redirect('/teacher')->with('success', 'Teacher Deleted Successfully');
    }
}