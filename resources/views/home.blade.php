<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Sublime School System</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
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
}

body{
    font-family:Arial,sans-serif;
    overflow-x:hidden;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

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
html{
    scroll-behavior:smooth;
}


/* ================= PREMIUM HERO ================= */

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    padding:120px 0;
    background:
    radial-gradient(circle at top right, rgba(255,255,255,.15), transparent 30%),
    linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
    position:relative;
    overflow:hidden;
    color:#fff;
}

.hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(255,255,255,.05);
    border-radius:50%;
    top:-200px;
    right:-150px;
}

.hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,.04);
    border-radius:50%;
    bottom:-150px;
    left:-100px;
}

.hero-content{
    width:90%;
    max-width:1300px;
    margin:auto;
    display:grid;
    grid-template-columns:1.1fr 1fr;
    gap:80px;
    align-items:center;
    position:relative;
    z-index:2;
}

/* Text */



.hero-text h1{
    font-size:78px;
    line-height:1.05;
    font-weight:900;
    margin-bottom:25px;
}

.hero-text h1 span{
    color:#fbbf24;
}

.hero-text p{
    font-size:20px;
    line-height:1.9;
    max-width:650px;
    color:rgba(255,255,255,.92);
    margin-bottom:35px;
}

/* Buttons */

.hero-buttons{
    display:flex;
    gap:18px;
    margin-bottom:45px;
}

.btn{
    padding:16px 38px;
    border-radius:60px;
    text-decoration:none;
    font-weight:700;
    transition:.35s ease;
}

.btn{
    background:#fff;
    color:#2563eb;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
}

.btn:hover{
    transform:translateY(-6px);
}

.secondary-btn{
    background:rgba(255,255,255,.12);
    border:1px solid rgba(255,255,255,.25);
    color:#fff;
    backdrop-filter:blur(10px);
}

/* ===== PREMIUM STATS ===== */

.hero-stats{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.hero-stats div{
    min-width:140px;
    padding:25px;
    text-align:center;

    background:rgba(255,255,255,.10);
    backdrop-filter:blur(12px);

    border:1px solid rgba(255,255,255,.15);

    border-radius:20px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.15);

    transition:.3s ease;
}

.hero-stats div:hover{
    transform:translateY(-8px);
}

.hero-stats h2{
    font-size:42px;
    color:#fbbf24;
    margin-bottom:8px;
}

.hero-stats span{
    font-size:15px;
    color:#fff;
}

/* Video / Image */

.hero-video,
.hero-image{
    position:relative;
}

.hero-video video,
.hero-image img{
    width:100%;
    aspect-ratio:16/9;
    object-fit:cover;
    border-radius:30px;

    box-shadow:
    0 30px 80px rgba(0,0,0,.25);

    border:8px solid rgba(255,255,255,.08);
}

/* Glow */

.hero-video::before,
.hero-image::before{
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    background:#3b82f6;
    filter:blur(80px);
    opacity:.25;
    z-index:-1;
}

/* Responsive */

@media(max-width:992px){

    .hero-content{
        grid-template-columns:1fr;
        text-align:center;
    }

    .hero-buttons{
        justify-content:center;
    }

    .hero-stats{
        justify-content:center;
    }

    .hero-text h1{
        font-size:55px;
    }
}

@media(max-width:768px){

    .hero{
        padding:80px 0;
    }

    .hero-text h1{
        font-size:40px;
    }

    .hero-text p{
        font-size:16px;
    }

    .hero-buttons{
        flex-direction:column;
    }

    .hero-stats div{
        width:100%;
        max-width:180px;
    }
}
/* ================= HIGHLIGHTS SECTION ================= */

.highlights{
    padding:100px 0;
    background:#f8fafc;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

.highlight-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

.highlight{
    background:#fff;
    padding:35px 25px;
    text-align:center;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.3s ease;
    border-top:4px solid #2563eb;
}

.highlight:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.12);
}

.highlight i{
    font-size:42px;
    color:#2563eb;
    margin-bottom:15px;
    transition:.3s ease;
}

