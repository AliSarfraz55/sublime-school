<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    // ==========================
    // EXAM LIST
    // ==========================
    public function exam()
    {
        $exams = DB::table('schedule_exam')
            ->leftJoin('add_class', 'schedule_exam.class_id', '=', 'add_class.id')
            ->leftJoin('subject', 'schedule_exam.subject_id', '=', 'subject.id')
            ->leftJoin('add_teacher', 'schedule_exam.invigilator_id', '=', 'add_teacher.id')
            ->select(
                'schedule_exam.*',
                'add_class.class_name',
                'subject.subject_name',
                'add_teacher.name as invigilator_name'
            )
            ->orderBy('schedule_exam.id', 'desc')
            ->get();

        $totalExams = DB::table('schedule_exam')->count();

        $upcomingExams = DB::table('schedule_exam')
            ->where('status', 'Upcoming')
            ->count();

        $completedExams = DB::table('schedule_exam')
            ->where('status', 'Completed')
            ->count();

        return view('admin.exams.exam', compact(
            'exams',
            'totalExams',
            'upcomingExams',
            'completedExams'
        ));
    }

    // ==========================
    // SCHEDULE EXAM PAGE
    // ==========================
    public function schedule_exam()
    {
        $classes = DB::table('add_class')->get();
        $subjects = DB::table('subject')->get();
        $teachers = DB::table('add_teacher')->get();

        return view(
            'admin.exams.schedule_exam',
            compact(
                'classes',
                'subjects',
                'teachers'
            )
        );
    }

    // ==========================
    // STORE EXAM
    // ==========================
    public function store_exam(Request $request)
    {
        $request->validate([
            'exam_type'      => 'required',
            'class_id'       => 'required',
            'subject_id'     => 'required|numeric',
            'exam_date'      => 'required',
            'start_time'     => 'required',
            'end_time'       => 'required',
            'total_marks'    => 'required',
            'passing_marks'  => 'required',
            'room_no'        => 'required',
            'invigilator_id' => 'required',
        ]);

        DB::table('schedule_exam')->insert([
            'exam_type'      => $request->exam_type,
            'class_id'       => $request->class_id,
            'subject_id'     => $request->subject_id,
            'exam_date'      => $request->exam_date,
            'start_time'     => $request->start_time,
            'end_time'       => $request->end_time,
            'total_marks'    => $request->total_marks,
            'passing_marks'  => $request->passing_marks,
            'room_no'        => $request->room_no,
            'invigilator_id' => $request->invigilator_id,
            'instructions'   => $request->instructions,
            'status'         => $request->status ?? 'Upcoming',
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        return redirect('/exam')
            ->with('success', 'Exam Scheduled Successfully');
    }

    // ==========================
    // VIEW EXAM
    // ==========================
    public function view_exam($id)
    {
        $exam = DB::table('schedule_exam')
            ->leftJoin('add_class', 'schedule_exam.class_id', '=', 'add_class.id')
            ->leftJoin('subject', 'schedule_exam.subject_id', '=', 'subject.id')
            ->leftJoin('add_teacher', 'schedule_exam.invigilator_id', '=', 'add_teacher.id')
            ->select(
                'schedule_exam.*',
                'add_class.class_name',
                'subject.subject_name',
                'add_teacher.name as invigilator_name'
            )
            ->where('schedule_exam.id', $id)
            ->first();

        return view('admin.exams.view_exam', compact('exam'));
    }

    // ==========================
    // EDIT EXAM
    // ==========================
    public function edit_exam($id)
    {
        $exam = DB::table('schedule_exam')
            ->where('id', $id)
            ->first();

        $classes = DB::table('add_class')->get();
        $subjects = DB::table('subject')->get();
        $teachers = DB::table('add_teacher')->get();

        return view(
            'admin.exams.edit_exam',
            compact(
                'exam',
                'classes',
                'subjects',
                'teachers'
            )
        );
    }

    // ==========================
    // UPDATE EXAM
    // ==========================
    public function update_exam(Request $request, $id)
    {
        $request->validate([
            'exam_type'      => 'required',
            'class_id'       => 'required',
            'subject_id'     => 'required|numeric',
            'exam_date'      => 'required',
        ]);

        DB::table('schedule_exam')
            ->where('id', $id)
            ->update([
                'exam_type'      => $request->exam_type,
                'class_id'       => $request->class_id,
                'subject_id'     => $request->subject_id,
                'exam_date'      => $request->exam_date,
                'start_time'     => $request->start_time,
                'end_time'       => $request->end_time,
                'total_marks'    => $request->total_marks,
                'passing_marks'  => $request->passing_marks,
                'room_no'        => $request->room_no,
                'invigilator_id' => $request->invigilator_id,
                'instructions'   => $request->instructions,
                'status'         => $request->status,
                'updated_at'     => now(),
            ]);

        return redirect('/exam')
            ->with('success', 'Exam Updated Successfully');
    }

    // ==========================
    // DELETE EXAM
    // ==========================
    public function delete_exam($id)
    {
        DB::table('schedule_exam')
            ->where('id', $id)
            ->delete();

        return redirect('/exam')
            ->with('success', 'Exam Deleted Successfully');
    }
}