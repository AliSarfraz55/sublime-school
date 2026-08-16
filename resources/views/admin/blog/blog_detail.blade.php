<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $blog->title }}</title>

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

/* ================= HERO ================= */

.blog-hero{
    min-height:45vh;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:#fff;
    background:
    linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
}

.blog-hero h1{
    font-size:52px;
    font-weight:800;
    margin-bottom:15px;
}

.blog-hero p{
    font-size:17px;
    opacity:.9;
}

.blog-hero i{
    color:#fbbf24;
}

/* ================= DETAIL ================= */

.blog-detail{
    padding:80px 0;
}

.detail-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:40px;
    align-items:start;
}

/* LEFT */

.blog-content{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
}

.blog-image img{
    width:100%;
    height:450px;
    object-fit:cover;
}

.blog-title{
    font-size:36px;
    color:#0f172a;
    padding:30px 30px 10px;
}

.meta{
    display:flex;
    gap:25px;
    padding:0 30px 20px;
    color:#64748b;
    font-size:14px;
}

.meta i{
    color:#2563eb;
    margin-right:6px;
}

.description{
    padding:0 30px 35px;
    font-size:17px;
    line-height:2;
    color:#475569;
}

.back-btn{
    padding:0 30px 35px;
}

.back-btn a{
    display:inline-block;
    text-decoration:none;
    background:#2563eb;
    color:#fff;
    padding:14px 30px;
    border-radius:40px;
    transition:.3s;
    font-weight:600;
}

.back-btn a:hover{
    background:#1d4ed8;
}

/* ================= SIDEBAR ================= */

.sidebar{
    background:#fff;
    padding:25px;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
}

.sidebar h3{
    font-size:25px;
    color:#0f172a;
    margin-bottom:25px;
    border-bottom:2px solid #e5e7eb;
    padding-bottom:15px;
}

.latest-post{
    display:flex;
    gap:15px;
    margin-bottom:20px;
    align-items:center;
}

.latest-post img{
    width:90px;
    height:70px;
    object-fit:cover;
    border-radius:10px;
}

.latest-post h4{
    font-size:16px;
    margin-bottom:8px;
}

.latest-post h4 a{
    text-decoration:none;
    color:#0f172a;
    transition:.3s;
}

.latest-post h4 a:hover{
    color:#2563eb;
}

.latest-post p{
    font-size:13px;
    color:#64748b;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

    .detail-grid{
        grid-template-columns:1fr;
    }

    .blog-image img{
        height:320px;
    }

    .blog-title{
        font-size:28px;
    }

}

@media(max-width:768px){

    .blog-hero h1{
        font-size:36px;
    }

    .blog-title{
        font-size:24px;
    }

    .meta{
        flex-direction:column;
        gap:10px;
    }

    .description{
        font-size:15px;
    }

    .latest-post img{
        width:80px;
        height:60px;
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

@include('includes.aos')
@include('includes.navbar')
@include('includes.whatsapp')

<!-- HERO -->

<section class="blog-hero">

<div class="container">

<h1>{{ $blog->title }}</h1>

<p>

<i class="fa-solid fa-calendar"></i>

{{ date('d M Y',strtotime($blog->created_at)) }}

&nbsp;&nbsp;&nbsp;

<i class="fa-solid fa-user"></i>

{{ $blog->author }}

</p>

</div>

</section>

<!-- BLOG DETAIL -->

<section class="blog-detail">

<div class="container detail-grid">

<!-- LEFT -->

<div class="blog-content">

<div class="blog-image">

<img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="">

</div>

<h2 class="blog-title">

{{ $blog->title }}

</h2>

<div class="meta">

<span>

<i class="fa-solid fa-user"></i>

{{ $blog->author }}

</span>

<span>

<i class="fa-solid fa-calendar"></i>

{{ date('d M Y',strtotime($blog->created_at)) }}

</span>

</div>

<div class="description">

{!! nl2br(e($blog->description)) !!}

</div>

<div class="back-btn">

<a href="{{ url('/blog') }}">

← Back to Blogs

</a>

</div>

</div>

<!-- RIGHT SIDEBAR -->

<div class="sidebar">

<h3>

Latest Posts

</h3>

@foreach($latest as $item)

<div class="latest-post">

<img src="{{ asset('uploads/blogs/'.$item->image) }}">

<div>

<h4>

<a href="{{ url('/blog/'.$item->id) }}">

{{ $item->title }}

</a>

</h4>

<p>

{{ date('d M Y',strtotime($item->created_at)) }}

</p>

</div>

</div>

@endforeach

</div>

</div>

</section>

@include('includes.footer')
@include('includes.scroll')

</body>
</html>