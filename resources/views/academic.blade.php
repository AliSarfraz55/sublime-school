<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Academic</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="style.css">

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

/* =========================
SECTION TITLE
========================= */

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

/* =========================
BUTTON
========================= */

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

/* =========================
ACADEMICS HERO
========================= */

.academics-hero{
    min-height:60vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    position:relative;
    overflow:hidden;

    background:
    radial-gradient(circle at top right,
    rgba(255,255,255,.12),
    transparent 30%),
    linear-gradient(
    135deg,
    #0f172a,
    #1e3a8a,
    #2563eb);
}

.academics-hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    border-radius:50%;
    background:rgba(255,255,255,.05);
    top:-220px;
    right:-150px;
}

.academics-hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    border-radius:50%;
    background:rgba(255,255,255,.04);
    bottom:-150px;
    left:-100px;
}

.academics-hero h1{
    font-size:70px;
    font-weight:900;
    margin-bottom:20px;
}

.academics-hero p{
    font-size:20px;
    opacity:.9;
}
/* ===================================
   ACADEMIC PROGRAMS
=================================== */

.programs{
    padding:100px 0;
    background:#ffffff;
}

.program-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.program-card{
    background:#fff;
    padding:45px 30px;
    text-align:center;
    border-radius:25px;
    border-top:5px solid #2563eb;

    box-shadow:
    0 12px 35px rgba(0,0,0,.08);

    transition:.4s ease;
}

.program-card:hover{
    transform:translateY(-12px);
    box-shadow:
    0 22px 50px rgba(0,0,0,.15);
}

.program-card i{
    font-size:55px;
    color:#2563eb;
    margin-bottom:20px;
    transition:.3s ease;
}

.program-card:hover i{
    color:#f59e0b;
}

.program-card h3{
    font-size:24px;
    color:#0f172a;
    margin-bottom:15px;
    font-weight:700;
}

.program-card p{
    color:#64748b;
    line-height:1.9;
    font-size:15px;
}
/* ===================================
   CURRICULUM SECTION
=================================== */

.curriculum{
    padding:100px 0;
    background:#f8fafc;
}

.curriculum-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:70px;
    align-items:center;
}

.curriculum-image{
    overflow:hidden;
    border-radius:30px;
}

.curriculum-image img{
    width:100%;
    display:block;
    border-radius:30px;

    box-shadow:
    0 25px 60px rgba(0,0,0,.12);

    transition:.5s ease;
}

.curriculum-image:hover img{
    transform:scale(1.05);
}

.curriculum-text .section-title{
    text-align:left;
    margin-bottom:25px;
}

.curriculum-text .section-title::after{
    margin:15px 0 0;
}

.curriculum-text p{
    font-size:18px;
    line-height:2;
    color:#475569;
}

.curriculum-text ul{
    margin-top:25px;
    list-style:none;
}

.curriculum-text ul li{
    margin-bottom:15px;
    font-size:16px;
    color:#334155;
    position:relative;
    padding-left:28px;
}

.curriculum-text ul li::before{
    content:"✓";
    position:absolute;
    left:0;
    color:#2563eb;
    font-weight:bold;
}
/* ===================================
   SUBJECTS SECTION
=================================== */

.subjects{
    padding:100px 0;
    background:#ffffff;
}

.subject-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

.subject-card{
    background:#fff;
    padding:35px 20px;
    border-radius:20px;
    text-align:center;
    border-top:4px solid #2563eb;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.35s ease;
    font-weight:700;
    color:#0f172a;
}

.subject-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.14);
}

.subject-card i{
    font-size:40px;
    color:#2563eb;
    margin-bottom:15px;
    display:block;
}

.subject-card:hover i{
    color:#f59e0b;
}

/* ===================================
   EXAMINATION SYSTEM
=================================== */

.exams{
    padding:100px 0;
    background:#f8fafc;
}

.exam-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.exam-card{
    background:#fff;
    padding:40px 30px;
    border-radius:25px;
    text-align:center;
    border-top:5px solid #2563eb;
    box-shadow:0 12px 35px rgba(0,0,0,.08);
    transition:.35s ease;
}

.exam-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(0,0,0,.14);
}

.exam-card i{
    font-size:50px;
    color:#2563eb;
    margin-bottom:20px;
}

.exam-card:hover i{
    color:#f59e0b;
}

.exam-card h3{
    font-size:24px;
    color:#0f172a;
    margin-bottom:15px;
}

.exam-card p{
    color:#64748b;
    line-height:1.8;
    font-size:15px;
}
/* ===================================
   ACADEMIC ACHIEVEMENTS
=================================== */

.achievements{
    padding:100px 0;
    background:#ffffff;
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

    border-top:4px solid #2563eb;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);

    transition:.35s ease;
}

.highlight:hover{
    transform:translateY(-10px);

    box-shadow:
    0 20px 45px rgba(0,0,0,.15);
}

.highlight h2{
    font-size:42px;
    color:#2563eb;
    margin-bottom:10px;
    font-weight:800;
}

