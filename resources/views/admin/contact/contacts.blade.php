<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Message</title>
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

.topbar{
    background:#fff;
    padding:20px 25px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.topbar h2{
    color:#0f172a;
}

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
}

.card i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:15px;
}

.card h2{
    margin-bottom:10px;
}

.contact-table{
    margin-top:30px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.contact-table h3{
    padding:25px;
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

.status{
    padding:6px 15px;
    border-radius:20px;
    font-size:13px;
    font-weight:bold;
}

.read{
    background: #009d22;
    color: #ffffff;
}

.unread{
    background: #c90404;
    color: #ffffff;
}

.action-btn{
    display:inline-block;
    padding:8px 14px;
    border-radius:6px;
    text-decoration:none;
    color:#fff;
    margin-right:5px;
}

.view{
    background:#2563eb;
}

.delete{
    background:#ef4444;
}

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

}
/*=====================================
        TABLET RESPONSIVE
======================================*/

@media (max-width:992px){

    .main{
        padding:20px;
    }

    .topbar{
        padding:18px 20px;
    }

    .topbar h2{
        font-size:26px;
    }

    .cards{
        grid-template-columns:repeat(2,1fr);
        gap:20px;
    }

    .contact-table{
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

    .admission-table{
        border-radius:15px;
        overflow-x:auto;
    }

    .admission-table h3{
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

    .admission-table h3{
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

<h2>
<i class="fas fa-envelope"></i>
Contact Messages
</h2>

</div>

<div class="cards">

<div class="card">
<i class="fas fa-envelope"></i>
<h2>{{ $total }}</h2>
<p>Total Messages</p>
</div>

<div class="card">
<i class="fas fa-calendar-day"></i>
<h2>{{ $today }}</h2>
<p>Today's Messages</p>
</div>

<div class="card">
<i class="fas fa-envelope-open"></i>
<h2>{{ $read }}</h2>
<p>Read Messages</p>
</div>

<div class="card">
<i class="fas fa-envelope"></i>
<h2>{{ $unread }}</h2>
<p>Unread Messages</p>
</div>

</div>

<div class="contact-table">

<h3>All Contact Messages</h3>

<table>

<thead>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>

</tr>

</thead>

<tbody>

@forelse($messages as $message)

<tr>

<td>{{ $message->id }}</td>

<td>{{ $message->name }}</td>

<td>{{ $message->email }}</td>

<td>{{ Str::limit($message->message,60) }}</td>

<td>{{ date('d M Y',strtotime($message->created_at)) }}</td>

<td>

@if($message->status == 'Read')

<span class="status read">
    Read
</span>

@else

<span class="status unread">
    Unread
</span>

@endif

</td>   

<td>

<a href="{{ route('contact.view', $message->id) }}" class="action-btn view">
    View
</a>

<a href="{{ route('contact.delete',$message->id) }}"
class="action-btn delete"
onclick="return confirm('Delete this message?')">

Delete

</a>

</td>

</tr>

@empty

<tr>

<td colspan="7" style="text-align:center">

No Messages Found

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