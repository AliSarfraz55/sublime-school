@php
use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Blog</title>
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

/* ================= HERO ================= */

.blog-hero{
     min-height:60vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    position:relative;
    overflow:hidden;

    background:
    radial-gradient(
        circle at top right,
        rgba(255,255,255,.12),
        transparent 30%
    ),
    linear-gradient(
        135deg,
        #0f172a,
        #1e3a8a,
        #2563eb
    );
}

.blog-hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(255,255,255,.05);
    border-radius:50%;
    top:-200px;
    right:-150px;
}

.blog-hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,.04);
    border-radius:50%;
    bottom:-150px;
    left:-100px;
}

.blog-hero .container{
    position:relative;
    z-index:2;
}

.blog-hero h1{
    font-size:65px;
    font-weight:900;
}

.blog-hero p{
    font-size:18px;
    margin-top:10px;
    opacity:.9;
}

/* ================= BLOG GRID ================= */

.section-title{
    font-size:42px;
    font-weight:800;
    color:#0f172a;
    text-align:center;
    margin-bottom:60px;
    position:relative;
}

.section-title::after{
    content:"";
    width:80px;
    height:4px;
    background:linear-gradient(
        90deg,
        var(--primary),
        var(--accent)
    );
    display:block;
    margin:15px auto 0;
    border-radius:20px;
}

/* BLOG CARDS */

.blog-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.blog-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 12px 35px rgba(0,0,0,.08);
    transition:.35s ease;
    display: flex;
    flex-direction: column;
}

.blog-card:hover{
    transform:translateY(-10px);
}

.blog-img{
    width:100%;
    height:220px;
    overflow:hidden;
}

.blog-img img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.5s ease;
}

.blog-card:hover img{
    transform:scale(1.1);
}

.blog-content{
    padding:25px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.blog-date{
    font-size:13px;
    color:#64748b;
    margin-bottom:10px;
}

.blog-content h3{
    font-size:22px;
    color:#0f172a;
    margin-bottom:10px;
}

/* STRICTLY 2 LINES DESCRIPTION WITH ELLIPSIS (...) */
.blog-content p{
    font-size:15px;
    line-height:1.6;
    color:#475569;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 15px;
}

.read-more{
    display:inline-block;
    margin-top: auto;
    color:#2563eb;
    font-weight:700;
    text-decoration:none;
}

/* ================= FEATURED POST ================= */

.featured{
    background:#f8fafc;
    padding:120px 0;
}

.featured-box{
    display:grid;
    grid-template-columns:1.1fr 1fr;
    gap:60px;
    align-items:center;
}

/* IMAGE SIDE */
.featured-image{
    position:relative;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 25px 60px rgba(0,0,0,.12);
}

.featured-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.6s ease;
}

.featured-image:hover img{
    transform:scale(1.08);
}

/* badge on image */
.featured-badge{
    position:absolute;
    top:20px;
    left:20px;
    background:rgba(255,255,255,.9);
    color:#0f172a;
    padding:8px 14px;
    border-radius:50px;
    font-size:13px;
    font-weight:700;
    backdrop-filter:blur(10px);
}

/* TEXT SIDE */
.featured-tag{
    display:inline-block;
    padding:6px 14px;
    background:#2563eb;
    color:#fff;
    border-radius:50px;
    font-size:13px;
    margin-bottom:15px;
}

.featured-text h2{
    font-size:38px;
    color:#0f172a;
    margin-bottom:15px;
    font-weight:800;
}

.featured-text p{
    line-height:1.9;
    color:#475569;
    font-size:16px;
}

/* meta info */
.featured-meta{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
    margin:20px 0;
    font-size:14px;
    color:#64748b;
}

.featured-meta i{
    color:#2563eb;
    margin-right:5px;
}

/* buttons */
.featured-actions{
    display:flex;
    gap:15px;
    margin-top:25px;
}

.btn-primary{
    padding:12px 25px;
    background:#2563eb;
    color:#fff;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
    display:inline-block;
}

.btn-primary:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

