<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Subject</title>
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

:root{
    --primary:#2563eb;
    --secondary:#0f172a;
    --accent:#f59e0b;
    --bg:#f8fafc;
    --white:#ffffff;
    --text:#334155;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:var(--bg);
    color:var(--text);
    overflow-x:hidden;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

section{
    padding:100px 0;
}   

/* Layout */

.wrapper{
    display:flex;
    min-height:100vh;
    background:#f8fafc;
}


/* Main */

.main{
    
    flex:1;
    padding:30px;
    width:100%;
    padding:30px;
}

/* TOPBAR */

.topbar{
background:#fff;
padding:20px 25px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.08);

display:flex;

justify-content:space-between;

align-items:center;

margin-bottom:30px;
}

.topbar h2{
color:var(--secondary);
}

.back-btn{

background:var(--primary);

color:#fff;

padding:12px 20px;

border-radius:10px;

text-decoration:none;

}

/* FORM */

.activity{

background:#fff;

padding:30px;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

}

.activity h3{

margin-bottom:20px;

color:var(--secondary);

}

.form-grid{

display:grid;

grid-template-columns:repeat(2,1fr);

gap:20px;

}

.form-group{

display:flex;

flex-direction:column;

}

.form-group label{

margin-bottom:10px;

font-weight:600;

}

input,
select{

padding:14px;

border:1px solid #e2e8f0;

border-radius:10px;

background:#f8fafc;

outline:none;

}

input:focus,
select:focus{

border-color:var(--primary);

}

/* BUTTONS */

.btn-group{

margin-top:25px;

text-align:center;

}

.save-btn{

background:var(--primary);

color:white;

border:none;

padding:14px 35px;

border-radius:12px;

cursor:pointer;

font-size:16px;

}

.cancel-btn{

background:#ef4444;

color:white;

padding:14px 35px;

border-radius:12px;

text-decoration:none;

margin-left:10px;

}

@media(max-width:768px){

.form-grid{
grid-template-columns:1fr;
}

.cancel-btn{
display:block;
margin-top:10px;
}

}

</style>

</head>

<body>

@include('admin.includes.aos')
@include('admin.includes.navbar')

<div class="wrapper">

@include('admin.includes.sidebar')

<div class="main">

<!-- HEADER -->

<div class="topbar">

<h2>

<i class="fas fa-book-open"></i>

Edit Subject

</h2>

<a
href="{{ url('/subject') }}"
class="back-btn">

<i class="fas fa-arrow-left"></i>

Back

</a>

</div>

<!-- FORM -->

<form
action="{{ url('/update_subject/'.$subject->id) }}"
method="POST">

@csrf

<div class="activity">

<h3>

Subject Information

</h3>

<div class="form-grid">

<!-- Subject Name -->

<div class="form-group">

<label>

Subject Name

</label>

<input
type="text"
name="subject_name"

value="{{ $subject->subject_name }}">

</div>

<!-- Subject Code -->

<div class="form-group">

<label>

Subject Code

</label>

<input
type="text"
name="subject_code"

value="{{ $subject->subject_code }}">

</div>

<!-- Class -->

<div class="form-group">

<label>

Select Class

</label>

<select
name="class_id">

@foreach($classes as $class)

<option
value="{{ $class->id }}"

{{ $subject->class_id==$class->id ? 'selected':'' }}>

{{ $class->class_name }}

</option>

@endforeach

</select>

</div>

<!-- Status -->

<div class="form-group">

<label>

Status

</label>

<select
name="status">

<option
value="Active"

{{ $subject->status=='Active'
? 'selected':'' }}>

Active

</option>

<option
value="Inactive"

{{ $subject->status=='Inactive'
? 'selected':'' }}>

Inactive

</option>

</select>

</div>

</div>

</div>

<!-- BUTTON -->

<div class="activity btn-group">

<button
type="submit"
class="save-btn">

<i class="fas fa-save"></i>

Update Subject

</button>

<a
href="{{ url('/subject') }}"
class="cancel-btn">

Cancel

</a>

</div>

</form>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>