.highlight:hover i{
    color:#f59e0b;
    transform:scale(1.15);
}

.highlight h3{
    font-size:24px;
    margin-bottom:10px;
    color:#0f172a;
}

.highlight p{
    color:#64748b;
    font-size:15px;
}
.about-school{
    padding:100px 0;
    background:#fff;
}

.about-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

.about-video video{
    width:100%;
    display:block;
    border-radius:25px;
    aspect-ratio:16/9;
    object-fit:cover;
    box-shadow:0 20px 50px rgba(0,0,0,.12);
}
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

.about-text p{
    font-size:18px;
    line-height:1.9;
    color:#475569;
}
.module-card{
    position: relative;
}

.module-card a{
    display: block;
    position: relative;
    z-index: 9999;
}

.module-card img{
    display: block;
    width: 100%;
    pointer-events: auto;
}

@media(max-width:768px){

    .about-content{
        grid-template-columns:1fr;
    }

    .about-text .section-title{
        text-align:center;
    }

    .about-text .section-title::after{
        margin:15px auto;
    }

    .about-text{
        text-align:center;
    }
}

/* Responsive */

@media(max-width:992px){

    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:768px){

    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    .highlight{
        padding:25px 15px;
    }

    .highlight i{
        font-size:32px;
    }

    .highlight h3{
        font-size:18px;
    }

    .highlight p{
        font-size:13px;
    }

}


/* ================= WHY CHOOSE US ================= */

.why-us{
    padding:100px 0;
    background:#ffffff;
}

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

.features{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.feature{
    background:#f8fafc;
    padding:40px 25px;
    text-align:center;
    border-radius:20px;
    transition:.3s ease;
    border:1px solid #e2e8f0;
}

.feature:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.feature i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:20px;
    transition:.3s ease;
}

.feature:hover i{
    color:#f59e0b;
    transform:scale(1.15);
}

.feature h3{
    font-size:22px;
    color:#0f172a;
    font-weight:700;
    line-height:1.4;
}

/* Responsive */

@media(max-width:768px){

    .features{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    .feature{
        padding:25px 15px;
    }

    .feature i{
        font-size:35px;
        margin-bottom:12px;
    }

    .feature h3{
        font-size:16px;
    }

    .section-title{
        font-size:32px;
    }

}
/* learning resources */
.learning-modules{
    padding:120px 0;
    background:
    linear-gradient(135deg,#f8fafc 0%,#eef2ff 50%,#f1f5f9 100%);
}

.modules-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
}

.module-card{
    position:relative;
    background:rgba(255,255,255,.85);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,.6);
    border-radius:24px;
    overflow:hidden;
    box-shadow:
        0 10px 30px rgba(15,23,42,.08),
        0 2px 10px rgba(15,23,42,.04);
    transition:all .4s cubic-bezier(.4,0,.2,1);
}

.module-card::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(
        135deg,
        rgba(99,102,241,.12),
        rgba(59,130,246,.05)
    );
    opacity:0;
    transition:.4s;
    z-index:1;
}

.module-card:hover{
    transform:translateY(-12px);
    box-shadow:
        0 25px 50px rgba(15,23,42,.15),
        0 10px 25px rgba(99,102,241,.15);
}

.module-card:hover::before{
    opacity:1;
}

.module-card img{
    width:100%;
    height:220px;
    object-fit:cover;
    display:block;
    transition:transform .6s ease;
}

.module-card:hover img{
    transform:scale(1.08);
}

.module-card h3{
    position:relative;
    z-index:2;
    padding:22px;
    text-align:center;
    font-size:20px;
    font-weight:700;
    color:#0f172a;
    letter-spacing:.3px;
    line-height:1.4;
}

/* Optional Premium Accent */
.module-card::after{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background:linear-gradient(
        90deg,
        #6366f1,
        #3b82f6,
        #06b6d4
    );
}

