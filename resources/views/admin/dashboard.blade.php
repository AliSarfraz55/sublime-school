<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
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

/*=====================
        TOPBAR
======================*/

.topbar{
    background:#fff;
    padding:22px 30px;
    border-radius:18px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.topbar h2{
    font-size:30px;
    color:#0f172a;
    margin-bottom:5px;
}

.topbar p{
    color:#64748b;
}

.date-box{
    background:#2563eb;
    color:#fff;
    padding:12px 20px;
    border-radius:12px;
    font-weight:600;
}

.date-box i{
    margin-right:8px;
}

/*=====================
      CARDS
======================*/

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:25px;
    margin-bottom:35px;
}

.card{
    background:#fff;
    border-radius:18px;
    padding:25px;
    display:flex;
    align-items:center;
    gap:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.35s;
}

.card:hover{
    transform:translateY(-8px);
}

.icon{
    width:70px;
    height:70px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-size:28px;
}

.students{
    background:#2563eb;
}

.teachers{
    background:#16a34a;
}

.classes{
    background:#7c3aed;
}

.subjects{
    background:#f59e0b;
}

.exams{
    background:#dc2626;
}

.admission{
    background:#0891b2;
}

.fee{
    background:#059669;
}

.pending{
    background:#ea580c;
}

.info h3{
    color:#64748b;
    font-size:15px;
    margin-bottom:8px;
}

.info h1{
    font-size:30px;
    color:#0f172a;
}

/*=====================
   ATTENDANCE
======================*/

.attendance-summary{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:25px;
    margin-bottom:35px;
}

