<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schedule Exam</title>
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
    padding:12px 22px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
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
    color:#0f172a;
}

.form-group input,
.form-group select,
.form-group textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    outline:none;
    transition:.3s;
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
    font-size:15px;
    font-weight:600;
}

.save-btn:hover{
    background:#1d4ed8;
}

.cancel-btn{
    background:#ef4444;
    color:#fff;
    text-decoration:none;
    padding:14px 30px;
    border-radius:12px;
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
        <h2>Schedule Exam</h2>

        <a href="{{ url('/exam') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Exams
        </a>
    </div>

   <form action="/store_exam" method="POST">

    @csrf
       
        <!-- Exam Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-file-alt"></i>
                Exam Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
    <label>Exam Type *</label>

    <select name="exam_type" required>
        <option value="">Select Exam Type</option>
        <option value="Mid Term">Mid Term</option>
        <option value="Final Term">Final Term</option>
        <option value="Monthly Test">Monthly Test</option>
        <option value="Weekly Test">Weekly Test</option>
        <option value="Unit Test">Unit Test</option>
        <option value="Practical Exam">Practical Exam</option>
    </select>
</div>

                <div class="form-group">
                    <label>Class *</label>
                   <select name="class_id">

    <option value="">Select Class</option>

    @foreach($classes as $class)

        <option value="{{ $class->id }}">
            {{ $class->class_name }}
        </option>

    @endforeach

</select>
                </div>

                <div class="form-group">
    <label>Subject *</label>

    <select name="subject_id" required>

        <option value="">Select Subject</option>

        @foreach($subjects as $subject)

            <option value="{{ $subject->id }}">
                {{ $subject->subject_name }}
            </option>

        @endforeach

    </select>
</div>

                <div class="form-group">
                    <label>Exam Date *</label>
                    <input type="date" name="exam_date">
                </div>

                <div class="form-group">
                    <label>Start Time *</label>
                    <input type="time" name="start_time">
                </div>

                <div class="form-group">
                    <label>End Time *</label>
                    <input type="time" name="end_time">
                </div>

            </div>

        </div>

        <!-- Marks Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-award"></i>
                Marks Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Total Marks *</label>
                    <input type="number" name="total_marks">
                </div>

                <div class="form-group">
                    <label>Passing Marks *</label>
                    <input type="number" name="passing_marks">
                </div>

            </div>

        </div>

        <!-- Hall Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-school"></i>
                Exam Hall Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Room Number *</label>
                    <input type="text" name="room_no">
                </div>

                <div class="form-group">
    <label>Invigilator *</label>

    <select name="invigilator_id">
        <option value="">Select Teacher</option>

        @foreach($teachers as $teacher)
            <option value="{{ $teacher->id }}">
                {{ $teacher->name }}
            </option>
        @endforeach

    </select>
</div>

                <div class="form-group full-width">
                    <label>Instructions</label>
                    <textarea name="instructions" rows="5"
                    placeholder="Write exam instructions here..."></textarea>
                </div>

            </div>

        </div>

        <!-- Buttons -->

        <div class="activity text-center">

            <button type="submit" class="save-btn">
                <i class="fas fa-calendar-check"></i>
                Schedule Exam
            </button>

            <a href="{{ url('/exams') }}" class="cancel-btn">
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