/* Tablet */
@media(max-width:992px){
    .modules-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

/* Mobile */
@media(max-width:768px){
    .learning-modules{
        padding:80px 0;
    }

    .modules-grid{
        grid-template-columns:repeat(2,1fr);
        gap:16px;
    }

    .module-card{
        border-radius:18px;
    }

    .module-card img{
        height:140px;
    }

    .module-card h3{
        font-size:15px;
        padding:14px;
    }
}
/* ================= PRINCIPAL MESSAGE ================= */

.principal{
    padding:100px 0;
    background:#f8fafc;
}

.principal-content{
    display:grid;
    grid-template-columns:350px 1fr;
    gap:60px;
    align-items:center;
}

.principal-image{
    position:relative;
}

.principal-image img{
    width:100%;
    display:block;
    border-radius:25px;
    box-shadow:0 20px 50px rgba(0,0,0,.12);
    transition:.4s ease;
}

.principal-image:hover img{
    transform:scale(1.03);
}

.principal-text{
    background:#fff;
    padding:40px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,.06);
}

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

.principal-text p{
    font-size:17px;
    line-height:1.9;
    color:#475569;
    margin-bottom:25px;
}

.principal-text h4{
    font-size:22px;
    color:#2563eb;
    font-weight:700;
}
/* Responsive */

@media(max-width:992px){

    .principal-content{
        grid-template-columns:1fr;
        text-align:center;
    }

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

    .principal-image{
        max-width:350px;
        margin:auto;
    }

}

@media(max-width:768px){

    .principal{
        padding:70px 0;
    }

    .principal-text{
        padding:25px;
    }

}
/* ================= NEWS & EVENTS ================= */

.news{
    padding:100px 0;
    background:#ffffff;
}

.news-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.news-card{
    background:#fff;
    padding:35px 30px;
    border-radius:25px;
    text-align:center;
    border-top:5px solid #2563eb;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.4s ease;
}

.news-card:hover{
    transform:translateY(-12px);
    box-shadow:0 20px 45px rgba(0,0,0,.15);
}

.news-card i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:20px;
    transition:.4s ease;
}

.news-card:hover i{
    color:#f59e0b;
    transform:scale(1.15);
}

.news-card h3{
    font-size:24px;
    color:#0f172a;
    margin-bottom:12px;
    font-weight:700;
}

.news-card p{
    color:#64748b;
    font-size:16px;
    font-weight:500;
}

/* Responsive */

@media(max-width:992px){

    .news-grid{
        grid-template-columns:1fr 1fr;
    }

}

@media(max-width:768px){

    .news{
        padding:70px 0;
    }

    .news-grid{
        grid-template-columns:1fr;
    }

    .news-card{
        padding:30px 20px;
    }

}
/* ================= CTA SECTION ================= */

.cta{
    padding:120px 0;
    text-align:center;
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:#fff;
    position:relative;
    overflow:hidden;
}

