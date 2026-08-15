<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    // =========================
    // CLASSES LIST PAGE
    // =========================
    public function class()
    {
        $classes = DB::table('add_class')
            ->leftJoin('add_teacher', 'add_class.teacher_id', '=', 'add_teacher.id')
            ->select(
                'add_class.*',
                'add_teacher.name as teacher_name'
            )
            ->get();

        $totalClasses = DB::table('add_class')->count();

        $totalTeachers = DB::table('add_class')
            ->distinct()
            ->count('teacher_id');

        $totalCapacity = DB::table('add_class')->sum('max_students');

        $activeClasses = DB::table('add_class')
            ->where('status', 'Active')
            ->count();

        $inactiveClasses = DB::table('add_class')
            ->where('status', 'Inactive')
            ->count();

        return view('admin.classes.class', compact(
            'classes',
            'totalClasses',
            'totalTeachers',
            'totalCapacity',
            'activeClasses',
            'inactiveClasses'
        ));
    }

    

    // =========================
    // ADD CLASS PAGE
    // =========================
    public function add_class()
    {
        $teachers = DB::table('add_teacher')->get();

        return view('admin.classes.add_class', compact('teachers'));
    }

    // =========================
    // STORE CLASS
    // =========================
    public function store_class(Request $request)
    {
        DB::table('add_class')->insert([
            'class_name'   => $request->class_name,
            'class_code'   => $request->class_code,
            'teacher_id'   => $request->teacher_id,
            'section_id'   => $request->section_id,
            'room_no'      => $request->room_no,
            'max_students' => $request->max_students,
            'class_fee'    => $request->class_fee,
            'status'       => $request->status,
            'description'  => $request->description,
            'start_time'   => $request->start_time,
            'end_time'     => $request->end_time,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        return redirect('/class')
            ->with('success', 'Class Added Successfully');
    }

    // =========================
    // VIEW CLASS
    // =========================
    public function view_class($id)
    {
        $class = DB::table('add_class')
            ->leftJoin('add_teacher', 'add_class.teacher_id', '=', 'add_teacher.id')
            ->select(
                'add_class.*',
                'add_teacher.name as teacher_name'
            )
            ->where('add_class.id', $id)
            ->first();

        return view('admin.classes.view_class', compact('class'));
    }

    // =========================
    // EDIT CLASS
    // =========================
    public function edit_class($id)
    {
        $class = DB::table('add_class')->where('id', $id)->first();

        $teachers = DB::table('add_teacher')->get();

        return view('admin.classes.edit_class', compact(
            'class',
            'teachers'
        ));
    }

    // =========================
    // UPDATE CLASS
    // =========================
    public function update_class(Request $request, $id)
    {
        DB::table('add_class')
            ->where('id', $id)
            ->update([

                'class_name'   => $request->class_name,
                'class_code'   => $request->class_code,
                'teacher_id'   => $request->teacher_id,
                'section_id'   => $request->section_id,
                'room_no'      => $request->room_no,
                'max_students' => $request->max_students,
                'class_fee'    => $request->class_fee,
                'status'       => $request->status,
                'description'  => $request->description,
                'start_time'   => $request->start_time,
                'end_time'     => $request->end_time,
                'updated_at'   => now(),

            ]);

        return redirect('/class')
            ->with('success', 'Class Updated Successfully');
    }

    // =========================
    // DELETE CLASS
    // =========================
    public function delete_class($id)
    {
        DB::table('add_class')
            ->where('id', $id)
            ->delete();

        return redirect('/class')
            ->with('success', 'Class Deleted Successfully');
    }
}

