<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Teachers</title>
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

/* Topbar */
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

.add-btn{
    background:var(--primary);
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:12px;
    font-weight:600;
}

/* Sections */
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

/* Grid */
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

input, textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    background:#f8fafc;
}

/* full width */
.full-width{
    grid-column:1/-1;
}

textarea{
    min-height:120px;
    resize:none;
}

/* photo */
.photo-box img{
    width:200px;
    height:200px;
    border-radius:15px;
    object-fit:cover;
    border:3px solid var(--primary);
}

/* responsive */
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

    <!-- Topbar -->
    <div class="topbar">
        <h2>
            <i class="fas fa-chalkboard-teacher"></i>
            Teacher Details
        </h2>

        <a href="{{ url('/teacher') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <!-- Basic Info -->
    <div class="activity">
        <h3>Basic Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Name</label>
                <input type="text" value="{{ $teacher->name }}" readonly>
            </div>

            <div class="form-group">
                <label>Father Name</label>
                <input type="text" value="{{ $teacher->father_name }}" readonly>
            </div>

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" value="{{ $teacher->dob }}" readonly>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <input type="text" value="{{ $teacher->gender }}" readonly>
            </div>

            <div class="form-group">
                <label>CNIC</label>
                <input type="text" value="{{ $teacher->cnic }}" readonly>
            </div>

            <div class="form-group">
                <label>Religion</label>
                <input type="text" value="{{ $teacher->religion }}" readonly>
            </div>

        </div>
    </div>

    <!-- Professional -->
    <div class="activity">
        <h3>Professional Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Teacher ID</label>
                <input type="text" value="{{ $teacher->teacher_id }}" readonly>
            </div>

            <div class="form-group">
                <label>Designation</label>
                <input type="text" value="{{ $teacher->designation }}" readonly>
            </div>

            <div class="form-group">
                <label>Department</label>
                <input type="text" value="{{ $teacher->department }}" readonly>
            </div>

            <div class="form-group">
                <label>Joining Date</label>
                <input type="text" value="{{ $teacher->joining_date }}" readonly>
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" value="{{ $teacher->status }}" readonly>
            </div>

            <div class="form-group">
                <label>Experience</label>
                <input type="text" value="{{ $teacher->experience }}" readonly>
            </div>

        </div>
    </div>

    <!-- Contact -->
    <div class="activity">
        <h3>Contact Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Phone</label>
                <input type="text" value="{{ $teacher->phone }}" readonly>
            </div>

            <div class="form-group">
                <label>Whatsapp</label>
                <input type="text" value="{{ $teacher->whatsapp }}" readonly>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" value="{{ $teacher->email }}" readonly>
            </div>

            <div class="form-group">
                <label>Emergency Contact</label>
                <input type="text" value="{{ $teacher->emergency_contact }}" readonly>
            </div>

            <div class="form-group full-width">
                <label>Address</label>
                <textarea readonly>{{ $teacher->address }}</textarea>
            </div>

        </div>
    </div>

    <!-- Qualification -->
    <div class="activity">
        <h3>Qualification Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Qualification</label>
                <input type="text" value="{{ $teacher->qualification }}" readonly>
            </div>

            <div class="form-group">
                <label>Specialization</label>
                <input type="text" value="{{ $teacher->specialization }}" readonly>
            </div>

            <div class="form-group">
                <label>Institute</label>
                <input type="text" value="{{ $teacher->institute }}" readonly>
            </div>

            <div class="form-group">
                <label>Passing Year</label>
                <input type="text" value="{{ $teacher->passing_year }}" readonly>
            </div>

        </div>
    </div>

    <!-- Salary -->
    <div class="activity">
        <h3>Salary Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Salary</label>
                <input type="text" value="{{ $teacher->salary }}" readonly>
            </div>

            <div class="form-group">
                <label>Bank Name</label>
                <input type="text" value="{{ $teacher->bank_name }}" readonly>
            </div>

            <div class="form-group">
                <label>Account Number</label>
                <input type="text" value="{{ $teacher->account_number }}" readonly>
            </div>

            <div class="form-group">
                <label>IBAN</label>
                <input type="text" value="{{ $teacher->iban }}" readonly>
            </div>

        </div>
    </div>

    <!-- Login -->
    <div class="activity">
        <h3>Login Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Username</label>
                <input type="text" value="{{ $teacher->username }}" readonly>
            </div>

        </div>
    </div>

    <!-- Photo -->
    <div class="activity">
        <h3>Teacher Photo</h3>

        <div class="photo-box" style="text-align:center;">
            @if($teacher->photo)
                <img src="{{ asset('teacher_images/'.$teacher->photo) }}">
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