<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Subject</title>
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
/* HEADER */

.topbar{

background:#fff;

padding:20px 25px;

border-radius:20px;

display:flex;

justify-content:space-between;

align-items:center;

box-shadow:0 10px 25px rgba(0,0,0,.08);

}

.back-btn{

background:var(--primary);

color:#fff;

padding:12px 20px;

border-radius:10px;

text-decoration:none;

}

/* FORM */

.form-box{

margin-top:30px;

background:#fff;

padding:40px;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

}

.form-title{

margin-bottom:30px;

color:#0f172a;

}

.form-grid{

display:grid;

grid-template-columns:repeat(2,1fr);

gap:20px;

}

.input-group{

display:flex;

flex-direction:column;

}

.input-group label{

margin-bottom:10px;

font-weight:600;

}

.input-group input,
.input-group select{

padding:14px;

border:1px solid #dbe3ea;

border-radius:10px;

background:#fff;

outline:none;

}

.input-group input:focus,
.input-group select:focus{

border-color:#2563eb;

}

.full{
grid-column:1/-1;
}

/* BUTTON */

.submit-btn{

margin-top:30px;

width:100%;

padding:16px;

background:#2563eb;

color:white;

border:none;

border-radius:12px;

font-size:17px;

cursor:pointer;

}

.submit-btn:hover{
background:#1d4ed8;
}

/* ALERT */

.success{

background:#dcfce7;

color:#15803d;

padding:15px;

border-radius:10px;

margin-bottom:20px;

}

.error{

background:#fee2e2;

color:#dc2626;

padding:15px;

border-radius:10px;

margin-bottom:20px;

}

@media(max-width:768px){

.form-grid{
grid-template-columns:1fr;
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

<!-- TOPBAR -->

<div class="topbar">

<h2>

<i class="fas fa-book"></i>

Create Subject

</h2>

<a
href="{{ url('/subject') }}"
class="back-btn">

<i class="fas fa-arrow-left"></i>

Back

</a>

</div>

<!-- FORM -->

<div class="form-box">

@if(session('success'))

<div class="success">

{{ session('success') }}

</div>

@endif


@if($errors->any())

<div class="error">

@foreach($errors->all() as $error)

<div>{{ $error }}</div>

@endforeach

</div>

@endif


<h3 class="form-title">

Add New Subject

</h3>


<form
action="{{ url('/store_subject') }}"
method="POST">

@csrf


<div class="form-grid">

<!-- SUBJECT NAME -->

<div class="input-group">

<label>

Subject Name

</label>

<input
type="text"

name="subject_name"

value="{{ old('subject_name') }}"

placeholder="Enter Subject Name"

required>

</div>


<!-- SUBJECT CODE -->

<div class="input-group">

<label>

Subject Code

</label>

<input
type="text"

name="subject_code"

value="{{ old('subject_code') }}"

placeholder="Enter Subject Code"

required>

</div>


<!-- CLASS -->

<div class="input-group">

<label>

Select Class

</label>

<select
name="class_id"

required>

<option value="">

Choose Class

</option>

@foreach($classes as $class)

<option

value="{{ $class->id }}"

{{ old('class_id')==$class->id ? 'selected':'' }}>

{{ $class->class_name }}

</option>

@endforeach

</select>

</div>


<!-- STATUS -->

<div class="input-group">

<label>

Status

</label>

<select
name="status"

required>

<option value="">

Choose Status

</option>

<option
value="Active"

{{ old('status')=='Active'
?'selected':'' }}>

Active

</option>

<option
value="Inactive"

{{ old('status')=='Inactive'
?'selected':'' }}>

Inactive

</option>

</select>

</div>

</div>


<button
type="submit"

class="submit-btn">

<i class="fas fa-save"></i>

Save Subject

</button>

</form>

</div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>