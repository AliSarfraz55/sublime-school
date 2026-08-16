<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Attendence</title>
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

/* TOPBAR */

.topbar{
    background:#fff;
    padding:20px 25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    margin-bottom:30px;
}

.topbar h2{
    color:#0f172a;
    font-size:28px;
}

.date{
    color:#64748b;
    margin-top:5px;
}

/* ATTENDANCE CARD */

.attendance-box{
    background:#fff;
    padding:40px;
    border-radius:20px;
    text-align:center;
    margin-bottom:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.clock{
    font-size:50px;
    font-weight:700;
    color:var(--primary);
}

.status{
    margin-top:15px;
    display:inline-block;
    padding:10px 20px;
    border-radius:50px;
    background:#e2e8f0;
    font-weight:600;
}

.buttons{
    margin-top:25px;
    display:flex;
    justify-content:center;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    border:none;
    color:#fff;
    padding:14px 25px;
    border-radius:12px;
    cursor:pointer;
    font-size:15px;
}

.checkin{
    background:#22c55e;
}

.checkout{
    background:#ef4444;
}

/* TABLE */

.history{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    margin-top:30px;
}

.history h3{
    padding:20px 25px;
    color:#0f172a;
    border-bottom:1px solid #eee;
}

table{
    width:100%;
    border-collapse:collapse;
    table-layout:fixed;
}

thead{
    background:#2563eb;
}

th{
    color:#fff;
    padding:16px;
    text-align:center;
    font-size:15px;
    font-weight:600;
}

td{
    padding:16px;
    text-align:center;
    vertical-align:middle;
    border-bottom:1px solid #eee;
}

tbody tr:hover{
    background:#f8fafc;
}

.tag{
    display:inline-block;
    min-width:90px;
    padding:7px 14px;
    border-radius:20px;
    color:#fff;
    font-size:13px;
    font-weight:600;
    text-align:center;
}

.present{
    background:#22c55e;
}

.absent{
    background:#ef4444;
}

.pending{
    background:#f59e0b;
}

@media(max-width:768px){

    .main{
        padding:15px;
    }

    .clock{
        font-size:35px;
    }

    .buttons{
        flex-direction:column;
    }

    .btn{
        width:100%;
    }

  
}
@media(max-width:768px){

    .main{
        padding:15px;
    }

    .clock{
        font-size:35px;
    }

    .buttons{
        flex-direction:column;
    }

    .btn{
        width:100%;
    }

    .history{
        overflow-x:auto;
    }

    table{
        min-width:700px;
    }
}
/*=================================
      TABLET RESPONSIVE
=================================*/

@media (max-width:992px){

    .main{
        padding:20px;
    }

    .attendance-box{
        padding:30px 20px;
    }

    .clock{
        font-size:42px;
    }

    .topbar{
        padding:18px 20px;
    }

}


/*=================================
        MOBILE RESPONSIVE
=================================*/

@media (max-width:768px){

    .wrapper{
        display:block;
    }

    .main{
        width:100%;
        padding:15px;
    }

    .topbar{
        padding:18px;
        border-radius:15px;
        text-align:center;
    }

    .topbar h2{
        font-size:22px;
    }

    .date{
        margin-top:8px;
        font-size:14px;
    }

    .attendance-box{
        padding:25px 18px;
        border-radius:15px;
    }

    .clock{
        font-size:32px;
        word-break:break-all;
    }

    .status{
        width:100%;
        font-size:14px;
    }

    .buttons{
        flex-direction:column;
        gap:12px;
    }

    .buttons form{
        width:100%;
    }

    .btn{
        width:100%;
        padding:14px;
        font-size:15px;
    }

    .history{
        border-radius:15px;
        overflow-x:auto;
    }

    .history h3{
        font-size:18px;
        padding:16px;
    }

    table{
        min-width:650px;
    }

    th,
    td{
        padding:12px;
        font-size:13px;
    }

}


/*=================================
      SMALL MOBILE
=================================*/

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

    .date{
        font-size:13px;
    }

    .attendance-box{
        padding:20px 15px;
    }

    .clock{
        font-size:26px;
    }

    .status{
        font-size:13px;
        padding:10px;
    }

    .btn{
        font-size:14px;
        padding:13px;
        border-radius:10px;
    }

    .history h3{
        font-size:17px;
    }

    table{
        min-width:600px;
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
        @if(session('role') == 'admin')
            Teachers Attendance
        @else
            Teacher Attendance
        @endif
    </h2>

    <div class="date" id="todayDate"></div>

</div>

@if(session('role') != 'admin')

<!-- TEACHER PANEL -->

<div class="attendance-box">

    <div class="clock" id="clock">00:00:00</div>

    <div class="status">
        Attendance Panel
    </div>

    <div class="buttons">

        <form action="{{ url('/attendance/checkin') }}" method="POST">
            @csrf

            <button type="submit" class="btn checkin">
                <i class="fas fa-sign-in-alt"></i>
                Check In
            </button>

        </form>

        <form action="{{ url('/attendance/checkout') }}" method="POST">
            @csrf

            <button type="submit" class="btn checkout">
                <i class="fas fa-sign-out-alt"></i>
                Check Out
            </button>

        </form>

    </div>

</div>

@endif

<!-- ATTENDANCE TABLE -->

<div class="history">

<h3>Attendance History</h3>

<table>

@if(session('role') == 'admin')

<thead>
<tr>
    <th>Teacher Name</th>
    <th>Check In</th>
    <th>Check Out</th>
    <th>Status</th>
</tr>
</thead>

<tbody>

@foreach($attendance as $row)

<tr>

    <td>{{ $row['name'] }}</td>

    <td>{{ $row['check_in'] }}</td>

    <td>{{ $row['check_out'] }}</td>

    <td>

        @if($row['status'] == 'Present')

            <span class="tag present">
                Present
            </span>

        @else

            <span class="tag absent">
                Absent
            </span>

        @endif

    </td>

</tr>

@endforeach

</tbody>

@else

<thead>
<tr>
    <th>Date</th>
    <th>Check In</th>
    <th>Check Out</th>
    <th>Status</th>
</tr>
</thead>

<tbody>

@foreach($attendance as $row)

<tr>

    <td>{{ $row->attendance_date }}</td>

    <td>{{ $row->check_in ?? '--' }}</td>

    <td>{{ $row->check_out ?? '--' }}</td>

    <td>
        <span class="tag present">
            {{ $row->status }}
        </span>
    </td>

</tr>

@endforeach

</tbody>

@endif

</table>

</div>

</div>
</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

<script>

function updateClock(){
    document.getElementById("clock").innerText =
    new Date().toLocaleTimeString();
}

if(document.getElementById("clock")){
    setInterval(updateClock,1000);
    updateClock();
}

document.getElementById("todayDate").innerText =
new Date().toDateString();

</script>

</body>
</html>