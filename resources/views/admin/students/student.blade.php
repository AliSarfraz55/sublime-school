<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Students Management</title>
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

/* Topbar */

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

/* Cards */

.cards{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

.card{
    text-decoration:none;
    color:inherit;
    background:#fff;
    padding:30px;
    border-radius:20px;
    text-align:center;
    border-top:5px solid var(--primary);
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
    display:block;
}

.card:hover{
    transform:translateY(-8px);
}

.card i{
    font-size:45px;
    color:var(--primary);
    margin-bottom:15px;
}

.card h2{
    color:#0f172a;
    margin-bottom:8px;
}

/* Table */

.student-table{
    margin-top:30px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.student-table h3{
    padding:25px;
    color:#0f172a;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:var(--primary);
    color:#fff;
    padding:15px;
    text-align:left;
}

table td{
    padding:15px;
    border-bottom:1px solid #eee;
}

table tr:hover{
    background:#f8fafc;
}

/* Student */

.student-info{
    display:flex;
    align-items:center;
    gap:10px;
}

.student-info img{
    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;
}

/* Status */

.status{
    padding:6px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}

.active{
    background: #26b609;;
    color: #fff;
}

.inactive{
    background: #d60c0c;;
    color: #fff;
}
/* Buttons */

.action-btn{
    text-decoration:none;
    display:inline-block;
    padding:8px 14px;
    border-radius:6px;
    color:white;
    margin-right:5px;
}

.view{
    background:#2563eb;
}

.edit{
    background:#f59e0b;
}

.delete{
    background:#ef4444;
}


/* Responsive */


@media(max-width:768px){

.cards{
    grid-template-columns:1fr;
}

.topbar{
    flex-direction:column;
    gap:15px;
    align-items:flex-start;
}

}
@media(max-width:768px){

.student-table{
    padding:0;
    overflow:hidden;
}

.student-table h3{
    padding:15px;
    font-size:18px;
}

table th,
table td{
    padding:12px;
    font-size:14px;
}

.student-info img{
    width:35px;
    height:35px;
}

.action-btn{
    padding:6px 10px;
    font-size:12px;
    margin-bottom:4px;
}

} 
/*====================================
        MOBILE RESPONSIVE
====================================*/

@media (max-width:768px){

    .wrapper{
        display:block;
    }

    .main{
        width:100%;
        padding:15px;
    }

    .topbar{
        flex-direction:column;
        align-items:flex-start;
        gap:15px;
        padding:18px;
        border-radius:15px;
    }

    .topbar h2{
        font-size:22px;
    }

    .add-btn{
        width:100%;
        text-align:center;
        padding:14px;
    }

    .cards{
        grid-template-columns:1fr;
        gap:15px;
    }

    .card{
        padding:22px;
    }

    .card i{
        font-size:38px;
    }

    .card h2{
        font-size:28px;
    }

    .card p{
        font-size:14px;
    }

    .student-table{
        margin-top:20px;
        border-radius:15px;
        overflow-x:auto;
    }

    .student-table h3{
        font-size:18px;
        padding:18px;
    }

    table{
        min-width:1000px;
    }

    table th{
        padding:14px;
        font-size:14px;
    }

    table td{
        padding:14px;
        font-size:13px;
    }

    .student-info{
        gap:8px;
    }

    .student-info img{
        width:40px;
        height:40px;
    }

    .status{
        font-size:12px;
        padding:5px 12px;
    }

    .action-btn{
        display:inline-block;
        padding:7px 12px;
        font-size:12px;
        margin:2px;
    }

}


/*====================================
          SMALL MOBILE
====================================*/

@media (max-width:480px){

    .main{
        padding:10px;
    }

    .topbar{
        padding:15px;
    }

    .topbar h2{
        font-size:20px;
        line-height:28px;
    }

    .add-btn{
        width:100%;
        font-size:14px;
        padding:12px;
    }

    .cards{
        gap:12px;
    }

    .card{
        padding:18px;
    }

    .card i{
        font-size:32px;
    }

    .card h2{
        font-size:24px;
    }

    .card p{
        font-size:13px;
    }

    .student-table h3{
        font-size:17px;
        padding:15px;
    }

    table{
        min-width:950px;
    }

    table th,
    table td{
        font-size:12px;
        padding:12px;
    }

    .student-info img{
        width:35px;
        height:35px;
    }

    .status{
        font-size:11px;
        padding:5px 10px;
    }

    .action-btn{
        font-size:11px;
        padding:6px 10px;
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
    <h2>Students Management</h2>

    <a href="{{ url('/add_student') }}" class="add-btn">
        <i class="fas fa-user-plus"></i>
        Add Student
    </a>
    
</div>

    <!-- Cards -->

    <div class="cards">

        <div class="card">
        <i class="fas fa-user-graduate"></i>
        <h2>{{ $totalStudents }}</h2>
        <p>Total Students</p>
        </div>

        <div class="card">
        <i class="fas fa-user-check"></i>
        <h2>{{ $activeStudents }}</h2>
        <p>Active Students</p>
        </div>

        <div class="card">
        <i class="fas fa-user-clock"></i>
        <h2>{{ $inactiveStudents }}</h2>
        <p>Inactive Students</p>
        </div>

        <div class="card">
            <i class="fas fa-school"></i>
            <h2>{{ $totalClasses }}</h2>
            <p>Total Classes</p>
        </div>

    </div>

    <!-- Students Table -->

    <div class="student-table">

        <h3>Students Records</h3>

        <table>

            <thead>
                <tr>
                    
                    <th>Student</th>
                    <th>Roll No</th>
                    <th>Class</th>
                    <th>Parent Phone</th>
                    <th>Admission Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
@foreach($students as $student)
<tr>

    <td>
        <div class="student-info">
            <img src="{{ asset('students/'.$student->photo) }}">
            <span>{{ $student->name }}</span>
        </div>
    </td>

    <td>{{ $student->roll_no }}</td>
    <td>{{ $student->class }}</td>
    <td>{{ $student->phone }}</td>
    <td>{{ $student->admission_date }}</td>

    <td>
        <span class="status {{ $student->status == 'Active' ? 'active' : 'inactive' }}">
            {{ $student->status }}
        </span>
    </td>

<td>

    <a href="{{ url('/view_student/'.$student->id) }}"
       class="action-btn view">
        View
    </a>

    <a href="{{ url('/edit_student/'.$student->id) }}"
       class="action-btn edit">
        Edit
    </a>

    <a href="{{ url('/delete_student/'.$student->id) }}"
       class="action-btn delete"
       onclick="return confirm('Are you sure you want to delete this student?')">
        Delete
    </a>

</td>



</tr>
@endforeach
</tbody>

        </table>

    </div>


</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>