<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Exam</title>
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
            <i class="fas fa-edit"></i>
            Edit Exam
        </h2>

        <a href="{{ url('/exam') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>

    </div>

    <!-- FORM -->

    <form action="{{ url('/update_exam/'.$exam->id) }}"
          method="POST">

        @csrf

        <!-- EXAM INFORMATION -->

        <div class="activity">

            <h3>Exam Information</h3>

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

                    <label>Class</label>

                    <select name="class_id">

                        @foreach($classes as $class)

                        <option value="{{ $class->id }}"
                        {{ $exam->class_id == $class->id ? 'selected' : '' }}>

                            {{ $class->class_name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="form-group">

                    <label>Subject</label>

                    <select name="subject_id">

                        @foreach($subjects as $subject)

                        <option value="{{ $subject->id }}"
                        {{ $exam->subject_id == $subject->id ? 'selected' : '' }}>

                            {{ $subject->subject_name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="form-group">
                    <label>Exam Date</label>
                    <input type="date"
                           name="exam_date"
                           value="{{ $exam->exam_date }}">
                </div>

                <div class="form-group">
                    <label>Start Time</label>
                    <input type="time"
                           name="start_time"
                           value="{{ $exam->start_time }}">
                </div>

                <div class="form-group">
                    <label>End Time</label>
                    <input type="time"
                           name="end_time"
                           value="{{ $exam->end_time }}">
                </div>

            </div>

        </div>

        <!-- MARKS INFORMATION -->

        <div class="activity">

            <h3>Marks Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Total Marks</label>
                    <input type="number"
                           name="total_marks"
                           value="{{ $exam->total_marks }}">
                </div>

                <div class="form-group">
                    <label>Passing Marks</label>
                    <input type="number"
                           name="passing_marks"
                           value="{{ $exam->passing_marks }}">
                </div>

            </div>

        </div>

        <!-- EXAM HALL -->

        <div class="activity">

            <h3>Exam Hall Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Room Number</label>
                    <input type="text"
                           name="room_no"
                           value="{{ $exam->room_no }}">
                </div>

                <div class="form-group">

                    <label>Invigilator</label>

                    <select name="invigilator_id">

                        @foreach($teachers as $teacher)

                        <option value="{{ $teacher->id }}"
                        {{ $exam->invigilator_id == $teacher->id ? 'selected' : '' }}>

                            {{ $teacher->name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="form-group">

                    <label>Status</label>

                    <select name="status">

                        <option value="Upcoming"
                        {{ $exam->status == 'Upcoming' ? 'selected' : '' }}>
                            Upcoming
                        </option>

                        <option value="Completed"
                        {{ $exam->status == 'Completed' ? 'selected' : '' }}>
                            Completed
                        </option>

                    </select>

                </div>

                <div class="form-group full-width">

                    <label>Instructions</label>

                    <textarea name="instructions">{{ $exam->instructions }}</textarea>

                </div>

            </div>

        </div>

        <!-- BUTTONS -->

        <div class="activity btn-group">

            <button type="submit" class="save-btn">
                <i class="fas fa-save"></i>
                Update Exam
            </button>

            <a href="{{ url('/exam') }}" class="cancel-btn">
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

