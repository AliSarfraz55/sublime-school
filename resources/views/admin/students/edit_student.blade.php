<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Students</title>
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

/* TOP BAR */
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

/* FORM BOX */
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
.form-group select,
.form-group textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    background:#f8fafc;
    outline:none;
}

textarea{
    min-height:120px;
    resize:none;
}

.full-width{
    grid-column:1/-1;
}

/* BUTTONS */
.btn-group{
    text-align:center;
}

.save-btn{
    background:#2563eb;
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:12px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
}

.cancel-btn{
    background:#ef4444;
    color:#fff;
    padding:14px 30px;
    border-radius:12px;
    text-decoration:none;
    margin-left:10px;
    display:inline-block;
}

.photo-preview img{
    width:150px;
    height:150px;
    object-fit:cover;
    border-radius:15px;
    border:3px solid #2563eb;
    margin-bottom:10px;
}

@media(max-width:768px){
    .form-grid{
        grid-template-columns:1fr;
    }

    .cancel-btn{
        margin-top:10px;
        display:block;
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

    <!-- TOP BAR -->
    <div class="topbar">
        <h2>
            <i class="fas fa-user-edit"></i>
            Edit Student
        </h2>

        <a href="{{ url('/student') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>
    </div>

    <!-- FORM -->
    <form action="/update_student/{{ $student->id }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

        <!-- BASIC INFO -->
        <div class="activity">

            <h3>Basic Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" name="name" value="{{ $student->name }}">
                </div>

                <div class="form-group">
                    <label>Roll No</label>
                    <input type="text" name="roll_no" value="{{ $student->roll_no }}">
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" value="{{ $student->dob }}">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="Male" {{ $student->gender=='Male'?'selected':'' }}>Male</option>
                        <option value="Female" {{ $student->gender=='Female'?'selected':'' }}>Female</option>
                    </select>
                </div>

            </div>
        </div>

        <!-- ACADEMIC -->
        <div class="activity">

            <h3>Academic Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Class</label>
                    <input type="text" name="class" value="{{ $student->class }}">
                </div>

                <div class="form-group">
                    <label>Section</label>
                    <input type="text" name="section" value="{{ $student->section }}">
                </div>

                <div class="form-group">
                    <label>Admission Date</label>
                    <input type="date" name="admission_date" value="{{ $student->admission_date }}">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option value="Active" {{ $student->status=='Active'?'selected':'' }}>Active</option>
                        <option value="Inactive" {{ $student->status=='Inactive'?'selected':'' }}>Inactive</option>
                    </select>
                </div>

            </div>
        </div>

        <!-- PARENT -->
        <div class="activity">

            <h3>Parent Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="father_name" value="{{ $student->father_name }}">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ $student->phone }}">
                </div>

                <div class="form-group full-width">
                    <label>Address</label>
                    <textarea name="address">{{ $student->address }}</textarea>
                </div>

            </div>
        </div>

        <!-- PHOTO -->
        <div class="activity">

            <h3>Student Photo</h3>

            @if($student->photo)
            <div class="photo-preview">
                <img src="{{ asset('students/'.$student->photo) }}">
            </div>
            @endif

            <input type="file" name="photo">

        </div>

        <!-- BUTTONS -->
        <div class="activity btn-group">

            <button type="submit" class="save-btn">
                <i class="fas fa-save"></i> Update Student
            </button>

            <a href="{{ url('/student') }}" class="cancel-btn">
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