.btn-outline{
    padding:12px 25px;
    border:2px solid #2563eb;
    color:#2563eb;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
    display:inline-block;
}

.btn-outline:hover{
    background:#2563eb;
    color:#fff;
}

/* ================= CTA ================= */

.cta{
    padding:120px 0;
    text-align:center;
    color:#fff;

    background:
    linear-gradient(
    135deg,
    #2563eb,
    #1d4ed8);

    position:relative;
    overflow:hidden;
}

.cta::before{
    content:"";
    position:absolute;
    width:400px;
    height:400px;
    border-radius:50%;
    background:rgba(255,255,255,.06);
    top:-180px;
    right:-150px;
}

.cta::after{
    content:"";
    position:absolute;
    width:300px;
    height:300px;
    border-radius:50%;
    background:rgba(255,255,255,.05);
    bottom:-120px;
    left:-120px;
}

.cta h2{
    font-size:52px;
    font-weight:800;
}

.cta p{
    font-size:18px;
    margin:20px auto 35px;
}
.cta-btn{
    display:inline-block;
    padding:16px 40px;
    border-radius:50px;
    text-decoration:none;
    background: #567afb;
    color: #fff;
    font-weight:700;
    font-size:16px;
    transition:.3s ease;
    box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.cta-btn:hover{
   transform:translateY(-5px);
    background:#f59e0b;
    color:#fff;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){
    .blog-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .featured-box{
        grid-template-columns:1fr;
    }

    .featured-text h2{
        font-size:30px;
    }
}

@media(max-width:768px) {
    .featured-actions {
        flex-direction: column;
    }
    .btn-primary, .btn-outline {
        width: 100%;
        text-align: center;
    }
}

@media(max-width:600px){
    .blog-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    .blog-content h3{
        font-size:16px;
    }

    .blog-content p{
        font-size:13px;
    }

    .blog-img{
        height:160px;
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
        <h1>School Blog</h1>
        <p>Latest News, Events & Student Stories</p>
    </div>
</section>

<!-- FEATURED POST -->
@if($featured)

<section class="featured">

<div class="container featured-box">

<div class="featured-image">

<img src="{{ asset('uploads/blogs/'.$featured->image) }}">

<div class="featured-badge">
⭐ Featured Story
</div>

</div>

<div class="featured-text">

<span class="featured-tag">
School Highlight
</span>

<h2>{{ $featured->title }}</h2>

<p>
{{ $featured->short_description }}
</p>

<div class="featured-meta">

<span>
<i class="fa-solid fa-calendar"></i>
{{ date('d M Y', strtotime($featured->created_at)) }}
</span>

<span>
<i class="fa-solid fa-user"></i>
{{ $featured->author }}
</span>

</div>

<div class="featured-actions">

<a href="{{ url('/blog/'.$featured->id) }}" class="btn-primary">
Read Full Story
</a>

<a href="#latest" class="btn-outline">
View More Posts
</a>

</div>

</div>

</div>

</section>

@endif

<!-- BLOG POSTS -->
<section>
    <div class="container">

        <h2 class="section-title">Latest Posts</h2>

        <div class="blog-grid" id="latest">

            @foreach($blogs as $blog)

@if(!$featured || $blog->id != $featured->id)

<div class="blog-card">

<div class="blog-img">

<img src="{{ asset('uploads/blogs/'.$blog->image) }}">

</div>

<div class="blog-content">

<div class="blog-date">

{{ date('d M Y', strtotime($blog->created_at)) }}

</div>

<h3>

{{ $blog->title }}

</h3>

<p>

{{ $blog->short_description }}

</p>

<a href="{{ url('/blog/'.$blog->id) }}" class="read-more">
    Read More →
</a>
</div>

</div>

@endif

@endforeach
     
            </div>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta">
    <div class="container">
        <h2>Stay Updated With School News</h2>
        <p>Subscribe to our blog for latest updates</p>
  <a href="{{ url('/applynow') }}" class="cta-btn">
    Apply Now
</a>
    </div>
</section>

@include('includes.footer')
@include('includes.scroll')

</body>
</html>