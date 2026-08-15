<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'number' => 'required',
        'admin_code' => 'required'
    ]);

    if ($request->admin_code != 'QWERTY') {

        return back()->with('error', 'Invalid Admin Secret Code');

    }

    DB::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'number' => $request->number,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Account Created Successfully');
}


 public function postLogin(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    // ADMIN LOGIN
    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {

        session([
            'role' => 'admin',
            'access' => 'full'
        ]);

        return redirect('/dashboard')
            ->with('success', 'Admin Login Successfully');
    }

    // TEACHER LOGIN
    $teacher = DB::table('add_teacher')
        ->where('email', $request->email)
        ->first();

    if ($teacher && Hash::check($request->password, $teacher->password)) {

        session([
            'teacher_id' => $teacher->id,
            'teacher_name' => $teacher->name,
            'role' => $teacher->role,
            'access' => $teacher->access,
        ]);

        // Attendance Only Teacher
        if ($teacher->access == 'attendance') {
            return redirect('/attendence');
        }

        // Full Access Teacher
        return redirect('/dashboard');
    }

    return redirect()->back()
        ->with('error', 'Invalid Email or Password');
}

  // Logout Function
public function logout()
{
    Auth::logout();

    session()->flush();

    return redirect('/login')
        ->with('success', 'Logout Successfully');
}
public function dashboard()
{
    return view('admin.dashboard', [

        'students' => DB::table('add_student')->count(),

        'teachers' => DB::table('add_teacher')->count(),

        'classes' => DB::table('add_class')->count(),

        'subjects' => DB::table('subject')->count(),

        'fees' => DB::table('fees')
            ->whereDate('payment_date', today())
            ->sum('paid_amount'),

        'pendingFees' => DB::table('fees')
            ->where('status', 'Pending')
            ->sum('remaining_amount'),

        'admissions' => DB::table('admissions')->count(),

        'exams' => DB::table('schedule_exam')->count(),

        'attendancePresent' => DB::table('attendance')
            ->whereDate('attendance_date', today())
            ->where('status', 'Present')
            ->count(),

        'attendanceAbsent' => DB::table('attendance')
            ->whereDate('attendance_date', today())
            ->where('status', 'Absent')
            ->count(),

        'recentStudents' => DB::table('add_student')
                    ->latest()
                    ->take(5)
                    ->get(),

        'recentMessages' => DB::table('contacts')
                    ->latest()
                    ->take(5)
                    ->get(),

        'notices' => DB::table('publish_notice')
                    ->latest()
                    ->take(5)
                    ->get(),
    ]);
}
public function attendence()
{
    // ADMIN
    if(session('role') == 'admin'){

        $teachers = DB::table('add_teacher')->get();

        $attendance = [];

        foreach($teachers as $teacher){

            $record = DB::table('attendance')
                ->where('teacher_id', $teacher->id)
                ->whereDate('attendance_date', today())
                ->first();

            $attendance[] = [
                'name' => $teacher->name,
                'check_in' => $record->check_in ?? '--',
                'check_out' => $record->check_out ?? '--',
                'status' => $record ? $record->status : 'Absent'
            ];
        }

        return view('admin.attendence', compact('attendance'));
    }

    // TEACHER
    $attendance = DB::table('attendance')
        ->where('teacher_id', session('teacher_id'))
        ->orderBy('attendance_date','desc')
        ->get();

    return view('admin.attendence', compact('attendance'));
}
  public function checkIn()
{
    $teacherId = session('teacher_id');

    if (!$teacherId) {
        return back()->with('error', 'Teacher Login Required');
    }

    $today = date('Y-m-d');

    $exists = DB::table('attendance')
        ->where('teacher_id', $teacherId)
        ->where('attendance_date', $today)
        ->first();

    if (!$exists) {

        DB::table('attendance')->insert([
            'teacher_id' => $teacherId,
            'attendance_date' => $today,
            'check_in' => date('H:i:s'),
            'status' => 'Present',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return back()->with('success', 'Checked In Successfully');
}

public function checkOut()
{
    $teacherId = session('teacher_id');

    DB::table('attendance')
        ->where('teacher_id', $teacherId)
        ->where('attendance_date', date('Y-m-d'))
        ->update([
            'check_out' => date('H:i:s'),
            'updated_at' => now()
        ]);

    return back()->with('success', 'Checked Out Successfully');
}
  public function setting()
  {
    return view('admin.setting');
  }
  public function contact_messages()
{
    $messages = DB::table('contacts')
                    ->orderBy('id','DESC')
                    ->get();

    $total = DB::table('contacts')->count();

    $today = DB::table('contacts')
                ->whereDate('created_at', today())
                ->count();

    $read = DB::table('contacts')
                ->where('status', 'Read')
                ->count();

    $unread = DB::table('contacts')
                ->where('status', 'Unread')
                ->count();

    return view('admin.contact.contacts', compact(
        'messages',
        'total',
        'today',
        'read',
        'unread'
    ));
}
public function viewContact($id)
{
    DB::table('contacts')
        ->where('id', $id)
        ->update([
            'status' => 'Read'
        ]);

    $message = DB::table('contacts')
        ->where('id', $id)
        ->first();

    return view('admin.contact.view_contact', compact('message'));
}
public function admissions()
{
    $applications = DB::table('admissions')
        ->orderBy('id', 'DESC')
        ->get();

    $total = DB::table('admissions')->count();

    $today = DB::table('admissions')
        ->whereDate('created_at', today())
        ->count();

    $approved = DB::table('admissions')
        ->where('status', 'Approved')
        ->count();

    $pending = DB::table('admissions')
        ->where('status', 'Pending')
        ->count();

    return view('admin.admission.admissions', compact(
        'applications',
        'total',
        'today',
        'approved',
        'pending'
    ));
}
public function viewAdmission($id)
{
    $application = DB::table('admissions')
                    ->where('id',$id)
                    ->first();

    return view('admin.admission.view_admission', compact('application'));
}
public function deleteAdmission($id)
{
    DB::table('admissions')
        ->where('id',$id)
        ->delete();

    return redirect()->back()->with('success','Application deleted successfully.');
}
public function approveAdmission($id)
{
    DB::table('admissions')
        ->where('id', $id)
        ->update([
            'status' => 'Approved'
        ]);

    return redirect()->back()->with('success', 'Application Approved Successfully.');
}
public function rejectAdmission($id)
{
    DB::table('admissions')
        ->where('id', $id)
        ->update([
            'status' => 'Rejected'
        ]);

    return redirect()->back()->with('success', 'Application Rejected Successfully.');
}
}
 