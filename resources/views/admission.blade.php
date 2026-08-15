<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Admission</title>
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
/* HERO */

.about-hero{
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

.about-hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(255,255,255,.05);
    border-radius:50%;
    top:-200px;
    right:-150px;
}

.about-hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,.04);
    border-radius:50%;
    bottom:-150px;
    left:-100px;
}

.about-hero h1{
    font-size:70px;
    font-weight:900;
    margin-bottom:20px;
}

.about-hero p{
    font-size:20px;
    opacity:.9;
}

/* ABOUT CONTENT */

.about-school{
    padding:120px 0;
    background:#fff;
}

.about-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

.about-image{
    overflow:hidden;
    border-radius:30px;
}

.about-image img{
    width:100%;
    display:block;
    transition:.5s;
}

.about-image:hover img{
    transform:scale(1.05);
}

.about-text .section-title{
    text-align:left;
}

.about-text .section-title::after{
    margin:15px 0 0;
}

.about-text p{
    font-size:18px;
    line-height:1.9;
    color:#475569;
}
/* ==========================
   MISSION / VISION
========================== */

.mission-vision{
    padding:100px 0;
    background:#f8fafc;
}

.mv-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:30px;
}

.mv-card{
    background:rgba(255,255,255,.95);
    padding:45px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
    transition:.4s ease;
    border-top:5px solid #2563eb;
}

.mv-card:hover{
    transform:translateY(-12px);
    box-shadow:0 25px 50px rgba(0,0,0,.15);
}

.mv-card i{
    font-size:55px;
    color:#2563eb;
    margin-bottom:20px;
    transition:.3s;
}

.mv-card:hover i{
    color:#f59e0b;
}

.mv-card h3{
    font-size:26px;
    margin-bottom:15px;
    color:#0f172a;
}

.mv-card p{
    color:#64748b;
    line-height:1.8;
}

/* ==========================
   FEATURES / FACILITIES
========================== */

.facilities{
    padding:100px 0;
    background:#ffffff;
}

.features{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.feature{
    background:#fff;
    padding:40px 25px;
    text-align:center;
    border-radius:20px;
    border-top:4px solid #2563eb;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.35s ease;
}

.feature:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(0,0,0,.15);
}

.feature i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:20px;
    transition:.3s;
}

.feature:hover i{
    color:#f59e0b;
}

.feature h3{
    font-size:20px;
    color:#0f172a;
}

/* ==========================
   ADMISSION CLASSES
========================== */

.class-grid{
    display:grid;
    grid-template-columns:repeat(5,1fr);
    gap:20px;
}

.class-card{
    background:#fff;
    padding:35px 20px;
    text-align:center;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s ease;
}

.class-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.12);
}

.class-card i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:15px;
}

.class-card:hover i{
    color:#f59e0b;
}

/* ==========================
   DOCUMENTS
========================== */

.document-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.document-card{
    background:#fff;
    padding:35px;
    border-radius:20px;
    text-align:center;
    border-top:4px solid #2563eb;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.document-card:hover{
    transform:translateY(-8px);
}

.document-card i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:15px;
}

.document-card:hover i{
    color:#f59e0b;
}

/* ==========================
   STATS SECTION
========================== */

.stats{
    padding:100px 0;
    background:#fff;
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
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.35s ease;
}

.highlight:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.12);
}

.highlight h2{
    color:#2563eb;
    font-size:42px;
    margin-bottom:10px;
}

.highlight p{
    color:#64748b;
    font-size:16px;
}
/* ==========================
   ADMISSION FORM
========================== */

.apply-form{
    padding:100px 0;
    background:#f8fafc;
}

.form-box{
    max-width:900px;
    margin:auto;
    background:#fff;
    padding:50px;
    border-radius:25px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
}

.form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:8px;
    font-weight:600;
    color:#0f172a;
}

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    padding:15px 18px;
    border:1px solid #dbeafe;
    border-radius:12px;
    outline:none;
    font-size:15px;
    transition:.3s ease;
    background:#fff;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.12);
}

.form-group textarea{
    resize:vertical;
    min-height:140px;
}

.form-group.full{
    grid-column:1 / 3;
}

/* ==========================
   BUTTONS
========================== */
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

/* ==========================
   CTA SECTION
========================== */

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

/* ==========================
   ANIMATIONS
========================== */

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

/* Hover Animation */

.feature,
.highlight,
.mv-card,
.class-card,
.document-card,
.process-card{
    cursor:pointer;
}

/* ==========================
   RESPONSIVE 992px
========================== */

@media(max-width:992px){

    .about-content{
        grid-template-columns:1fr;
    }

    .mv-grid{
        grid-template-columns:1fr;
    }

    .features{
        grid-template-columns:repeat(2,1fr);
    }

    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .document-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .class-grid{
        grid-template-columns:repeat(3,1fr);
    }

    .form-grid{
        grid-template-columns:1fr;
    }

    .form-group.full{
        grid-column:auto;
    }
}

/* ==========================
   RESPONSIVE 768px
========================== */

