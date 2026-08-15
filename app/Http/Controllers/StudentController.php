<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index()
    {
        $students = DB::table('add_student')->get();

        $totalStudents = DB::table('add_student')->count();

        $boys = DB::table('add_student')
            ->where('gender', 'Male')
            ->count();

        $girls = DB::table('add_student')
            ->where('gender', 'Female')
            ->count();

        $activeStudents = DB::table('add_student')
            ->where('status', 'Active')
            ->count();

        $inactiveStudents = DB::table('add_student')
            ->where('status', 'Inactive')
            ->count();

        $totalClasses = DB::table('add_class')->count();

        return view('admin.students.student', compact(
            'students',
            'totalStudents',
            'boys',
            'girls',
            'activeStudents',
            'inactiveStudents',
            'totalClasses'
        ));
    }

    public function add_student()
    {
        return view('admin.students.add_student');
    }

    public function store_student(Request $request)
    {
        $photoName = null;

        if ($request->hasFile('photo')) {
            $photoName = time() . '.' . $request->photo->extension();

            $request->photo->move(
                public_path('students'),
                $photoName
            );
        }

        DB::table('add_student')->insert([
            'name'           => $request->name,
            'roll_no'        => $request->roll_no,
            'dob'            => $request->dob,
            'gender'         => $request->gender,
            'class'          => $request->class,
            'section'        => $request->section,
            'admission_date' => $request->admission_date,
            'status'         => $request->status,
            'father_name'    => $request->father_name,
            'phone'          => $request->phone,
            'address'        => $request->address,
            'photo'          => $photoName,
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        return redirect('/add_student')
            ->with('success', 'Student Added Successfully');
    }

    

    public function view_student($id)
    {
        $student = DB::table('add_student')
            ->where('id', $id)
            ->first();

        return view('admin.students.view_student', compact('student'));
    }

    public function edit_student($id)
    {
        $student = DB::table('add_student')
            ->where('id', $id)
            ->first();

        return view('admin.students.edit_student', compact('student'));
    }

    public function update_student(Request $request, $id)
    {
        $student = DB::table('add_student')
            ->where('id', $id)
            ->first();

        $photoName = $student->photo;

        if ($request->hasFile('photo')) {
            $photoName = time() . '.' . $request->photo->extension();

            $request->photo->move(
                public_path('students'),
                $photoName
            );
        }

        DB::table('add_student')
            ->where('id', $id)
            ->update([
                'name'           => $request->name,
                'roll_no'        => $request->roll_no,
                'dob'            => $request->dob,
                'gender'         => $request->gender,
                'class'          => $request->class,
                'section'        => $request->section,
                'admission_date' => $request->admission_date,
                'status'         => $request->status,
                'father_name'    => $request->father_name,
                'phone'          => $request->phone,
                'address'        => $request->address,
                'photo'          => $photoName,
                'updated_at'     => now()
            ]);

        return redirect('/student')
            ->with('success', 'Student Updated Successfully');
    }

    public function delete_student($id)
    {
        DB::table('add_student')->where('id', $id)->delete();

        return redirect('/student')
            ->with('success', 'Student Deleted Successfully');
    }
}