<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teachers Management</title>
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
    padding:12px 22px;
    text-decoration:none;
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
.card-link{
    text-decoration:none;
    color:inherit;
    display:block;
}

.card-link .card{
    cursor:pointer;
}
/* Teacher Table */

.teacher-table{
    margin-top:30px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.teacher-table h3{
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




.teacher-photo{
    width:60px;
    height:60px;
    border-radius:50%;
    object-fit:cover;
    border:3px solid #2563eb;
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

    .teacher-table{
        margin-top:20px;
        border-radius:15px;
        overflow-x:auto;
    }

    .teacher-table h3{
        font-size:18px;
        padding:18px;
    }

    table{
        min-width:1050px;
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

    .teacher-photo,
    table img{
        width:45px;
        height:45px;
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

    .teacher-table h3{
        font-size:17px;
        padding:15px;
    }

    table{
        min-width:1000px;
    }

    table th,
    table td{
        padding:12px;
        font-size:12px;
    }

    .teacher-photo,
    table img{
        width:40px;
        height:40px;
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
    <h2>Teachers Management</h2>

    <a href="/add_teachers" class="add-btn">
        <i class="fas fa-user-plus"></i> Add Teacher
    </a>
</div>

    <!-- Cards -->

    <div class="cards">

    <div class="card">
    <i class="fas fa-chalkboard-teacher"></i>
    <h2>{{ $totalTeachers }}</h2>
    <p>Total Teachers</p>
</div>

<div class="card">
    <i class="fas fa-user-check"></i>
    <h2>{{ $activeTeachers }}</h2>
    <p>Active Teachers</p>
</div>

<div class="card">
    <i class="fas fa-male"></i>
    <h2>{{ $maleTeachers }}</h2>
    <p>Male Teachers</p>
</div>

<div class="card">
    <i class="fas fa-female"></i>
    <h2>{{ $femaleTeachers }}</h2>
    <p>Female Teachers</p>
</div>

</div>

    <!-- Teacher Table -->

    <div class="teacher-table">

        <h3>Teachers List</h3>

        <table>

            <thead>
<tr>
    <th>ID</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>

            <tbody>

@foreach($teachers as $teacher)

<tr>

    <td>{{ $teacher->teacher_id }}</td>

    <td>
        <img src="{{ asset('teacher_images/'.$teacher->photo) }}"
             width="60"
             height="60"
             style="border-radius:50%; object-fit:cover;">
    </td>

    <td>{{ $teacher->name }}</td>
    <td>{{ $teacher->designation }}</td>
    <td>{{ $teacher->phone }}</td>
    <td>{{ $teacher->email }}</td>

    <td>
        @if($teacher->status == 'Active')
            <span style="
                background:#22c55e;
                color:white;
                padding:6px 12px;
                border-radius:20px;
                font-size:13px;">
                Active
            </span>
        @else
            <span style="
                background:#ef4444;
                color:white;
                padding:6px 12px;
                border-radius:20px;
                font-size:13px;">
                Inactive
            </span>
        @endif
    </td>

<td>

    <a href="{{ url('/view_teacher/'.$teacher->id) }}"
       class="action-btn view">
        View
    </a>

    <a href="{{ url('/edit_teacher/'.$teacher->id) }}"
       class="action-btn edit">
        Edit
    </a>

    <a href="{{ url('/delete_teacher/'.$teacher->id) }}"
       class="action-btn delete"
       onclick="return confirm('Are you sure you want to delete this teacher?')">
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

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>