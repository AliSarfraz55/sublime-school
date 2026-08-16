<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Subjects</title>
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

display:flex;

justify-content:space-between;

align-items:center;

box-shadow:0 10px 25px rgba(0,0,0,.08);

margin-bottom:30px;

}

.topbar h2{
color:var(--secondary);
}

.add-btn{

background:var(--primary);

color:white;

padding:12px 22px;

border-radius:12px;

text-decoration:none;

}

/* SECTION */

.activity{

background:#fff;

padding:30px;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

margin-bottom:25px;

}

.activity h3{

margin-bottom:20px;

color:var(--secondary);

}

/* GRID */

.form-grid{

display:grid;

grid-template-columns:repeat(2,1fr);

gap:20px;

}

.form-group{

display:flex;

flex-direction:column;

}

label{

font-weight:600;

margin-bottom:8px;

color:var(--secondary);

}

input{

padding:14px;

border:1px solid #e2e8f0;

border-radius:12px;

background:#f8fafc;

}

.full-width{
grid-column:1/-1;
}

/* STATUS */

.status{

padding:14px;

border-radius:12px;

text-align:center;

font-weight:700;

}

.active{

background:#22c55e;

color:white;

}

.inactive{

background:#ef4444;

color:white;

}

/* Responsive */

@media(max-width:768px){

.form-grid{
grid-template-columns:1fr;
}

}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent; /* Yeh blue flash ko khatam kar dega */
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

<i class="fas fa-book-open"></i>

Subject Details

</h2>

<a
href="{{ url('/subject') }}"
class="add-btn">

<i class="fas fa-arrow-left"></i>

Back

</a>

</div>

<!-- SUBJECT INFO -->

<div class="activity">

<h3>

Subject Information

</h3>

<div class="form-grid">

<!-- ID -->

<div class="form-group">

<label>

Subject ID

</label>

<input
type="text"

value="{{ $subject->id }}"

readonly>

</div>

<!-- NAME -->

<div class="form-group">

<label>

Subject Name

</label>

<input
type="text"

value="{{ $subject->subject_name }}"

readonly>

</div>

<!-- CODE -->

<div class="form-group">

<label>

Subject Code

</label>

<input
type="text"

value="{{ $subject->subject_code }}"

readonly>

</div>

<!-- CLASS -->

<div class="form-group">

<label>

Class

</label>

<input
type="text"

value="{{ $subject->class->class_name ?? 'N/A' }}"

readonly>

</div>

<!-- STATUS -->

<div class="form-group full-width">

<label>

Status

</label>

<div
class="status
{{ $subject->status=='Active'
?'active':'inactive' }}">

{{ $subject->status }}

</div>

</div>

<!-- CREATED -->

<div class="form-group">

<label>

Created At

</label>

<input
type="text"

value="{{ date('d M Y',strtotime($subject->created_at)) }}"

readonly>

</div>

<!-- UPDATED -->

<div class="form-group">

<label>

Updated At

</label>

<input
type="text"

value="{{ date('d M Y',strtotime($subject->updated_at)) }}"

readonly>

</div>

</div>

</div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>