.attendance-card{
    background:#fff;
    padding:30px;
    border-radius:18px;
    display:flex;
    align-items:center;
    gap:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.attendance-card i{
    font-size:55px;
    color:#16a34a;
}

.attendance-card h3{
    color:#64748b;
    margin-bottom:5px;
}

.attendance-card h1{
    font-size:35px;
    color:#0f172a;
}

.attendance-card.absent i{
    color:#dc2626;
}

/*=====================
      TABLE
======================*/

.table-box{
    background:#fff;
    border-radius:18px;
    padding:25px;
    margin-bottom:35px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    overflow-x:auto;
}

.table-title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.table-title h3{
    font-size:22px;
    color:#0f172a;
}

table{
    width:100%;
    border-collapse:collapse;
}

table thead{
    background:#2563eb;
    color:#fff;
}

table th{
    padding:16px;
    text-align:left;
    font-size:15px;
}

table td{
    padding:15px;
    border-bottom:1px solid #e2e8f0;
    color:#475569;
}

table tbody tr{
    transition:.3s;
}

table tbody tr:hover{
    background:#f8fafc;
}


/*=====================
     RESPONSIVE
======================*/

@media(max-width:992px){

.cards{
    grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:768px){

.main{
    padding:15px;
}

.topbar{
    flex-direction:column;
    align-items:flex-start;
    gap:15px;
}

.cards{
    grid-template-columns:1fr;
}

.attendance-summary{
    grid-template-columns:1fr;
}

.info h1{
    font-size:24px;
}

.icon{
    width:60px;
    height:60px;
    font-size:24px;
}

.attendance-card{
    padding:20px;
}

.attendance-card i{
    font-size:45px;
}

table{
    min-width:700px;
}

}

@media(max-width:480px){

.topbar h2{
    font-size:24px;
}

.date-box{
    width:100%;
    text-align:center;
}

.card{
    padding:20px;
}

.table-title h3{
    font-size:18px;
}

}
/*==========================
    MOBILE RESPONSIVE
==========================*/

@media (max-width:768px){

    .wrapper{
        display:block;
    }

    .main{
        width:100%;
        padding:15px;
        margin-left:0;
    }

    .topbar{
        flex-direction:column;
        align-items:flex-start;
        gap:15px;
        padding:18px;
    }

    .topbar h2{
        font-size:24px;
    }

    .topbar p{
        font-size:14px;
    }

    .date-box{
        width:100%;
        text-align:center;
        padding:12px;
    }

    .cards{
        grid-template-columns:1fr;
        gap:15px;
    }

    .card{
        width:100%;
        padding:18px;
    }

    .icon{
        width:55px;
        height:55px;
        font-size:22px;
    }

    .info h3{
        font-size:14px;
    }

    .info h1{
        font-size:24px;
    }

    .attendance-summary{
        grid-template-columns:1fr;
        gap:15px;
    }

    .attendance-card{
        padding:20px;
    }

    .attendance-card i{
        font-size:40px;
    }

    .attendance-card h1{
        font-size:28px;
    }

    .table-box{
        padding:15px;
        overflow-x:auto;
    }

    table{
        min-width:650px;
    }

    table th,
    table td{
        padding:12px;
        font-size:13px;
    }

}


/*==========================
      SMALL MOBILE
==========================*/

@media (max-width:480px){

    .main{
        padding:10px;
    }

    .topbar{
        border-radius:12px;
        padding:15px;
    }

    .topbar h2{
        font-size:20px;
    }

    .topbar p{
        font-size:13px;
    }

    .card{
        flex-direction:column;
        text-align:center;
        gap:12px;
        padding:18px 15px;
    }

    .icon{
        width:50px;
        height:50px;
        font-size:20px;
    }

    .info h1{
        font-size:22px;
    }

    .attendance-card{
        flex-direction:column;
        text-align:center;
    }

    .attendance-card i{
        font-size:35px;
    }

    .attendance-card h1{
        font-size:24px;
    }

    .table-title h3{
        font-size:18px;
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

    <!-- Topbar -->

    <div class="topbar">

        <div>
            <h2>Dashboard</h2>
            <p>Welcome Back, Admin</p>
        </div>

        <div class="date-box">
            <i class="fas fa-calendar-days"></i>
            {{ date('d M Y') }}
        </div>

    </div>


    <!-- Statistics Cards -->

    <div class="cards">

        <div class="card">
            <div class="icon students">
                <i class="fas fa-user-graduate"></i>
            </div>

            <div class="info">
                <h3>Total Students</h3>
                <h1>{{ $students }}</h1>
            </div>
        </div>

        <div class="card">

            <div class="icon teachers">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>

            <div class="info">
                <h3>Total Teachers</h3>
                <h1>{{ $teachers }}</h1>
            </div>

        </div>

        <div class="card">

            <div class="icon classes">
                <i class="fas fa-school"></i>
            </div>

            <div class="info">
                <h3>Total Classes</h3>
                <h1>{{ $classes }}</h1>
            </div>

        </div>

        <div class="card">

            <div class="icon subjects">
                <i class="fas fa-book-open"></i>
            </div>

            <div class="info">
                <h3>Total Subjects</h3>
                <h1>{{ $subjects }}</h1>
            </div>

        </div>

        <div class="card">

            <div class="icon exams">
                <i class="fas fa-file-pen"></i>
            </div>

            <div class="info">
                <h3>Total Exams</h3>
                <h1>{{ $exams }}</h1>
            </div>

        </div>

        <div class="card">

            <div class="icon admission">
                <i class="fas fa-user-plus"></i>
            </div>

            <div class="info">
                <h3>Admissions</h3>
                <h1>{{ $admissions }}</h1>
            </div>

        </div>

        <div class="card">

            <div class="icon fee">
                <i class="fas fa-money-bill-wave"></i>
            </div>

            <div class="info">
                <h3>Today's Collection</h3>
                <h1>Rs {{ number_format($fees) }}</h1>
            </div>

        </div>

        <div class="card">

            <div class="icon pending">
                <i class="fas fa-wallet"></i>
            </div>

            <div class="info">
                <h3>Pending Fees</h3>
                <h1>Rs {{ number_format($pendingFees) }}</h1>
            </div>

        </div>

    </div>


    <!-- Attendance -->

    <div class="attendance-summary">

        <div class="attendance-card">

            <i class="fas fa-circle-check"></i>

            <div>
                <h3>Present Today</h3>
                <h1>{{ $attendancePresent }}</h1>
            </div>

        </div>

        <div class="attendance-card absent">

            <i class="fas fa-circle-xmark"></i>

            <div>
                <h3>Absent Today</h3>
                <h1>{{ $attendanceAbsent }}</h1>
            </div>

        </div>

    </div>



    <!-- Recent Students -->

    <div class="table-box">

        <div class="table-title">
            <h3>Recent Students</h3>
        </div>

        <table>

            <thead>

            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Class</th>
                <th>Admission Date</th>
            </tr>

            </thead>

            <tbody>

            @forelse($recentStudents as $student)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $student->name }}</td>

                <td>{{ $student->class ?? '-' }}</td>

                <td>{{ date('d M Y',strtotime($student->created_at)) }}</td>

            </tr>

            @empty

            <tr>

                <td colspan="4">
                    No Student Found
                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>



    <!-- Notices -->

    <div class="table-box">

        <div class="table-title">
            <h3>Latest Notices</h3>
        </div>

        <table>

            <thead>

            <tr>

                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>

            </tr>

            </thead>

            <tbody>

            @forelse($notices as $notice)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $notice->title }}</td>

                <td>{{ $notice->category }}</td>

                <td>{{ date('d M Y',strtotime($notice->created_at)) }}</td>

            </tr>

            @empty

            <tr>

                <td colspan="4">
                    No Notice Found
                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>




    <!-- Contact Messages -->

    <div class="table-box">

        <div class="table-title">
            <h3>Recent Contact Messages</h3>
        </div>

        <table>

            <thead>

            <tr>

                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>

            </tr>

            </thead>

            <tbody>

            @forelse($recentMessages as $message)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $message->name }}</td>

                <td>{{ $message->email }}</td>

                <td>{{ date('d M Y',strtotime($message->created_at)) }}</td>

            </tr>

            @empty

            <tr>

                <td colspan="4">
                    No Message Found
                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>


</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>