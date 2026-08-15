<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Exam</title>
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

.status{
    padding:10px 15px;
    border-radius:8px;
    font-weight:600;
    text-align:center;
}

.upcoming{
    background:#0527bf;
    color:#fff;
}

.completed{
    background:#01b001;
    color:#fff;
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

    <!-- Header -->

    <div class="topbar">

        <h2>
            <i class="fas fa-file-alt"></i>
            Exam Details
        </h2>

        <a href="{{ url('/exam') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>

    </div>

    <!-- Exam Information -->

    <div class="activity">

        <h3>Exam Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Exam Type</label>
                <input type="text" value="{{ $exam->exam_type }}" readonly>
            </div>

            
            <div class="form-group">
                <label>Class</label>
                <input type="text" value="{{ $exam->class_name }}" readonly>
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" value="{{ $exam->subject_name }}" readonly>
            </div>

            <div class="form-group">
                <label>Exam Date</label>
                <input type="text" value="{{ $exam->exam_date }}" readonly>
            </div>

            <div class="form-group">
                <label>Status</label>

                @if($exam->status == 'Completed')
                    <span class="status completed">
                        {{ $exam->status }}
                    </span>
                @else
                    <span class="status upcoming">
                        {{ $exam->status }}
                    </span>
                @endif

            </div>

        </div>

    </div>

    <!-- Time Information -->

    <div class="activity">

        <h3>Exam Timing</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Start Time</label>
                <input type="text" value="{{ $exam->start_time }}" readonly>
            </div>

            <div class="form-group">
                <label>End Time</label>
                <input type="text" value="{{ $exam->end_time }}" readonly>
            </div>

        </div>

    </div>

    <!-- Marks Information -->

    <div class="activity">

        <h3>Marks Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Total Marks</label>
                <input type="text" value="{{ $exam->total_marks }}" readonly>
            </div>

            <div class="form-group">
                <label>Passing Marks</label>
                <input type="text" value="{{ $exam->passing_marks }}" readonly>
            </div>

        </div>

    </div>

    <!-- Hall Information -->

    <div class="activity">

        <h3>Hall Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Room Number</label>
                <input type="text" value="{{ $exam->room_no }}" readonly>
            </div>

            <div class="form-group">
                <label>Invigilator</label>
                <input type="text" value="{{ $exam->invigilator_name }}" readonly>
            </div>

            <div class="form-group full-width">
                <label>Instructions</label>
                <textarea readonly>{{ $exam->instructions }}</textarea>
            </div>

        </div>

    </div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>