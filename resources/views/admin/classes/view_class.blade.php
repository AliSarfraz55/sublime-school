<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Class</title>
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

    <!-- Header -->

    <div class="topbar">

        <h2>
            <i class="fas fa-school"></i>
            Class Details
        </h2>

        <a href="{{ url('/class') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>

    </div>

    <!-- Class Information -->

    <div class="activity">

        <h3>Class Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Class Name</label>
                <input type="text" value="{{ $class->class_name }}" readonly>
            </div>

            <div class="form-group">
                <label>Class Code</label>
                <input type="text" value="{{ $class->class_code }}" readonly>
            </div>

            <div class="form-group">
    <label>Class Teacher</label>
    <input type="text"
           value="{{ $class->teacher_name ?? 'N/A' }}"
           readonly>
</div>
            <div class="form-group">
                <label>Section</label>
                <input type="text"
                       value="{{ $class->section_id }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Room Number</label>
                <input type="text"
                       value="{{ $class->room_no }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Maximum Students</label>
                <input type="text"
                       value="{{ $class->max_students }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Class Fee</label>
                <input type="text"
                       value="{{ $class->class_fee }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text"
                       value="{{ $class->status }}"
                       readonly>
            </div>

            <div class="form-group full-width">
                <label>Description</label>
                <textarea readonly>{{ $class->description }}</textarea>
            </div>

        </div>

    </div>

    <!-- Schedule Information -->

    <div class="activity">

        <h3>Class Schedule</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Start Time</label>
                <input type="text"
                       value="{{ $class->start_time }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>End Time</label>
                <input type="text"
                       value="{{ $class->end_time }}"
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
