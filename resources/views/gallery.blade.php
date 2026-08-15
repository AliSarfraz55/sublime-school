<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Gallery</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
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
    font-family:Arial, sans-serif;
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

.section-title{
    font-size:42px;
    font-weight:800;
    color:#0f172a;
    text-align:center;
    display:block;
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

/* ================= GALLERY HERO ================= */

.gallery-hero{
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

.gallery-hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    border-radius:50%;
    background:rgba(255,255,255,.05);
    top:-200px;
    right:-150px;
}

.gallery-hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    border-radius:50%;
    background:rgba(255,255,255,.04);
    bottom:-150px;
    left:-100px;
}

.gallery-hero h1{
    font-size:70px;
    font-weight:900;
    margin-bottom:20px;
    position:relative;
    z-index:2;
}

.gallery-hero p{
    font-size:20px;
    opacity:.9;
    position:relative;
    z-index:2;
}

/* ================= GALLERY SECTION ================= */

.gallery{
    padding:100px 0;
    background:#fff;
}

.gallery-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.gallery-item{
    position:relative;
    overflow:hidden;
    border-radius:25px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);

    transition:.4s ease;
}

.gallery-item:hover{
    transform:translateY(-10px);

    box-shadow:
    0 20px 50px rgba(0,0,0,.15);
}

.gallery-item img{
    width:100%;
    height:280px;
    object-fit:cover;
    display:block;

    transition:.5s ease;
}

.gallery-item:hover img{
    transform:scale(1.1);
}

/* ================= IMAGE OVERLAY ================= */

.overlay{
    position:absolute;
    inset:0;

    background:
    linear-gradient(
        rgba(15,23,42,.1),
        rgba(15,23,42,.85)
    );

    display:flex;
    align-items:center;
    justify-content:center;

    opacity:0;
    transition:.4s ease;
}

.gallery-item:hover .overlay{
    opacity:1;
}

.overlay h3{
    color:#fff;
    font-size:24px;
    font-weight:700;
    text-align:center;
    transform:translateY(20px);
    transition:.4s ease;
}

.gallery-item:hover .overlay h3{
    transform:translateY(0);
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
.cta .btn{
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

.cta .btn:hover{
    transform:translateY(-5px);
    background:#f59e0b;
    color:#fff;
}

.btn{
    display:inline-block;
    padding:16px 40px;
    border-radius:60px;
    text-decoration:none;
    font-weight:700;

    background:#fff;
    color:#2563eb;

    transition:.35s ease;

    box-shadow:
    0 15px 35px rgba(0,0,0,.2);
}

.btn:hover{
    transform:translateY(-6px);
}


/* ================= ANIMATION ================= */

.animate{
    animation:fadeUp 1s ease forwards;
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(50px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){

    .gallery-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .cta h2{
        font-size:40px;
    }
}

@media(max-width:768px){

    .gallery-hero h1{
        font-size:42px;
    }

    .gallery-hero p{
        font-size:17px;
    }

    .gallery-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    .gallery-item img{
        height:180px;
    }

    .section-title{
        font-size:32px;
    }

    .cta h2{
        font-size:32px;
    }

    .cta p{
        font-size:16px;
    }
}
    </style>
</head>
   

<body>
    @include('includes.aos')
        @include('includes.navbar')
@include('includes.whatsapp') 
   


<!-- GALLERY HERO -->

<section class="gallery-hero">

    <div class="container">

        <h1>School Gallery</h1>

        <p>
            Capturing Beautiful Moments of Learning, Growth & Success
        </p>

    </div>

</section>

<!-- GALLERY -->

<section class="gallery">

    <div class="container">

        <h2 class="section-title">
            Our Gallery
        </h2>

        <div class="gallery-grid">

@foreach($galleries as $image)

<div class="gallery-item">

    <a href="{{ asset('uploads/gallery/'.$image->image) }}" class="gallery-link">

        <img src="{{ asset('uploads/gallery/'.$image->image) }}" alt="{{ $image->title }}">

        <div class="overlay">
            <h3>{{ $image->title }}</h3>
        </div>

    </a>

</div>

@endforeach

        </div>

    </div>

</section>

<!-- CTA -->

<section class="cta">

    <div class="container">

        <h2>
            Creating Memories Every Day
        </h2>

        <p>
            Explore the vibrant life at Sublime School System.
        </p>

        <a href="{{ url('/applynow') }}" class="btn">
    Apply Now
</a>

    </div>

</section>



 @include('includes.footer')
@include('includes.scroll')
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
const lightbox = GLightbox({
    selector: '.gallery-link'
});
</script>
</body>
</html>