.cta::before{
    content:"";
    position:absolute;
    width:400px;
    height:400px;
    border-radius:50%;
    background:rgba(232, 21, 21, 0.08);
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

.cta .container{
    position:relative;
    z-index:2;
}

.cta h2{
    font-size:52px;
    font-weight:800;
    margin-bottom:20px;
    line-height:1.2;
}

.cta p{
    font-size:18px;
    max-width:650px;
    margin:0 auto 35px;
    line-height:1.8;
    color:rgba(255,255,255,.9);
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
    text-decoration:none;
    cursor:pointer;
}
/* Responsive */

@media(max-width:768px){

    .cta{
        padding:80px 0;
    }

    .cta h2{
        font-size:34px;
    }

    .cta p{
        font-size:16px;
    }

}
@media(max-width: 768px) {
    .hero-stats {
        justify-content: center;
        gap: 12px;
    }
    .hero-stats div {
        flex: 1;
        min-width: 100px;
        padding: 15px 10px;
    }
}
    </style>
</head>

<body>
@include('includes.aos')
@include('includes.navbar')
@include('includes.whatsapp')    
<section class="about-school">

    <div class="container about-content">

        <div class="about-video">
            <video autoplay muted loop playsinline>
                <source src="images/v1.mp4" type="video/mp4">
            </video>
        </div>

        <div class="about-text">

            <h2 class="section-title">
                Welcome To Sublime School System
            </h2>

            <p>
                Sublime School System is committed to providing quality education
                in a safe and inspiring environment. Our mission is to develop
                confident, responsible and successful students who can contribute
                positively to society.
            </p>

        </div>

    </div>

</section>

    <section class="hero" id="home">

        <div class="container hero-content">

            <div class="hero-text">

             

                <h1>
                    Building Future Leaders Through
                    <span>Quality Education</span>
                </h1>

                <p>
                    Providing quality education, modern facilities,
                    and a safe learning environment for every student.
                </p>

                <div class="hero-buttons">
                    <a href="{{ url('/applynow') }}" class="btn">Apply For Admission</a>
                    
                </div>

                <div class="hero-stats">

                    <div>
                        <h2>250+</h2>
                        <span>Students</span>
                    </div>

                    <div>
                        <h2>15+</h2>
                        <span>Teachers</span>
                    </div>

                    <div>
                        <h2>25+</h2>
                        <span>Years</span>
                    </div>

                </div>

            </div>

           <div class="hero-video">
    <video autoplay muted loop playsinline>
        <source src="images/v2.mp4" type="video/mp4">
    </video>
</div> 

        </div>

    </section>

    <!-- ================= HIGHLIGHTS ================= -->

    <section class="highlights">

        <div class="container">

            <div class="highlight-grid">

                <div class="highlight">
                    <i class="fas fa-trophy"></i>
                    <h3>25+ Years</h3>
                    <p>Experience</p>
                </div>

                <div class="highlight">
                    <i class="fas fa-user-graduate"></i>
                    <h3>250+</h3>
                    <p>Students</p>
                </div>

                <div class="highlight">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>15+</h3>
                    <p>Teachers</p>
                </div>

                <div class="highlight">
                    <i class="fas fa-book"></i>
                    <h3>100%</h3>
                    <p>Quality Education</p>
                </div>

            </div>

        </div>

    </section>



    <!-- ================= WHY CHOOSE US ================= -->

    <section class="why-us">

        <div class="container">

            <h2 class="section-title">
                Why Choose Us
            </h2>

            <div class="features">

                <div class="feature">
                    <i class="fas fa-book-open"></i>
                    <h3>Modern Curriculum</h3>
                </div>

                <div class="feature">
                    <i class="fas fa-school"></i>
                    <h3>Smart Classrooms</h3>
                </div>

                <div class="feature">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Qualified Teachers</h3>
                </div>
                
                <div class="feature">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Academic Excellence</h3>
                </div>
                <div class="feature">
                    <i class="fas fa-trophy"></i>
                    <h3>Achievements & Awards</h3>
                </div>

                <div class="feature">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Safe Environment</h3>
                </div>

            </div>

        </div>

    </section>

<section class="learning-modules">

    <div class="container">

        <h2 class="section-title">Learning Resources</h2>

        <div class="modules-grid">

            <div class="module-card">
    <a href="{{ asset('images/m1.png') }}" class="module-link">
        <img src="{{ asset('images/m1.png') }}" alt="">
    </a>
    <h3>Teacher Guide</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m2.png') }}" class="module-link">
        <img src="{{ asset('images/m2.png') }}" alt="">
    </a>
    <h3>Topic</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m3.png') }}" class="module-link">
        <img src="{{ asset('images/m3.png') }}" alt="">
    </a>
    <h3>Work Book</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m4.png') }}" class="module-link">
        <img src="{{ asset('images/m4.png') }}" alt="">
    </a>
    <h3>Answer Key</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m5.png') }}" class="module-link">
        <img src="{{ asset('images/m5.png') }}" alt="">
    </a>
    <h3>Videos</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m6.png') }}" class="module-link">
        <img src="{{ asset('images/m6.png') }}" alt="">
    </a>
    <h3>Exam Pack</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m7.jpg') }}" class="module-link">
        <img src="{{ asset('images/m7.jpg') }}" alt="">
    </a>
    <h3>Summer Pack</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m8.png') }}" class="module-link">
        <img src="{{ asset('images/m8.png') }}" alt="">
    </a>
    <h3>Assessment</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m9.png') }}" class="module-link">
        <img src="{{ asset('images/m9.png') }}" alt="">
    </a>
    <h3>Result</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m10.png') }}" class="module-link">
        <img src="{{ asset('images/m10.png') }}" alt="">
    </a>
    <h3>Honour Wall</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m11.png') }}" class="module-link">
        <img src="{{ asset('images/m11.png') }}" alt="">
    </a>
    <h3>Daily Diary</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m12.png') }}" class="module-link">
        <img src="{{ asset('images/m12.png') }}" alt="">
    </a>
    <h3>Mind Map</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m13.png') }}" class="module-link">
        <img src="{{ asset('images/m13.png') }}" alt="">
    </a>
    <h3>Short Questions</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m14.png') }}" class="module-link">
        <img src="{{ asset('images/m14.png') }}" alt="">
    </a>
    <h3>MCQs</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m15.png') }}" class="module-link">
        <img src="{{ asset('images/m15.png') }}" alt="">
    </a>
    <h3>Cross Word</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m16.png') }}" class="module-link">
        <img src="{{ asset('images/m16.png') }}" alt="">
    </a>
    <h3>Word Game</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m17.png') }}" class="module-link">
        <img src="{{ asset('images/m17.png') }}" alt="">
    </a>
    <h3>Jumbled Word</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m18.png') }}" class="module-link">
        <img src="{{ asset('images/m18.png') }}" alt="">
    </a>
    <h3>Activity</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m19.png') }}" class="module-link">
        <img src="{{ asset('images/m19.png') }}" alt="">
    </a>
    <h3>Column</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m20.png') }}" class="module-link">
        <img src="{{ asset('images/m20.png') }}" alt="">
    </a>
    <h3>Fill Ups</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m21.png') }}" class="module-link">
        <img src="{{ asset('images/m21.png') }}" alt="">
    </a>
    <h3>True & False</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m22.png') }}" class="module-link">
        <img src="{{ asset('images/m22.png') }}" alt="">
    </a>
    <h3>Labelling</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m23.png') }}" class="module-link">
        <img src="{{ asset('images/m23.png') }}" alt="">
    </a>
    <h3>Drag & Drop</h3>
</div>

<div class="module-card">
    <a href="{{ asset('images/m24.png') }}" class="module-link">
        <img src="{{ asset('images/m24.png') }}" alt="">
    </a>
    <h3>Applications</h3>
</div>
            
        </div>

    </div>

</section>

    <!-- ================= PRINCIPAL ================= -->

    <section class="principal">

        <div class="container principal-content">

            <div class="principal-image">
                <img src="images/p1.png" alt="Principal">
            </div>

            <div class="principal-text">

                <h2 class="section-title">
                    Principal's Message
                </h2>

                <p>
                    We believe every child has the potential
                    to succeed when provided with the right
                    guidance and opportunities.
                </p>

                <br>

                <h4>Sarfraz Ahmad Bhatti</h4>

            </div>

        </div>

    </section>

    <!-- ================= NEWS ================= -->

    <section class="news">

        <div class="container">

            <h2 class="section-title">
                Latest News & Events
            </h2>

            <div class="news-grid">
<div class="news-card">
    <i class="fas fa-bus"></i>
    <h3>Educational Trip</h3>
    <p>15 October 2026</p>
</div>

               <div class="news-card">
    <i class="fas fa-user-plus"></i>
    <h3>Admissions Open</h3>
    <p>Session 2026-27</p>
</div><div class="news-card">
    <i class="fas fa-flask"></i>
    <h3>Science Exhibition</h3>
    <p>10 July 2026</p>
</div>

            </div>

        </div>

    </section>


    <!-- ================= CTA ================= -->

    <section class="cta">

        <div class="container">

            <h2>
                Ready To Join Our School?
            </h2>

            <p>
                Give your child the best educational experience.
            </p>

            <br>

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
    selector: '.module-link'
});
</script>

</body>
</html>