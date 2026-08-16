<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Classes Management</title>
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

.add-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
}

.add-btn:hover{
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
    border-top:5px solid #2563eb;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:15px;
}

.card h2{
    color:#0f172a;
    margin-bottom:10px;
}

.card p{
    color:#64748b;
}

/* Table */

.class-table{
    margin-top:30px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.class-table h3{
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
/*=====================================
      BLOG STYLE MOBILE RESPONSIVE
======================================*/

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
        line-height:30px;
    }

    .add-btn{
        width:100%;
        text-align:center;
        padding:12px;
        font-size:14px;
    }

    .cards{
        grid-template-columns:1fr;
        gap:15px;
        margin-top:20px;
    }

    .card{
        padding:22px;
    }

    .card i{
        font-size:36px;
    }

    .card h2{
        font-size:28px;
    }

    .card p{
        font-size:14px;
    }

    .class-table{
        margin-top:20px;
        border-radius:15px;
        overflow-x:auto;
    }

    .class-table h3{
        font-size:18px;
        padding:18px;
    }

    table{
        min-width:950px;
    }

    table th{
        padding:14px;
        font-size:14px;
    }

    table td{
        padding:14px;
        font-size:13px;
        white-space:nowrap;
    }

    .action-btn{
        display:inline-block;
        padding:7px 12px;
        font-size:12px;
        margin:2px;
    }

}


/*=====================================
          SMALL MOBILE
======================================*/

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
        font-size:13px;
        padding:11px;
    }

    .cards{
        gap:12px;
    }

    .card{
        padding:18px;
    }

    .card i{
        font-size:30px;
    }

    .card h2{
        font-size:24px;
    }

    .card p{
        font-size:13px;
    }

    .class-table h3{
        font-size:17px;
        padding:15px;
    }

    table{
        min-width:900px;
    }

    table th,
    table td{
        padding:12px;
        font-size:12px;
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

<div class="topbar">
    <h2>Classes Management</h2>

    <a href="{{ url('/add_class') }}" class="add-btn">
        <i class="fas fa-plus"></i>
        Add Class
    </a>
</div>

    <!-- Cards -->

    <div class="cards">

<div class="card">
    <i class="fas fa-school"></i>
    <h2>{{ $totalClasses }}</h2>
    <p>Total Classes</p>
</div>

<div class="card">
    <i class="fas fa-chalkboard-teacher"></i>
    <h2>{{ $totalTeachers }}</h2>
    <p>Teachers Assigned</p>
</div>

<div class="card">
    <i class="fas fa-users"></i>
    <h2>{{ $totalCapacity }}</h2>
    <p>Total Student Capacity</p>
</div>
</div>

    <!-- Classes Table -->

    <div class="class-table">

        <h3>Classes List</h3>

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Class Name</th>
                    <th>Section</th>
                    <th>Teacher</th>
                    <th>Total-Students</th>
                    <th>Room No</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

@foreach($classes as $class)

<tr>
    <td>{{ $class->id }}</td>
    <td>{{ $class->class_name }}</td>
    <td>{{ $class->section_id }}</td>
    <td>{{ $class->teacher_name }}</td>
    <td>{{ $class->max_students }}</td>
    <td>{{ $class->room_no }}</td>

  
<td>

    <a href="{{ url('/view_class/'.$class->id) }}"
       class="action-btn view">
       View
    </a>

    <a href="{{ url('/edit_class/'.$class->id) }}"
       class="action-btn edit">
       Edit
    </a>

    <a href="{{ url('/delete_class/'.$class->id) }}"
       class="action-btn delete"
       onclick="return confirm('Are you sure you want to delete this class?')">
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