<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Students</title>
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
    color:#0f172a;
}

.add-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:12px;
    font-weight:600;
}

.activity{
    background:#fff;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    margin-bottom:25px;
}

.activity h3{
    margin-bottom:20px;
    color:#0f172a;
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
    margin-bottom:8px;
    font-weight:600;
    color:#0f172a;
}

.form-group input,
.form-group textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    background:#f8fafc;
}

textarea{
    resize:none;
    min-height:120px;
}

.full-width{
    grid-column:1/-1;
}

.text-center{
    text-align:center;
}

.photo-box img{
    width:200px;
    height:200px;
    object-fit:cover;
    border-radius:15px;
    border:3px solid #2563eb;
}

.save-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    border:none;
    padding:14px 30px;
    border-radius:12px;
    font-size:15px;
    font-weight:600;
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

    <div class="topbar">

        <h2>
            <i class="fas fa-user-graduate"></i>
            Student Details
        </h2>

        <a href="{{ url('/student') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>

    </div>

    <!-- Basic Information -->

    <div class="activity">

        <h3>Basic Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Student Name</label>
                <input type="text" value="{{ $student->name }}" readonly>
            </div>

            <div class="form-group">
                <label>Roll No</label>
                <input type="text" value="{{ $student->roll_no }}" readonly>
            </div>

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" value="{{ $student->dob }}" readonly>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <input type="text" value="{{ $student->gender }}" readonly>
            </div>

        </div>

    </div>

    <!-- Academic Information -->

    <div class="activity">

        <h3>Academic Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Class</label>
                <input type="text" value="{{ $student->class }}" readonly>
            </div>

            <div class="form-group">
                <label>Section</label>
                <input type="text" value="{{ $student->section }}" readonly>
            </div>

            <div class="form-group">
                <label>Admission Date</label>
                <input type="text" value="{{ $student->admission_date }}" readonly>
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" value="{{ $student->status }}" readonly>
            </div>

        </div>

    </div>

    <!-- Parent Information -->

    <div class="activity">

        <h3>Parent Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Father Name</label>
                <input type="text" value="{{ $student->father_name }}" readonly>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" value="{{ $student->phone }}" readonly>
            </div>

            <div class="form-group full-width">
                <label>Address</label>
                <textarea readonly>{{ $student->address }}</textarea>
            </div>

        </div>

    </div>

    <!-- Photo -->

    <div class="activity">

        <h3>Student Photo</h3>

        <div class="text-center photo-box">

            @if($student->photo)

                <img src="{{ asset('students/'.$student->photo) }}">

            @else

                <p>No Photo Available</p>

            @endif

        </div>

    </div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>

