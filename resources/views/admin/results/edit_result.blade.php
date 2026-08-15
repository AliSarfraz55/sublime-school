<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Results</title>
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

.add-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:12px;
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
    background:#f8fafc;
}

.full-width{
    grid-column:1/-1;
}

.result-table{
    width:100%;
    border-collapse:collapse;
}

.result-table th{
    background:#2563eb;
    color:#fff;
    padding:14px;
}

.result-table td{
    padding:14px;
    border-bottom:1px solid #eee;
}

.result-table input,
.result-table select{
    width:100%;
    padding:10px;
    border:1px solid #ddd;
    border-radius:8px;
}

.btn-group{
    text-align:center;
}

.save-btn{
    background:#16a34a;
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
    text-decoration:none;
    padding:14px 30px;
    border-radius:12px;
    margin-left:10px;
}

textarea{
    min-height:120px;
    resize:none;
}

@media(max-width:768px){

    .form-grid{
        grid-template-columns:1fr;
    }

    .result-table{
        display:block;
        overflow-x:auto;
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
        <i class="fas fa-edit"></i>
        Edit Result
    </h2>

    <a href="{{ url('/result') }}" class="add-btn">
        <i class="fas fa-arrow-left"></i>
        Back
    </a>

</div>

<form action="{{ url('/update_result/'.$result->id) }}"
      method="POST">

@csrf

<div class="activity">

    <h3>Result Information</h3>

    <div class="form-grid">

        <div class="form-group">
            <label>Exam</label>

            <select name="exam_id">

                @foreach($exams as $exam)

                <option value="{{ $exam->id }}"
                {{ $result->exam_id == $exam->id ? 'selected' : '' }}>

                    {{ $exam->exam_type }}

                </option>

                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label>Class</label>

            <select name="class_id">

                @foreach($classes as $class)

                <option value="{{ $class->id }}"
                {{ $result->class_id == $class->id ? 'selected' : '' }}>

                    {{ $class->class_name }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="form-group">
            <label>Section</label>
            <input type="text"
                   name="section"
                   value="{{ $result->section }}">
        </div>

        <div class="form-group">
            <label>Publish Date</label>
            <input type="date"
                   name="publish_date"
                   value="{{ $result->publish_date }}">
        </div>

    </div>

</div>

<div class="activity">

    <h3>Student Result Details</h3>

    <table class="result-table">

        <thead>

        <tr>
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Total Marks</th>
            <th>Obtained Marks</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>

        </thead>

        <tbody>

        @foreach($details as $detail)

        <tr>

            <input type="hidden"
                   name="detail_id[]"
                   value="{{ $detail->id }}">

            <td>{{ $detail->roll_no ?? '' }}</td>

            <td>{{ $detail->student_name ?? '' }}</td>

            <td>
                <input type="number"
                name="total_marks[]"
                value="{{ $detail->total_marks }}">
            </td>

            <td>
                <input type="number"
                name="obtained_marks[]"
                value="{{ $detail->obtained_marks }}">
            </td>

            <td>
                <input type="text"
                name="grade[]"
                value="{{ $detail->grade }}">
            </td>

            <td>

                <select name="status[]">

                    <option value="Pass"
                    {{ $detail->status == 'Pass' ? 'selected' : '' }}>
                        Pass
                    </option>

                    <option value="Fail"
                    {{ $detail->status == 'Fail' ? 'selected' : '' }}>
                        Fail
                    </option>

                </select>

            </td>

        </tr>

        @endforeach

        </tbody>

    </table>

</div>

<div class="activity">

    <h3>Remarks</h3>

    <div class="form-group">

        <textarea
        name="remarks">{{ $result->remarks }}</textarea>

    </div>

</div>

<div class="activity btn-group">

    <button type="submit" class="save-btn">
        <i class="fas fa-save"></i>
        Update Result
    </button>

    <a href="{{ url('/result') }}"
       class="cancel-btn">
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