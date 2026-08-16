<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blogs Management</title>
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

/* ================= TOPBAR ================= */

.topbar{
    background:#fff;
    padding:22px 28px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);

    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
    flex-wrap:wrap;

    margin-bottom:30px;
}

.topbar h2{
    color:#0f172a;
    font-size:30px;
    margin-bottom:5px;
}

.topbar p{
    color:#64748b;
}

/* ================= ADD BUTTON ================= */

.add-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:14px 24px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
}

.add-btn i{
    margin-right:8px;
}

.add-btn:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

/* ================= TABLE BOX ================= */

.blog-table{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.blog-table h3{
    padding:25px;
    color:#0f172a;
    font-size:22px;
}

.blog-table h3 i{
    color:#2563eb;
    margin-right:10px;
}

/* ================= TABLE ================= */

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#2563eb;
    color:#fff;
    padding:16px;
    text-align:left;
    font-size:15px;
}

td{
    padding:16px;
    border-bottom:1px solid #edf2f7;
    vertical-align:middle;
}

tbody tr:hover{
    background:#f8fafc;
}

/* ================= IMAGE ================= */

.blog-image{
    width:70px;
    height:55px;
    object-fit:cover;
    border-radius:10px;
    border:2px solid #2563eb;
}

/* ================= STATUS ================= */

.status{
    display:inline-block;
    padding:6px 14px;
    border-radius:20px;
    color:#fff;
    font-size:13px;
    font-weight:600;
}

.publish{
    background: #009d22;
    color: #ffffff;
}

.draft{
    background: #c90404;
    color: #ffffff;
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

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

    table{
        display:block;
        overflow-x:auto;
        white-space:nowrap;
    }

}

@media(max-width:768px){

    .main{
        padding:15px;
    }

    .topbar{
        flex-direction:column;
        align-items:flex-start;
    }

    .topbar h2{
        font-size:24px;
    }

    .add-btn{
        width:100%;
        text-align:center;
    }

}
/*====================================
        TABLET RESPONSIVE
====================================*/

@media (max-width:992px){

    .main{
        padding:20px;
    }

    .topbar{
        padding:20px;
    }

    .blog-table{
        overflow-x:auto;
    }

    table{
        min-width:900px;
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

    .blog-table{
        border-radius:15px;
        overflow-x:auto;
    }

    .blog-table h3{
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

    .blog-image{
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

    .blog-table h3{
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

    .blog-image{
        width:55px;
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

<!-- TOPBAR -->

<div class="topbar">

    <div>

        <h2>Blogs Management</h2>

        <p>
            Manage all blogs from one place.
        </p>

    </div>

    <a href="{{ url('/add_blog') }}" class="add-btn">

        <i class="fas fa-plus-circle"></i>

        Add Blog

    </a>

</div>

<!-- BLOG TABLE -->

<div class="blog-table">

<h3>

<i class="fas fa-blog"></i>

All Blogs

</h3>

<table>

<thead>

<tr>

<th>ID</th>

<th>Image</th>

<th>Title</th>

<th>Author</th>

<th>Status</th>

<th>Date</th>

<th>Action</th>

</tr>

</thead>

<tbody>

{{-- Dynamic Data --}}

@foreach($blogs as $blog)

<tr>

<td>

{{ $blog->id }}

</td>

<td>

<img src="{{ asset('uploads/blogs/'.$blog->image) }}"
class="blog-image">
</td>

<td>

{{ $blog->title }}

</td>

<td>

{{ $blog->author }}

</td>

<td>

@if($blog->status=="Published")

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

{{ date('d M Y',strtotime($blog->created_at)) }}

</td>

<td>

<a href="{{ url('/view_blog/'.$blog->id) }}" class="action-btn view">
    View
</a>

<a href="{{ url('/edit_blog/'.$blog->id) }}" class="action-btn edit">
    Edit
</a>

<a href="{{ url('/delete_blog/'.$blog->id) }}"
   class="action-btn delete"
   onclick="return confirm('Delete this blog?')">
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