<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeesController extends Controller
{
    // ==========================
    // Fee List
    // ==========================
public function fees()
{
    $fees = DB::table('fees')
        ->leftJoin('add_student', 'fees.student_id', '=', 'add_student.id')
        ->leftJoin('add_class', 'fees.class', '=', 'add_class.id')
        ->select(
            'fees.*',
            'add_student.name',
            'add_student.roll_no',
            'add_class.class_name'
        )
        ->orderBy('fees.id', 'DESC')
        ->get();

    $totalCollection = DB::table('fees')->sum('paid_amount');

    $paidStudents = DB::table('fees')
        ->where('status', 'Paid')
        ->count();

    $pendingFees = DB::table('fees')
        ->where('status', 'Pending')
        ->count();

    $totalRecords = DB::table('fees')->count();

    return view('admin.fees.fees', compact(
        'fees',
        'totalCollection',
        'paidStudents',
        'pendingFees',
        'totalRecords'
    ));
}

    // ==========================
    // Collect Fee Page
    // ==========================
    public function collect_fee()
    {
        $students = DB::table('add_student')
            ->orderBy('name')
            ->get();

        $classes = DB::table('add_class')
            ->orderBy('class_name')
            ->get();

        return view('admin.fees.collect_fee', compact('students', 'classes'));
    }

    // ==========================
    // Store Fee
    // ==========================
    public function store(Request $request)
    {
        $request->validate([
            'student_id'      => 'required',
            'class'           => 'required',
            'fee_month'       => 'required',
            'due_date'        => 'required|date',
            'total_fee'       => 'required|numeric',
            'discount'        => 'nullable|numeric',
            'fine'            => 'nullable|numeric',
            'paid_amount'     => 'required|numeric',
            'payment_method'  => 'required',
            'payment_date'    => 'required|date',
            'receipt_image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $discount = $request->discount ?? 0;
        $fine = $request->fine ?? 0;

        $netFee = ($request->total_fee - $discount) + $fine;
        $remaining = $netFee - $request->paid_amount;

        if ($remaining <= 0) {
            $status = "Paid";
            $remaining = 0;
        } elseif ($request->paid_amount == 0) {
            $status = "Pending";
        } else {
            $status = "Partial";
        }

        $receiptImage = null;

        if ($request->hasFile('receipt_image')) {

            $file = $request->file('receipt_image');

            $receiptImage = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('receipt_images'), $receiptImage);
        }

        DB::table('fees')->insert([

            'student_id'       => $request->student_id,
            'class'            => $request->class,
            'fee_month'        => $request->fee_month,
            'due_date'         => $request->due_date,
            'total_fee'        => $request->total_fee,
            'discount'         => $discount,
            'fine'             => $fine,
            'paid_amount'      => $request->paid_amount,
            'remaining_amount' => $remaining,
            'payment_method'   => $request->payment_method,
            'payment_date'     => $request->payment_date,
            'status'           => $status,
            'receipt_no'       => 'REC-' . time(),
            'receipt_image'    => $receiptImage,
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        return redirect('/fees')->with('success', 'Fee Collected Successfully');
    }

    // ==========================
    // View Fee
    // ==========================
 public function view_fee($id)
{
    $fee = DB::table('fees')
        ->leftJoin('add_student', 'fees.student_id', '=', 'add_student.id')
        ->leftJoin('add_class', 'fees.class', '=', 'add_class.id')
        ->select(
            'fees.*',
            'add_student.name',
            'add_student.roll_no',
            'add_student.phone',
            'add_student.father_name',
            'add_class.class_name'
        )
        ->where('fees.id', $id)
        ->first();

    return view('admin.fees.view_fee', compact('fee'));
}

    // ==========================
    // Edit Fee
    // ==========================
public function edit_fee($id)
{
    $fee = DB::table('fees')->where('id', $id)->first();

    $students = DB::table('add_student')
        ->orderBy('name')
        ->get();

    $classes = DB::table('add_class')
        ->orderBy('class_name')
        ->get();

    return view('admin.fees.edit_fee', compact(
        'fee',
        'students',
        'classes'
    ));
}

    // ==========================
    // Update Fee
    // ==========================
public function update_fee(Request $request, $id)
{
    $request->validate([
        'student_id'     => 'required',
        'class'          => 'required',
        'fee_month'      => 'required',
        'due_date'       => 'required|date',
        'total_fee'      => 'required|numeric',
        'discount'       => 'nullable|numeric',
        'fine'           => 'nullable|numeric',
        'paid_amount'    => 'required|numeric',
        'payment_method' => 'required',
        'payment_date'   => 'required|date',
        'status'         => 'required',
        'receipt_image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Old Receipt
    $receiptImage = DB::table('fees')
        ->where('id', $id)
        ->value('receipt_image');

    // Upload New Receipt
    if ($request->hasFile('receipt_image')) {

        if ($receiptImage && file_exists(public_path('receipt_images/'.$receiptImage))) {
            unlink(public_path('receipt_images/'.$receiptImage));
        }

        $file = $request->file('receipt_image');

        $receiptImage = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('receipt_images'), $receiptImage);
    }

    $discount = $request->discount ?? 0;
    $fine = $request->fine ?? 0;

    $remaining = ($request->total_fee - $discount + $fine) - $request->paid_amount;

    if($remaining < 0){
        $remaining = 0;
    }

    DB::table('fees')
        ->where('id', $id)
        ->update([

            'student_id'       => $request->student_id,
            'class'            => $request->class,
            'fee_month'        => $request->fee_month,
            'due_date'         => $request->due_date,
            'total_fee'        => $request->total_fee,
            'discount'         => $discount,
            'fine'             => $fine,
            'paid_amount'      => $request->paid_amount,
            'remaining_amount' => $remaining,
            'payment_method'   => $request->payment_method,
            'payment_date'     => $request->payment_date,
            'status'           => $request->status,
            'receipt_no'       => $request->receipt_no,
            'receipt_image'    => $receiptImage,
            'updated_at'       => now(),

        ]);

    return redirect('/fees')->with('success','Fee Updated Successfully');
}

    // ==========================
    // Delete Fee
    // ==========================
    public function delete_fee($id)
    {
        $fee = DB::table('fees')->where('id', $id)->first();

        if ($fee && $fee->receipt_image) {

            $path = public_path('receipt_images/'.$fee->receipt_image);

            if (file_exists($path)) {
                unlink($path);
            }
        }

        DB::table('fees')->where('id', $id)->delete();

        return redirect('/fees')->with('success', 'Fee Deleted Successfully');
    }
}