<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery Management</title>
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
    padding:22px 28px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
    flex-wrap:wrap;
    gap:20px;
}

.topbar h2{
    font-size:30px;
    color:#0f172a;
}

.topbar p{
    color:#64748b;
    margin-top:5px;
}

.add-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:14px 24px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
}

.add-btn:hover{
    background:#1d4ed8;
}

/* Table */

.table-box{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.table-box h3{
    padding:25px;
    font-size:22px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#2563eb;
    color:#fff;
    padding:16px;
    text-align:left;
}

td{
    padding:16px;
    border-bottom:1px solid #eee;
}

tbody tr:hover{
    background:#f8fafc;
}

/* Image */

.gallery-image{
    width:90px;
    height:70px;
    object-fit:cover;
    border-radius:10px;
    border:2px solid #2563eb;
}

/* Status */

.status{
    padding:6px 14px;
    color:#fff;
    border-radius:20px;
    font-size:13px;
}

.publish{
    background: #009d22;
    color: #ffffff;
}

.draft{
    background: #c90404;
    color: #ffffff;
}

/* Buttons */

.action-btn{
    display:inline-block;
    padding:8px 14px;
    color:#fff;
    text-decoration:none;
    border-radius:6px;
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

@media(max-width:900px){

table{
display:block;
overflow-x:auto;
white-space:nowrap;
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

    .topbar p{
        font-size:14px;
    }

    .add-btn{
        width:100%;
        text-align:center;
        padding:14px;
    }

    .table-box{
        border-radius:15px;
        overflow-x:auto;
    }

    .table-box h3{
        font-size:18px;
        padding:18px;
    }

    table{
        min-width:850px;
    }

    th{
        padding:14px;
        font-size:14px;
    }

    td{
        padding:14px;
        font-size:13px;
    }

    .gallery-image{
        width:60px;
        height:45px;
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
    }

    .topbar p{
        font-size:13px;
    }

    .add-btn{
        font-size:14px;
        padding:12px;
    }

    .table-box h3{
        font-size:17px;
        padding:15px;
    }

    table{
        min-width:800px;
    }

    th,
    td{
        font-size:12px;
        padding:12px;
    }

    .gallery-image{
        width:55px;
        height:40px;
    }

    .action-btn{
        font-size:11px;
        padding:6px 10px;
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

<div>

<h2>Gallery Management</h2>

<p>Manage all gallery images.</p>

</div>

<a href="{{ url('/add_gallery') }}" class="add-btn">

Add Gallery

</a>

</div>


<div class="table-box">

<h3>All Gallery Images</h3>

<table>

<thead>

<tr>

<th>ID</th>

<th>Image</th>

<th>Title</th>

<th>Status</th>

<th>Date</th>

<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($galleries as $gallery)

<tr>

<td>{{ $gallery->id }}</td>

<td>
<img src="{{ asset('uploads/gallery/'.$gallery->image) }}"
class="gallery-image">
</td>

<td>{{ $gallery->title }}</td>

<td>

@if($gallery->status=="Published")

<span class="status publish">
Published
</span>

@else

<span class="status draft">
Draft
</span>

@endif

</td>

<td>
{{ date('d M Y', strtotime($gallery->created_at)) }}
</td>

<td>

<a href="{{ url('/view_gallery/'.$gallery->id) }}" class="action-btn view">
View
</a>

<a href="{{ url('/edit_gallery/'.$gallery->id) }}" class="action-btn edit">
Edit
</a>

<a href="{{ url('/delete_gallery/'.$gallery->id) }}"
class="action-btn delete"
onclick="return confirm('Delete this image?')">
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