@media(max-width:768px){

    section{
        padding:80px 0;
    }

    .about-hero{
        min-height:50vh;
    }

    .about-hero h1{
        font-size:42px;
    }

    .about-hero p{
        font-size:17px;
    }

    .section-title{
        font-size:32px;
        margin-bottom:40px;
    }

    .features,
    .highlight-grid,
    .document-grid,
    .class-grid,
    .mv-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    .form-box{
        padding:30px 20px;
    }

    .cta{
        padding:90px 0;
    }

    .cta h2{
        font-size:34px;
    }

    .cta p{
        font-size:16px;
    }
}
/* ==========================
   RESPONSIVE 576px
========================== */

@media(max-width:576px){

    .about-hero h1{
        font-size:34px;
    }

    .section-title{
        font-size:28px;
    }

    .mv-card,
    .feature,
    .highlight,
    .document-card,
    .class-card{
        padding:25px;
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


<!-- ADMISSION HERO -->

<section class="about-hero">

    <div class="container">

        <h1>Admissions Open 2026</h1>

        <p>
            Start Your Child's Journey Towards Academic Excellence
        </p>

    </div>

</section>
<section class="facilities">

    <div class="container">

        <h2 class="section-title">
            Admissions Available For
        </h2>

        <div class="features">

            <div class="feature">
                <i class="fas fa-child"></i>
                <h3>Play Group</h3>
            </div>

            <div class="feature">
                <i class="fas fa-pencil-alt"></i>
                <h3>Nursery</h3>
            </div>

            <div class="feature">
                <i class="fas fa-book-open"></i>
                <h3>Primary</h3>
            </div>

            <div class="feature">
                <i class="fas fa-graduation-cap"></i>
                <h3>Middle</h3>
            </div>

            <div class="feature">
                <i class="fas fa-user-graduate"></i>
                <h3>Matric</h3>
            </div>

        </div>

    </div>

</section>
<!-- ADMISSION INTRO -->

<section class="about-school">

    <div class="container about-content">

        <div class="about-image">
            <img src="images/a2.png" alt="Admission">
        </div>

        <div class="about-text">

            <h2 class="section-title">
                Admission Information
            </h2>

            <p>
                Sublime School System welcomes students from Play Group
                to Matric. We provide a nurturing environment where
                students develop academically, socially and morally.
            </p>

            <p>
                Admissions are granted on merit and seat availability.
                Parents are encouraged to visit the campus and meet our
                admission counselors.
            </p>

        </div>

    </div>

</section>

<!-- ADMISSION PROCESS -->

<section class="mission-vision">

    <div class="container">

        <h2 class="section-title">
            Admission Process
        </h2>

        <div class="mv-grid">

            <div class="mv-card">
                <i class="fas fa-file-alt"></i>
                <h3>Step 1</h3>
                <p>
                    Collect or download the admission form.
                </p>
            </div>

            <div class="mv-card">
                <i class="fas fa-edit"></i>
                <h3>Step 2</h3>
                <p>
                    Complete the application form carefully.
                </p>
            </div>

            <div class="mv-card">
                <i class="fas fa-user-graduate"></i>
                <h3>Step 3</h3>
                <p>
                    Student assessment/interview (if required).
                </p>
            </div>

            <div class="mv-card">
                <i class="fas fa-check-circle"></i>
                <h3>Step 4</h3>
                <p>
                    Confirmation and fee submission.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- REQUIRED DOCUMENTS -->

<section class="facilities">

    <div class="container">

        <h2 class="section-title">
            Required Documents
        </h2>

        <div class="features">

            <div class="feature">
                <i class="fas fa-id-card"></i>
                <h3>B-Form Copy</h3>
            </div>

            <div class="feature">
                <i class="fas fa-camera"></i>
                <h3>Passport Photos</h3>
            </div>

            <div class="feature">
                <i class="fas fa-file"></i>
                <h3>Previous Result Card</h3>
            </div>

            <div class="feature">
                <i class="fas fa-home"></i>
                <h3>Parent CNIC Copy</h3>
            </div>

            <div class="feature">
                <i class="fas fa-school"></i>
                <h3>School Leaving Certificate</h3>
            </div>

            <div class="feature">
                <i class="fas fa-folder-open"></i>
                <h3>Admission Form</h3>
            </div>

        </div>

    </div>

</section>

<!-- WHY CHOOSE US -->

<section class="stats">

    <div class="container">

        <h2 class="section-title">
            Why Choose Sublime School?
        </h2>

        <div class="highlight-grid">

            <div class="highlight">
                <h2>25+</h2>
                <p>Years Experience</p>
            </div>

            <div class="highlight">
                <h2>15+</h2>
                <p>Qualified Teachers</p>
            </div>

            <div class="highlight">
                <h2>250+</h2>
                <p>Students</p>
            </div>

            <div class="highlight">
                <h2>100%</h2>
                <p>Safe Environment</p>
            </div>

        </div>

    </div>

</section>

<!-- APPLY NOW -->

<section class="cta">

    <div class="container">

        <h2>
            Secure Your Child's Future Today
        </h2>

        <p>
            Admissions are open. Limited seats available.
        </p>

        <br>

        <a href="{{ url('/applynow') }}" class="btn">
    Apply Now
</a>

    </div>

</section>


 @include('includes.footer')
@include('includes.scroll')
</body>
</html>