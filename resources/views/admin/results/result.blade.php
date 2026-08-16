<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Results Management</title>
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
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:15px;
}

.topbar h2{
    color:#0f172a;
}

.publish-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
}

.publish-btn:hover{
    background:#1d4ed8;
}

/* Cards */

.cards{
    margin-top:30px;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

.card{
    background:#fff;
    padding:30px;
    border-radius:20px;
    text-align:center;
    border-top:5px solid var(--primary);
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
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
    margin-bottom:10px;
}

.card p{
    color:#64748b;
}

/* Result Table */

.result-table{
    margin-top:30px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.result-table h3{
    padding:25px;
    color:#0f172a;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#2563eb;
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

/* Status */

.status{
    padding:6px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}

.pass{
    background: #3a9200;
    color: #ffffff;
}

.fail{
    background: #ae0000;
    color: #ffffff;
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

@media(max-width:992px){

.cards{
    grid-template-columns:repeat(2,1fr);
}

table{
    display:block;
    overflow-x:auto;
}

}

@media(max-width:768px){

.cards{
    grid-template-columns:1fr;
}

.topbar{
    flex-direction:column;
    align-items:flex-start;
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

    .publish-btn{
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

    .result-table{
        margin-top:20px;
        border-radius:15px;
        overflow-x:auto;
    }

    .result-table h3{
        font-size:18px;
        padding:18px;
    }

    table{
        min-width:900px;
    }

    table th{
        padding:14px;
        font-size:14px;
    }

    table td{
        padding:14px;
        font-size:13px;
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

    .publish-btn{
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

    .result-table h3{
        font-size:17px;
        padding:15px;
    }

    table{
        min-width:850px;
    }

    table th,
    table td{
        font-size:12px;
        padding:12px;
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
        <h2>Results Management</h2>

        <a href="{{ url('/publish_result') }}" class="publish-btn">
            <i class="fas fa-file-upload"></i>
            Publish Result
        </a>
    </div>

    <!-- Cards -->

    <div class="cards">

<div class="card">
    <i class="fas fa-file-signature"></i>
    <h2>{{ $totalResults }}</h2>
    <p>Total Results</p>
</div>

<div class="card">
    <i class="fas fa-check-circle"></i>
    <h2>{{ $passedStudents }}</h2>
    <p>Passed Students</p>
</div>

<div class="card">
    <i class="fas fa-times-circle"></i>
    <h2>{{ $failedStudents }}</h2>
    <p>Failed Students</p>
</div>

<div class="card">
    <i class="fas fa-trophy"></i>
    <h2>{{ $passPercentage }}%</h2>
    <p>Pass Percentage</p>
</div>

    </div>

    <!-- Results Table -->

    <div class="result-table">

        <h3>Latest Results</h3>

        <table>

            <thead>
                <tr>
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Marks</th>
                    <th>Percentage</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

@forelse($results as $result)

<tr>
    <td>{{ $result->roll_no }}</td>
    <td>{{ $result->student_name }}</td>
    <td>{{ $result->class_name }}</td>
    <td>{{ $result->obtained_marks }} / {{ $result->total_marks }}</td>
    <td>{{ $result->percentage }}%</td>

    <td>
        @if($result->status == 'Pass')
            <span class="status pass">Pass</span>
        @else
            <span class="status fail">Fail</span>
        @endif
    </td>

    <td>

        <a href="{{ url('/view_result/'.$result->id) }}"
           class="action-btn view">
            View
        </a>

        <a href="{{ url('/edit_result/'.$result->id) }}"
           class="action-btn edit">
            Edit
        </a>

        <a href="{{ url('/delete_result/'.$result->id) }}"
           class="action-btn delete"
           onclick="return confirm('Delete this result?')">
            Delete
        </a>

    </td>
</tr>

@empty

<tr>
    <td colspan="7" style="text-align:center;">
        No Results Found
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