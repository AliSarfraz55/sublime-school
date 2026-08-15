<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Gallery</title>
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

/* TOPBAR */

.topbar{
    background:#fff;
    padding:22px 28px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.topbar h2{
    font-size:30px;
    color:#0f172a;
}

.back-btn{
    text-decoration:none;
    background:#2563eb;
    color:#fff;
    padding:12px 22px;
    border-radius:10px;
    font-weight:600;
}

/* CARD */

.view-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.gallery-image img{
    width:100%;
    height:500px;
    object-fit:cover;
}

.content{
    padding:30px;
}

.content h3{
    font-size:32px;
    color:#0f172a;
    margin-bottom:20px;
}

.info{
    display:flex;
    gap:30px;
    margin-bottom:25px;
    color:#64748b;
    font-size:15px;
    flex-wrap:wrap;
}

.info span{
    font-weight:600;
}

.description{
    font-size:17px;
    line-height:1.9;
    color:#475569;
}

@media(max-width:768px){

.topbar{
flex-direction:column;
gap:20px;
align-items:flex-start;
}

.gallery-image img{
height:250px;
}

.content h3{
font-size:24px;
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

<h2>View Gallery</h2>

<a href="{{ url('/gallery_management') }}" class="back-btn">
Back
</a>

</div>

<div class="view-card">

<div class="gallery-image">

<img src="{{ asset('uploads/gallery/'.$gallery->image) }}" alt="">

</div>

<div class="content">

<h3>{{ $gallery->title }}</h3>

<div class="info">

<span>
Uploaded :
{{ date('d M Y',strtotime($gallery->created_at)) }}
</span>

@if(isset($gallery->updated_at))
<span>
Updated :
{{ date('d M Y',strtotime($gallery->updated_at)) }}
</span>
@endif

</div>

@if(isset($gallery->description))

<div class="description">

{{ $gallery->description }}

</div>

@endif

</div>

</div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>