.highlight p{
    color:#64748b;
    font-size:16px;
    font-weight:600;
}

/* ===================================
   CTA SECTION
=================================== */

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

/* ===================================
   COMPLETE RESPONSIVE CSS
=================================== */

@media(max-width:992px){

    .overview-content,
    .curriculum-content{
        grid-template-columns:1fr;
        gap:40px;
    }

    .program-grid,
    .exam-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .subject-grid,
    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .overview-text .section-title,
    .curriculum-text .section-title{
        text-align:center;
    }

    .overview-text .section-title::after,
    .curriculum-text .section-title::after{
        margin:15px auto 0;
    }
}

@media(max-width:768px){

    .program-grid,
    .subject-grid,
    .exam-grid,
    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }
}
@media(max-width:480px){

    .program-grid,
    .subject-grid,
    .exam-grid,
    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
        gap:12px;
    }

    .academics-hero h1{
        font-size:34px;
    }

    .section-title{
        font-size:28px;
    }

    .cta h2{
        font-size:28px;
    }
}
</style>
<body>
    @include('includes.aos')
    @include('includes.navbar')
@include('includes.whatsapp')    

    <!-- HERO -->
<section class="academics-hero">
    <div class="container">
        <h1>Academics</h1>
        <p>Empowering Students Through Quality Education</p>
    </div>
</section>

<!-- ACADEMIC OVERVIEW -->
<section class="academic-overview">
    <div class="container overview-content">

        <div class="overview-image">
            <img src="images/academics.jpg" alt="">
        </div>

        <div class="overview-text">
            <h2 class="section-title">Academic Excellence</h2>

            <p>
                At Sublime School System, we provide a comprehensive
                curriculum designed to develop critical thinking,
                creativity and leadership skills. Our academic
                programs prepare students for future success.
            </p>
        </div>

    </div>
</section>

<!-- PROGRAMS -->
<section class="programs">

    <div class="container">

        <h2 class="section-title">Academic Programs</h2>

        <div class="program-grid">

            <div class="program-card">
                <i class="fas fa-child"></i>
                <h3>Pre School</h3>
                <p>Activity-based learning and development.</p>
            </div>

            <div class="program-card">
                <i class="fas fa-book-reader"></i>
                <h3>Primary</h3>
                <p>Strong foundation in academics and character.</p>
            </div>

            <div class="program-card">
                <i class="fas fa-user-graduate"></i>
                <h3>Secondary</h3>
                <p>Preparation for higher education and careers.</p>
            </div>

        </div>

    </div>

</section>

<!-- SUBJECTS -->
<section class="subjects">

    <div class="container">

        <h2 class="section-title">Subjects Offered</h2>

        <div class="subject-grid">

            <div class="subject-card">
                <i class="fas fa-language"></i>
                <h3>English</h3>
            </div>

            <div class="subject-card">
                <i class="fas fa-calculator"></i>
                <h3>Mathematics</h3>
            </div>

            <div class="subject-card">
                <i class="fas fa-flask"></i>
                <h3>Science</h3>
            </div>

            <div class="subject-card">
                <i class="fas fa-computer"></i>
                <h3>Computer</h3>
            </div>

            <div class="subject-card">
                <i class="fas fa-book"></i>
                <h3>Urdu</h3>
            </div>

            <div class="subject-card">
                <i class="fas fa-mosque"></i>
                <h3>Islamiyat</h3>
            </div>

        </div>

    </div>

</section>

<!-- EXAM SYSTEM -->
<section class="exams">

    <div class="container">

        <h2 class="section-title">Examination System</h2>

        <div class="exam-grid">

            <div class="exam-card">
                <i class="fas fa-file-alt"></i>
                <h3>Monthly Tests</h3>
            </div>

            <div class="exam-card">
                <i class="fas fa-clipboard-check"></i>
                <h3>Mid Term Exams</h3>
            </div>

            <div class="exam-card">
                <i class="fas fa-award"></i>
                <h3>Final Exams</h3>
            </div>

        </div>

    </div>

</section>

<!-- ACHIEVEMENTS -->
<section class="achievements">

    <div class="container">

        <h2 class="section-title">Academic Achievements</h2>

        <div class="highlight-grid">

            <div class="highlight">
                <h2>98%</h2>
                <p>Board Results</p>
            </div>

            <div class="highlight">
                <h2>500+</h2>
                <p>Top Graduates</p>
            </div>

            <div class="highlight">
                <h2>50+</h2>
                <p>Competitions Won</p>
            </div>

            <div class="highlight">
                <h2>25+</h2>
                <p>Years Success</p>
            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="cta">

    <div class="container">

        <h2>Shape Your Child's Future With Us</h2>

        <p>
            Admissions Open For New Session
        </p>

        <a href="{{ url('/applynow') }}" class="btn">
    Apply Now
</a>

    </div>

</section>
 @include('includes.footer')
@include('includes.scroll')
</body>
</html>