<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Publish Results</title>
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
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
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
    font-weight:bold;
}

.form-group input,
.form-group select,
.form-group textarea{
    padding:12px;
    border:1px solid #ddd;
    border-radius:10px;
}

.result-table{
    width:100%;
    border-collapse:collapse;
}

.result-table th{
    background:#2563eb;
    color:#fff;
    padding:12px;
}

.result-table td{
    padding:12px;
    border:1px solid #e5e7eb;
    text-align:center;
}

.result-table input,
.result-table select{
    width:100%;
    padding:8px;
    border:1px solid #ddd;
    border-radius:8px;
}

.save-btn{
    background:#16a34a;
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:12px;
    cursor:pointer;
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

    <div class="topbar">
        <h2>Publish Result</h2>

        <a href="{{ url('/result') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

   <form action="/store_result" method="POST">

    @csrf
        <!-- Result Information -->

        <div class="activity">

            <h3>Result Information</h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Exam</label>

                    <select name="exam_id" required>
                        <option value="">Select Exam</option>

                        @foreach($exams as $exam)
                        <option value="{{ $exam->id }}">
                            {{ $exam->exam_type }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Class</label>

                    <select name="class_id" required>
                        <option value="">Select Class</option>

                        @foreach($classes as $class)
                        <option value="{{ $class->id }}">
                            {{ $class->class_name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Section</label>

                    <select name="section">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Publish Date</label>
                    <input type="date" name="publish_date" required>
                </div>

            </div>

        </div>

        <!-- Students Result -->

        <div class="activity">

            <h3>Student Result Entry</h3>

            <div style="overflow-x:auto">

                <table class="result-table">

                    <thead>
                        <tr>
                            <th>Roll No</th>
                            <th>Name</th>
                            <th>Total Marks</th>
                            <th>Obtained Marks</th>
                            <th>Grade</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($students as $student)

                    <tr>

                        <td>
                            {{ $student->roll_no }}

                            <input type="hidden"
                                   name="student_id[]"
                                   value="{{ $student->id }}">
                        </td>

                        <td>{{ $student->name }}</td>

                        <td>
                            <input type="number"
                                   name="total_marks[]"
                                   value="100">
                        </td>

                        <td>
                            <input type="number"
                                   name="obtained_marks[]">
                        </td>

                        <td>
                            <input type="text"
                                   name="grade[]">
                        </td>

                        <td>
                            <select name="status[]">
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                            </select>
                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="6">
                            No Students Found
                        </td>
                    </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        <!-- Remarks -->

        <div class="activity">

            <h3>Remarks</h3>

            <textarea
                name="remarks"
                rows="5"
                style="width:100%;padding:15px;border:1px solid #ddd;border-radius:10px;">
            </textarea>

        </div>

        <div class="activity" style="text-align:center">

            <button type="submit" class="save-btn">
                Publish Result
            </button>

            <a href="{{ url('/result') }}" class="cancel-btn">
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
