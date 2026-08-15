<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    // ==========================
    // RESULT LIST
    // ==========================
    public function result()
    {
        $results = DB::table('publish_result')
            ->leftJoin('schedule_exam', 'publish_result.exam_id', '=', 'schedule_exam.id')
            ->leftJoin('add_class', 'publish_result.class_id', '=', 'add_class.id')
            ->select(
                'publish_result.*',
                'schedule_exam.exam_type',
                'add_class.class_name'
            )
            ->orderBy('publish_result.id', 'desc')
            ->get();

        $totalResults = DB::table('publish_result')->count();

        $passedStudents = DB::table('publish_result')
            ->where('status', 'Pass')
            ->count();

        $failedStudents = DB::table('publish_result')
            ->where('status', 'Fail')
            ->count();

        $passPercentage = 0;

        if ($totalResults > 0) {
            $passPercentage = round(($passedStudents / $totalResults) * 100, 2);
        }

        return view('admin.results.result', compact(
            'results',
            'totalResults',
            'passedStudents',
            'failedStudents',
            'passPercentage'
        ));
    }

    // ==========================
    // PUBLISH RESULT PAGE
    // ==========================
    public function publish_result()
    {
        $exams = DB::table('schedule_exam')->get();

        $classes = DB::table('add_class')->get();

        $students = DB::table('add_student')->get();

        return view('admin.results.publish_result', compact(
            'exams',
            'classes',
            'students'
        ));
    }

    // ==========================
    // STORE RESULT
    // ==========================
    public function store_result(Request $request)
    {
        $request->validate([
            'exam_id' => 'required',
            'class_id' => 'required',
            'section' => 'required',
            'publish_date' => 'required',
            'student_id' => 'required|array',
            'total_marks' => 'required|array',
            'obtained_marks' => 'required|array',
        ]);

        foreach ($request->student_id as $key => $studentId) {

            $student = DB::table('add_student')
                ->where('id', $studentId)
                ->first();

            if (!$student) {
                continue;
            }

            $total = (int)$request->total_marks[$key];
            $obtained = (int)$request->obtained_marks[$key];

            $percentage = 0;

            if ($total > 0) {
                $percentage = round(($obtained * 100) / $total, 2);
            }

            // Grade
            if ($percentage >= 90) {
                $grade = "A+";
            } elseif ($percentage >= 80) {
                $grade = "A";
            } elseif ($percentage >= 70) {
                $grade = "B";
            } elseif ($percentage >= 60) {
                $grade = "C";
            } elseif ($percentage >= 50) {
                $grade = "D";
            } else {
                $grade = "F";
            }

            // Status
            $status = ($percentage >= 40) ? "Pass" : "Fail";

            DB::table('publish_result')->insert([

                'exam_id' => $request->exam_id,

                'class_id' => $request->class_id,

                'student_id' => $student->id,

                'roll_no' => $student->roll_no,

                'student_name' => $student->name,

                'section' => $request->section,

                'publish_date' => $request->publish_date,

                'remarks' => $request->remarks ?: 'No Remarks',

                'total_marks' => $total,

                'obtained_marks' => $obtained,

                'percentage' => $percentage,

                'grade' => $grade,

                'status' => $status,

                'created_at' => now(),

                'updated_at' => now(),
            ]);
        }

        return redirect('/result')
            ->with('success', 'Results Published Successfully');
    }
        // ==========================
    // VIEW RESULT
    // ==========================
    public function view_result($id)
    {
        $result = DB::table('publish_result')
            ->leftJoin('schedule_exam', 'publish_result.exam_id', '=', 'schedule_exam.id')
            ->leftJoin('add_class', 'publish_result.class_id', '=', 'add_class.id')
            ->select(
                'publish_result.*',
                'schedule_exam.exam_type',
                'add_class.class_name'
            )
            ->where('publish_result.id', $id)
            ->first();

        if (!$result) {
            return redirect('/result')->with('error', 'Result Not Found');
        }

        $students = DB::table('publish_result')
            ->where('id', $id)
            ->get();

        return view('admin.results.view_result', compact(
            'result',
            'students'
        ));
    }

    // ==========================
    // EDIT RESULT
    // ==========================
    public function edit_result($id)
    {
        $result = DB::table('publish_result')
            ->where('id', $id)
            ->first();

        if (!$result) {
            return redirect('/result')->with('error', 'Result Not Found');
        }

        $exams = DB::table('schedule_exam')->get();

        $classes = DB::table('add_class')->get();

        $details = DB::table('publish_result')
            ->where('id', $id)
            ->get();

        return view('admin.results.edit_result', compact(
            'result',
            'details',
            'exams',
            'classes'
        ));
    }

    // ==========================
    // UPDATE RESULT
    // ==========================
   public function update_result(Request $request, $id)
{
    $request->validate([
        'exam_id'      => 'required',
        'class_id'     => 'required',
        'section'      => 'required',
        'publish_date' => 'required',
    ]);

    foreach ($request->detail_id as $key => $detailId) {

        $percentage = 0;

        if ($request->total_marks[$key] > 0) {
            $percentage = round(
                ($request->obtained_marks[$key] * 100) /
                $request->total_marks[$key],
                2
            );
        }

        DB::table('publish_result')
            ->where('id', $detailId)
            ->update([

                'exam_id'        => $request->exam_id,
                'class_id'       => $request->class_id,
                'section'        => $request->section,
                'publish_date'   => $request->publish_date,
                'remarks'        => $request->remarks,

                'total_marks'    => $request->total_marks[$key],
                'obtained_marks' => $request->obtained_marks[$key],

                'percentage'     => $percentage,
                'grade'          => $request->grade[$key],
                'status'         => $request->status[$key],

                'updated_at'     => now(),
            ]);
    }

    return redirect('/result')
            ->with('success','Result Updated Successfully');
}

    // ==========================
    // DELETE RESULT
    // ==========================
    public function delete_result($id)
    {
        DB::table('publish_result')
            ->where('id', $id)
            ->delete();

        return redirect('/result')
            ->with('success', 'Result Deleted Successfully');
    }
}