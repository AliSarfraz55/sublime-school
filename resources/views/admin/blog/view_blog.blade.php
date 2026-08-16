<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Blog</title>
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
.card{

background:#fff;
border-radius:20px;
overflow:hidden;
box-shadow:0 15px 35px rgba(0,0,0,.08);

}

.card img{

width:100%;
height:450px;
object-fit:cover;

}

.content{

padding:35px;

}

.title{

font-size:38px;
font-weight:bold;
margin-bottom:15px;
color:#0f172a;

}

.meta{

display:flex;
gap:30px;
margin-bottom:25px;
color:#64748b;

}

.meta i{

color:#2563eb;
margin-right:6px;

}

.short{

font-size:18px;
line-height:1.8;
margin-bottom:30px;
color:#475569;

}

.description{

font-size:17px;
line-height:2;
color:#334155;

}

.back{

display:inline-block;
margin-top:40px;
padding:14px 28px;
background:#2563eb;
color:#fff;
text-decoration:none;
border-radius:12px;

}

.back:hover{

background:#1d4ed8;

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

@include('admin.includes.navbar')

<div class="wrapper">

@include('admin.includes.sidebar')

<div class="main">

<div class="card">

<img src="{{ asset('uploads/blogs/'.$blog->image) }}">

<div class="content">

<h1 class="title">

{{ $blog->title }}

</h1>

<div class="meta">

<span>

<i class="fas fa-user"></i>

{{ $blog->author }}

</span>

<span>

<i class="fas fa-calendar"></i>

{{ date('d M Y',strtotime($blog->created_at)) }}

</span>

<span>

<i class="fas fa-toggle-on"></i>

{{ $blog->status }}

</span>

</div>

<p class="short">

{{ $blog->short_description }}

</p>

<div class="description">

{!! nl2br(e($blog->description)) !!}

</div>

<a href="{{ url('/blogs') }}" class="back">

<i class="fas fa-arrow-left"></i>

Back

</a>

</div>

</div>

</div>

</div>

@include('admin.includes.footer')

</body>
</html>