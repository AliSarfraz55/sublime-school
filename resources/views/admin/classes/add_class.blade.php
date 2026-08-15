<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Class</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
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

.wrapper{
    display:flex;
    min-height:100vh;
}

.main{
    flex:1;
    padding:30px;
}

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
    color:#0f172a;
}

.add-btn{
    background:var(--primary);
    color:#fff;
    text-decoration:none;
    padding:12px 20px;
    border-radius:12px;
    font-weight:600;
}

.add-btn:hover{
    background:var(--primary-dark);
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
}

.form-group input,
.form-group select,
.form-group textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    outline:none;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 3px rgba(37,99,235,.15);
}

.full-width{
    grid-column:1/-1;
}

.text-center{
    text-align:center;
}

.save-btn{
    background:#2563eb;
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:12px;
    cursor:pointer;
    font-weight:600;
}

.save-btn:hover{
    background:#1d4ed8;
}

.cancel-btn{
    background:#ef4444;
    color:#fff;
    padding:14px 30px;
    border-radius:12px;
    text-decoration:none;
    margin-left:10px;
}

@media(max-width:768px){

    .form-grid{
        grid-template-columns:1fr;
    }

    .topbar{
        flex-direction:column;
        gap:15px;
        align-items:flex-start;
    }

    .save-btn,
    .cancel-btn{
        width:100%;
        display:block;
        margin:10px 0;
        text-align:center;
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

    <!-- Header -->

    <div class="topbar">
        <h2>Add New Class</h2>

        <a href="{{ url('/class') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Classes
        </a>
    </div>

    <form action="{{ route('store_class') }}" method="POST">

    @csrf
        

        <!-- Class Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-school"></i>
                Class Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Class Name *</label>
                    <input type="text" name="class_name" placeholder="e.g 10th Class" required>
                </div>

                <div class="form-group">
                    <label>Class Code *</label>
                    <input type="text" name="class_code" placeholder="CLS-101">
                </div>

<div class="form-group">
    <label>Class Teacher *</label>

<select name="teacher_id" required>

    <option value="">Select Teacher</option>

    @foreach($teachers as $teacher)
        <option value="{{ $teacher->id }}">
            {{ $teacher->name }}
        </option>
    @endforeach

</select>

</div>
                <div class="form-group">
                    <label>Section *</label>
                    <select name="section_id" required>
                    <option value="">Select Section</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Room Number</label>
                    <input type="text" name="room_no">
                </div>

                <div class="form-group">
                    <label>Maximum Students</label>
                    <input type="number" name="max_students">
                </div>

                <div class="form-group">
                    <label>Class Fee</label>
                    <input type="number" name="class_fee">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label>Description</label>
                    <textarea name="description" rows="5"></textarea>
                </div>

            </div>

        </div>

        <!-- Schedule Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-clock"></i>
                Class Schedule
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Start Time</label>
                    <input type="time" name="start_time">
                </div>

                <div class="form-group">
                    <label>End Time</label>
                    <input type="time" name="end_time">
                </div>

            </div>

        </div>

        <!-- Buttons -->

        <div class="activity text-center">

            <button type="submit" class="save-btn">
                <i class="fas fa-save"></i>
                Save Class
            </button>

            <a href="{{ url('/classes') }}" class="cancel-btn">
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