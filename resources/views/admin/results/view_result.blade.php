<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Results</title>
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

/* Result Table */

.result-table{
    width:100%;
    border-collapse:collapse;
}

.result-table th{
    background:#2563eb;
    color:#fff;
    padding:14px;
    text-align:left;
}

.result-table td{
    padding:14px;
    border-bottom:1px solid #e5e7eb;
}

.result-table tr:hover{
    background:#f8fafc;
}

.pass{
    background:#16a34a;
    color:#fff;
    padding:6px 12px;
    border-radius:8px;
    font-size:13px;
    font-weight:600;
}

.fail{
    background:#dc2626;
    color:#fff;
    padding:6px 12px;
    border-radius:8px;
    font-size:13px;
    font-weight:600;
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
            <i class="fas fa-award"></i>
            Result Details
        </h2>

        <a href="{{ url('/result') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back
        </a>

    </div>

    <!-- Result Information -->

    <div class="activity">

        <h3>Result Information</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Exam</label>
                <input type="text"
                value="{{ $result->exam_type }}"
                readonly>
            </div>

            <div class="form-group">
                <label>Class</label>
                <input type="text"
                value="{{ $result->class_name }}"
                readonly>
            </div>

            <div class="form-group">
                <label>Section</label>
                <input type="text"
                value="{{ $result->section }}"
                readonly>
            </div>

            <div class="form-group">
                <label>Publish Date</label>
                <input type="text"
                value="{{ $result->publish_date }}"
                readonly>
            </div>

        </div>

    </div>

    <!-- Students Result -->

    <div class="activity">

        <h3>
            <i class="fas fa-users"></i>
            Student Result Details
        </h3>

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

                @forelse($students as $student)

                <tr>

                    <td>{{ $student->roll_no }}</td>

                    <td>{{ $student->student_name }}</td>

                    <td>{{ $student->total_marks }}</td>

                    <td>{{ $student->obtained_marks }}</td>

                    <td>{{ $student->grade }}</td>

                    <td>

                        @if($student->status == 'Pass')

                            <span class="pass">
                                Pass
                            </span>

                        @else

                            <span class="fail">
                                Fail
                            </span>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                    style="text-align:center;padding:20px;">
                        No Result Found
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <!-- Remarks -->

    <div class="activity">

        <h3>
            <i class="fas fa-comment"></i>
            Remarks
        </h3>

        <div class="form-group">

            <textarea readonly>{{ $result->remarks }}</textarea>

        </div>

    </div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>