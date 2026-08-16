<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Teachers</title>
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
    margin-bottom:8px;
    font-weight:600;
    color:var(--secondary);
}

input, select, textarea{
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

/* PHOTO */
.photo-preview img{
    width:150px;
    height:150px;
    object-fit:cover;
    border-radius:15px;
    border:3px solid var(--primary);
    margin-bottom:10px;
}

/* BUTTONS */
.btn-group{
    text-align:center;
}

.save-btn{
    background:var(--primary);
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:12px;
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

/* RESPONSIVE */
@media(max-width:768px){
    .form-grid{
        grid-template-columns:1fr;
    }

    .cancel-btn{
        display:block;
        margin-top:10px;
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
            Edit Teacher
        </h2>

        <a href="{{ url('/teacher') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>
    </div>

    <!-- FORM -->
    <form action="{{ url('/update_teacher/'.$teacher->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <!-- BASIC INFO -->
        <div class="activity">

            <h3>Basic Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Teacher Name</label>
                    <input type="text" name="name" value="{{ $teacher->name }}">
                </div>

                <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="father_name" value="{{ $teacher->father_name }}">
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" value="{{ $teacher->dob }}">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="Male" {{ $teacher->gender=='Male'?'selected':'' }}>Male</option>
                        <option value="Female" {{ $teacher->gender=='Female'?'selected':'' }}>Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>CNIC</label>
                    <input type="text" name="cnic" value="{{ $teacher->cnic }}">
                </div>

                <div class="form-group">
                    <label>Religion</label>
                    <input type="text" name="religion" value="{{ $teacher->religion }}">
                </div>

            </div>
        </div>

        <!-- PROFESSIONAL -->
        <div class="activity">

            <h3>Professional Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Teacher ID</label>
                    <input type="text" name="teacher_id" value="{{ $teacher->teacher_id }}">
                </div>

                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name="designation" value="{{ $teacher->designation }}">
                </div>

                <div class="form-group">
                    <label>Department</label>
                    <input type="text" name="department" value="{{ $teacher->department }}">
                </div>

                <div class="form-group">
                    <label>Joining Date</label>
                    <input type="date" name="joining_date" value="{{ $teacher->joining_date }}">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option value="Active" {{ $teacher->status=='Active'?'selected':'' }}>Active</option>
                        <option value="Inactive" {{ $teacher->status=='Inactive'?'selected':'' }}>Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Experience</label>
                    <input type="number" name="experience" value="{{ $teacher->experience }}">
                </div>

            </div>
        </div>

        <!-- CONTACT -->
        <div class="activity">

            <h3>Contact Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ $teacher->phone }}">
                </div>

                <div class="form-group">
                    <label>Whatsapp</label>
                    <input type="text" name="whatsapp" value="{{ $teacher->whatsapp }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $teacher->email }}">
                </div>

                <div class="form-group">
                    <label>Emergency Contact</label>
                    <input type="text" name="emergency_contact" value="{{ $teacher->emergency_contact }}">
                </div>

                <div class="form-group full-width">
                    <label>Address</label>
                    <textarea name="address">{{ $teacher->address }}</textarea>
                </div>

            </div>
        </div>

        <!-- QUALIFICATION -->
        <div class="activity">

            <h3>Qualification Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" name="qualification" value="{{ $teacher->qualification }}">
                </div>

                <div class="form-group">
                    <label>Specialization</label>
                    <input type="text" name="specialization" value="{{ $teacher->specialization }}">
                </div>

                <div class="form-group">
                    <label>Institute</label>
                    <input type="text" name="institute" value="{{ $teacher->institute }}">
                </div>

                <div class="form-group">
                    <label>Passing Year</label>
                    <input type="text" name="passing_year" value="{{ $teacher->passing_year }}">
                </div>

            </div>
        </div>

        <!-- SALARY -->
        <div class="activity">

            <h3>Salary Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Salary</label>
                    <input type="number" name="salary" value="{{ $teacher->salary }}">
                </div>

                <div class="form-group">
                    <label>Bank Name</label>
                    <input type="text" name="bank_name" value="{{ $teacher->bank_name }}">
                </div>

                <div class="form-group">
                    <label>Account Number</label>
                    <input type="text" name="account_number" value="{{ $teacher->account_number }}">
                </div>

                <div class="form-group">
                    <label>IBAN</label>
                    <input type="text" name="iban" value="{{ $teacher->iban }}">
                </div>

            </div>
        </div>

        <!-- PHOTO -->
        <div class="activity">

            <h3>Teacher Photo</h3>

            @if($teacher->photo)
            <div class="photo-preview">
                <img src="{{ asset('teacher_images/'.$teacher->photo) }}">
            </div>
            @endif

            <input type="file" name="photo">

        </div>

        <!-- BUTTONS -->
        <div class="activity btn-group">

            <button type="submit" class="save-btn">
                <i class="fas fa-save"></i> Update Teacher
            </button>

            <a href="{{ url('/teacher') }}" class="cancel-btn">
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