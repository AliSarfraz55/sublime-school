<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Class</title>
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
}

.form-group input,
.form-group select,
.form-group textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    outline:none;
    background:#f8fafc;
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

    <!-- Header -->

    <div class="topbar">

        <h2>
            <i class="fas fa-edit"></i>
            Edit Class
        </h2>

        <a href="{{ url('/class') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>

    </div>

  <form action="/update_class/{{ $class->id }}" method="POST">

    @csrf

        <!-- Class Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-school"></i>
                Class Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Class Name</label>
                    <input type="text" name="class_name"
                           value="{{ $class->class_name }}">
                </div>

                <div class="form-group">
                    <label>Class Code</label>
                    <input type="text" name="class_code"
                           value="{{ $class->class_code }}">
                </div>

                <div class="form-group">
                    <label>Class Teacher</label>

                    <select name="teacher_id">

                        @foreach($teachers as $teacher)

                        <option value="{{ $teacher->id }}"
                            {{ $class->teacher_id == $teacher->id ? 'selected' : '' }}>
                            {{ $teacher->name }}
                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="form-group">

                    <label>Section</label>

                    <select name="section_id">

                        <option value="1"
                        {{ $class->section_id == 1 ? 'selected' : '' }}>
                        A
                        </option>

                        <option value="2"
                        {{ $class->section_id == 2 ? 'selected' : '' }}>
                        B
                        </option>

                        <option value="3"
                        {{ $class->section_id == 3 ? 'selected' : '' }}>
                        C
                        </option>

                    </select>

                </div>

                <div class="form-group">
                    <label>Room Number</label>
                    <input type="text" name="room_no"
                           value="{{ $class->room_no }}">
                </div>

                <div class="form-group">
                    <label>Maximum Students</label>
                    <input type="number" name="max_students"
                           value="{{ $class->max_students }}">
                </div>

                <div class="form-group">
                    <label>Class Fee</label>
                    <input type="number" name="class_fee"
                           value="{{ $class->class_fee }}">
                </div>

                <div class="form-group">
                    <label>Status</label>

                    <select name="status">

                        <option value="Active"
                        {{ $class->status=='Active' ? 'selected' : '' }}>
                        Active
                        </option>

                        <option value="Inactive"
                        {{ $class->status=='Inactive' ? 'selected' : '' }}>
                        Inactive
                        </option>

                    </select>

                </div>

                <div class="form-group full-width">
                    <label>Description</label>

                    <textarea name="description">{{ $class->description }}</textarea>
                </div>

            </div>

        </div>

        <!-- Schedule -->

        <div class="activity">

            <h3>
                <i class="fas fa-clock"></i>
                Class Schedule
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Start Time</label>
                    <input type="time" name="start_time"
                           value="{{ $class->start_time }}">
                </div>

                <div class="form-group">
                    <label>End Time</label>
                    <input type="time" name="end_time"
                           value="{{ $class->end_time }}">
                </div>

            </div>

        </div>

        <!-- Buttons -->

        <div class="activity text-center">

            <button type="submit" class="save-btn">
                <i class="fas fa-save"></i>
                Update Class
            </button>

            <a href="{{ url('/class') }}" class="cancel-btn">
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