<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{

// SUBJECT PAGE

public function subject()
{

$subjects = DB::table('subject')

->leftJoin(
'add_class',
'subject.class_id',
'=',
'add_class.id'
)

->select(
'subject.*',
'add_class.class_name'
)

->orderBy(
'subject.id',
'desc'
)

->get();


$totalSubjects =
DB::table('subject')
->count();


$activeSubjects =
DB::table('subject')

->where(
'status',
'Active'
)

->count();


$inactiveSubjects =
DB::table('subject')

->where(
'status',
'Inactive'
)

->count();


$totalClasses =
DB::table('add_class')
->count();


return view(
'admin.subjects.subject',

compact(

'subjects',

'totalSubjects',

'activeSubjects',

'inactiveSubjects',

'totalClasses'

)

);

}



// CREATE SUBJECT

public function create_subject()
{

$classes =
DB::table('add_class')
->get();


return view(
'admin.subjects.create_subject',

compact(
'classes'
)

);

}



// STORE SUBJECT

public function store_subject(
Request $request
){

$request->validate([

'subject_name'=>'required',

'subject_code'=>'required',

'class_id'=>'required',

'status'=>'required'

]);


DB::table('subject')

->insert([

'subject_name'
=>$request->subject_name,

'subject_code'
=>$request->subject_code,

'class_id'
=>$request->class_id,

'status'
=>$request->status,

'created_at'
=>now(),

'updated_at'
=>now()

]);


return redirect('/subject')

->with(
'success',
'Subject Added Successfully'
);

}



// VIEW SUBJECT

public function view_subject($id)
{

$subject =

DB::table('subject')

->leftJoin(

'add_class',

'subject.class_id',

'=',

'add_class.id'

)

->select(

'subject.*',

'add_class.class_name'

)

->where(

'subject.id',

$id

)

->first();


return view(
'admin.subjects.view_subject',

compact(
'subject'
)

);

}



// EDIT SUBJECT

public function edit_subject($id)
{

$subject =

DB::table('subject')

->where(
'id',
$id
)

->first();


$classes =

DB::table('add_class')

->get();


return view(

'admin.subjects.edit_subject',

compact(

'subject',

'classes'

)

);

}



// UPDATE SUBJECT

public function update_subject(
Request $request,
$id
){

$request->validate([

'subject_name'=>'required',

'subject_code'=>'required',

'class_id'=>'required',

'status'=>'required'

]);


DB::table('subject')

->where(
'id',
$id
)

->update([

'subject_name'
=>$request->subject_name,

'subject_code'
=>$request->subject_code,

'class_id'
=>$request->class_id,

'status'
=>$request->status,

'updated_at'
=>now()

]);


return redirect('/subject')

->with(
'success',
'Subject Updated Successfully'
);

}



// DELETE SUBJECT

public function delete_subject($id)
{

DB::table('subject')

->where(
'id',
$id
)

->delete();


return redirect('/subject')

->with(
'success',
'Subject Deleted Successfully'
);

}

}