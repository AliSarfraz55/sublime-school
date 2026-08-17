<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Sublime School System</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
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
    -webkit-tap-highlight-color: transparent;
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
    background:#fff;
    color:#2563eb;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
    display:inline-block;
    cursor:pointer;
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
    box-shadow:0 10px 30px rgba(0,0,0,.15);
    transition:.3s ease;
    cursor: pointer;
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
    box-shadow:0 30px 80px rgba(0,0,0,.25);
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
    cursor:pointer;
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

.about-text p{
    font-size:18px;
    line-height:1.9;
    color:#475569;
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
    cursor:pointer;
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
    cursor: pointer;
}

/* Remove blue link color and underlines inside module cards */
.module-card a {
    text-decoration: none;
    color: inherit;
    display: block;
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
    pointer-events: none; /* Allows click to pass through the hover overlay */
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
    position: relative;
    z-index: 2;
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
    cursor: pointer;
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
    cursor: pointer;
    transition: 0.3s ease;
}

.principal-text:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,.12);
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
    cursor: pointer;
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

/* Footer Single Line Address Fix */
.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 18px;
    color: #cbd5e1;
}
.contact-item i {
    flex-shrink: 0;
}
.contact-item span {
    white-space: nowrap;
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

/* ================= CUSTOM UNIVERSAL MODAL POPUP ================= */
.custom-modal {
    display: none;
    position: fixed;
    z-index: 99999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(8px);
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.custom-modal-content {
    background: #fff;
    width: 100%;
    max-width: 650px;
    max-height: 85vh;
    overflow-y: auto;
    padding: 40px;
    border-radius: 24px;
    position: relative;
    box-shadow: 0 25px 60px rgba(0,0,0,0.3);
    animation: modalZoom 0.3s ease;
    text-align: left;
}

.custom-modal-close {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 32px;
    color: #0f172a;
    cursor: pointer;
    transition: 0.3s;
    z-index: 10;
}

.custom-modal-close:hover {
    color: #2563eb;
}

#modalIcon {
    font-size: 45px;
    color: #2563eb;
    margin-bottom: 15px;
    display: block;
    text-align: center;
}

#modalTitle {
    font-size: 28px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 20px;
    text-align: center;
}

#modalDesc {
    font-size: 16px;
    line-height: 1.9;
    color: #475569;
}

@keyframes modalZoom {
    from {
        transform: scale(0.7);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
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

                    <div onclick="openModal('250+ Enrolled Students Community', 'Our vibrant student community comprises over 250 energetic and disciplined minds actively engaged in rigorous academic coursework, competitive sports tournaments, science exhibitions, and creative art clubs.\n\nWe carefully maintain an optimal student-teacher ratio to guarantee personalized mentorship, individual academic attention, and holistic emotional and moral development for every child.\n\nOur students consistently demonstrate exemplary discipline, mutual respect, and enthusiasm for learning across all school activities.\n\nThrough structured teamwork and collaborative group projects, they build lifelong friendships and exceptional leadership skills from an early age.', 'fas fa-user-graduate')">
                        <h2>250+</h2>
                        <span>Students</span>
                    </div>

                    <div onclick="openModal('Dedicated & Expert Faculty (15+ Teachers)', 'Our teaching staff consists of seasoned educators and subject-matter experts who employ modern pedagogical strategies. They focus heavily on individual student attention, emotional intelligence, critical thinking, and interactive classroom participation to ensure comprehensive learning outcomes.', 'fas fa-chalkboard-teacher')">
                        <h2>15+</h2>
                        <span>Teachers</span>
                    </div>

                    <div onclick="openModal('25+ Years of Proven Milestone Success', 'With more than two and a half decades of uncompromised educational standards, our institution continues to pioneer innovative learning methodologies. We celebrate a rich history of producing top-tier board position holders, dynamic leaders, and responsible citizens.', 'fas fa-award')">
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

                <div class="highlight" onclick="openModal('25+ Years of Educational Experience', 'Our 25+ years of institutional experience reflect our deep expertise in child psychology, modern curriculum delivery, and character building. We have continuously evolved our infrastructure and teaching methodologies to match global educational standards while retaining core moral values.', 'fas fa-trophy')">
                    <i class="fas fa-trophy"></i>
                    <h3>25+ Years</h3>
                    <p>Experience</p>
                </div>

                <div class="highlight" onclick="openModal('250+ Enrolled Students Community', 'Our student body comprises 250+ energetic minds engaged in rigorous academic programs, competitive sports, science clubs, and creative arts. We maintain an optimal student-teacher ratio to guarantee personalized mentorship for every child.', 'fas fa-user-graduate')">
                    <i class="fas fa-user-graduate"></i>
                    <h3>250+</h3>
                    <p>Students</p>
                </div>

                <div class="highlight" onclick="openModal('15+ Highly Qualified Instructors', 'Our 15+ faculty members undergo continuous professional development workshops. They are well-versed in modern smart-classroom techniques, activity-based learning, and comprehensive student evaluation systems.', 'fas fa-chalkboard-teacher')">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>15+</h3>
                    <p>Teachers</p>
                </div>

                <div class="highlight" onclick="openModal('100% Commitment to Quality Education', 'We ensure 100% delivery of standard-compliant education that nurtures cognitive, physical, and emotional growth. Our assessment frameworks are designed to test analytical skills rather than rote memorization.', 'fas fa-book')">
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

                <div class="feature" onclick="openModal('Modern Curriculum Framework', 'Our modern curriculum is carefully structured to balance core academics with 21st-century essential skills such as digital literacy, creative problem solving, financial awareness, and effective interpersonal communication.', 'fas fa-book-open')">
                    <i class="fas fa-book-open"></i>
                    <h3>Modern Curriculum</h3>
                </div>

                <div class="feature" onclick="openModal('State-of-the-Art Smart Classrooms', 'Equipped with high-speed internet, interactive multimedia projectors, digital boards, and ergonomic furniture, our smart classrooms transform traditional lessons into immersive, engaging visual learning experiences.', 'fas fa-school')">
                    <i class="fas fa-school"></i>
                    <h3>Smart Classrooms</h3>
                </div>

                <div class="feature" onclick="openModal('Qualified & Passionate Teachers', 'Our educators are not just instructors; they are inspirational role models. Hand-picked through rigorous screening processes, they instill high moral standards, discipline, and academic passion in every student.', 'fas fa-chalkboard-teacher')">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Qualified Teachers</h3>
                </div>
                
                <div class="feature" onclick="openModal('Unmatched Academic Excellence', 'We have a long-standing track record of academic excellence, marked by exceptional board examination results, high scholarship attainments, and competitive success across various inter-school platforms.', 'fas fa-graduation-cap')">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Academic Excellence</h3>
                </div>
                <div class="feature" onclick="openModal('Achievements & Extracurricular Awards', 'Beyond textbooks, our students shine brightly in district and provincial sports championships, declamation contests, art competitions, and annual science exhibitions.', 'fas fa-trophy')">
                    <i class="fas fa-trophy"></i>
                    <h3>Achievements & Awards</h3>
                </div>

                <div class="feature" onclick="openModal('Strictly Safe & Secure Environment', 'Safety is our utmost priority. The campus is monitored 24/7 via advanced CCTV security systems, secured entry gates, strict visitor logs, and dedicated staff to ensure a peaceful atmosphere.', 'fas fa-shield-alt')">
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
                <a href="{{ asset('images/m1.png') }}" class="gallery-link" data-title="Teacher Guide">
                    <img src="{{ asset('images/m1.png') }}" alt="Teacher Guide">
                    <h3>Teacher Guide</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m2.png') }}" class="gallery-link" data-title="Topic">
                    <img src="{{ asset('images/m2.png') }}" alt="Topic">
                    <h3>Topic</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m3.png') }}" class="gallery-link" data-title="Work Book">
                    <img src="{{ asset('images/m3.png') }}" alt="Work Book">
                    <h3>Work Book</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m4.png') }}" class="gallery-link" data-title="Answer Key">
                    <img src="{{ asset('images/m4.png') }}" alt="Answer Key">
                    <h3>Answer Key</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m5.png') }}" class="gallery-link" data-title="Videos">
                    <img src="{{ asset('images/m5.png') }}" alt="Videos">
                    <h3>Videos</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m6.png') }}" class="gallery-link" data-title="Exam Pack">
                    <img src="{{ asset('images/m6.png') }}" alt="Exam Pack">
                    <h3>Exam Pack</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m7.jpg') }}" class="gallery-link" data-title="Summer Pack">
                    <img src="{{ asset('images/m7.jpg') }}" alt="Summer Pack">
                    <h3>Summer Pack</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m8.png') }}" class="gallery-link" data-title="Assessment">
                    <img src="{{ asset('images/m8.png') }}" alt="Assessment">
                    <h3>Assessment</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m9.png') }}" class="gallery-link" data-title="Result">
                    <img src="{{ asset('images/m9.png') }}" alt="Result">
                    <h3>Result</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m10.png') }}" class="gallery-link" data-title="Honour Wall">
                    <img src="{{ asset('images/m10.png') }}" alt="Honour Wall">
                    <h3>Honour Wall</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m11.png') }}" class="gallery-link" data-title="Daily Diary">
                    <img src="{{ asset('images/m11.png') }}" alt="Daily Diary">
                    <h3>Daily Diary</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m12.png') }}" class="gallery-link" data-title="Mind Map">
                    <img src="{{ asset('images/m12.png') }}" alt="Mind Map">
                    <h3>Mind Map</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m13.png') }}" class="gallery-link" data-title="Short Questions">
                    <img src="{{ asset('images/m13.png') }}" alt="Short Questions">
                    <h3>Short Questions</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m14.png') }}" class="gallery-link" data-title="MCQs">
                    <img src="{{ asset('images/m14.png') }}" alt="MCQs">
                    <h3>MCQs</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m15.png') }}" class="gallery-link" data-title="Cross Word">
                    <img src="{{ asset('images/m15.png') }}" alt="Cross Word">
                    <h3>Cross Word</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m16.png') }}" class="gallery-link" data-title="Word Game">
                    <img src="{{ asset('images/m16.png') }}" alt="Word Game">
                    <h3>Word Game</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m17.png') }}" class="gallery-link" data-title="Jumbled Word">
                    <img src="{{ asset('images/m17.png') }}" alt="Jumbled Word">
                    <h3>Jumbled Word</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m18.png') }}" class="gallery-link" data-title="Activity">
                    <img src="{{ asset('images/m18.png') }}" alt="Activity">
                    <h3>Activity</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m19.png') }}" class="gallery-link" data-title="Column">
                    <img src="{{ asset('images/m19.png') }}" alt="Column">
                    <h3>Column</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m20.png') }}" class="gallery-link" data-title="Fill Ups">
                    <img src="{{ asset('images/m20.png') }}" alt="Fill Ups">
                    <h3>Fill Ups</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m21.png') }}" class="gallery-link" data-title="True & False">
                    <img src="{{ asset('images/m21.png') }}" alt="True & False">
                    <h3>True & False</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m22.png') }}" class="gallery-link" data-title="Labelling">
                    <img src="{{ asset('images/m22.png') }}" alt="Labelling">
                    <h3>Labelling</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m23.png') }}" class="gallery-link" data-title="Drag & Drop">
                    <img src="{{ asset('images/m23.png') }}" alt="Drag & Drop">
                    <h3>Drag & Drop</h3>
                </a>
            </div>

            <div class="module-card">
                <a href="{{ asset('images/m24.png') }}" class="gallery-link" data-title="Applications">
                    <img src="{{ asset('images/m24.png') }}" alt="Applications">
                    <h3>Applications</h3>
                </a>
            </div>
            
        </div>

    </div>

</section>

    <!-- ================= PRINCIPAL ================= -->

    <section class="principal">

        <div class="container principal-content">

            <div class="principal-image">
                <a href="{{ asset('images/p1.png') }}" class="gallery-link" data-title="Principal - Sarfraz Ahmad Bhatti">
                    <img src="{{ asset('images/p1.png') }}" alt="Principal">
                </a>
            </div>

            <div class="principal-text" onclick="openModal('Principal\'s Complete Message', 'Dear Parents, Students, and Well-Wishers,\n\nWelcome to Sublime School System! As the Principal, it is my utmost privilege to lead an institution where education transcends ordinary textbooks and shapes the holistic character of every child.\n\nWe firmly believe that every child possesses unique potential waiting to be unlocked. Our dedicated faculty and staff work tirelessly to foster an inspiring, disciplined, and nurturing environment where curiosity is encouraged, moral values are deeply instilled, and academic rigor goes hand-in-hand with emotional well-being.\n\nEducation is a collaborative partnership between the school, parents, and the community. Together, we can guide our students to become confident, resilient, and socially responsible leaders of tomorrow. Thank you for entrusting us with your child\'s future.\n\nWarm Regards,\nSarfraz Ahmad Bhatti', 'fas fa-user-tie')">

                <h2 class="section-title">
                    Principal's Message
                </h2>

                <p>
                    We believe every child has the potential
                    to succeed when provided with the right
                    guidance and opportunities. (Click here to read full message)
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
                <div class="news-card" onclick="openModal('Educational Trip Details', 'Date: 15 October 2026.\n\nOur upcoming educational trip aims to provide students with practical, outdoor exposure. Trips are carefully planned to historical or scientific landmarks to bridge classroom concepts with real-world experiences. Safety protocols and teacher escorts are fully arranged to ensure a memorable journey.', 'fas fa-bus')">
                    <i class="fas fa-bus"></i>
                    <h3>Educational Trip</h3>
                    <p>15 October 2026</p>
                </div>

                <div class="news-card" onclick="openModal('Admissions Open (Session 2026-27)', 'Admissions for Session 2026-27 are officially open across all grades. We invite parents to visit our campus, interact with our faculty, and explore our state-of-the-art facilities. Early registration ensures priority placement and scholarship considerations.', 'fas fa-user-plus')">
                    <i class="fas fa-user-plus"></i>
                    <h3>Admissions Open</h3>
                    <p>Session 2026-27</p>
                </div>

                <div class="news-card" onclick="openModal('Science Exhibition Highlights', 'Date: 10 July 2026.\n\nThe Annual Science Exhibition witnessed extraordinary talent from our students. Ranging from renewable energy models to working robotics and environmental awareness projects, young scientists displayed exceptional innovation and presentation skills.', 'fas fa-flask')">
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

<!-- UNIVERSAL POPUP MODAL HTML -->
<div id="universalModal" class="custom-modal">
    <div class="custom-modal-content">
        <span class="custom-modal-close" onclick="closeModal()">&times;</span>
        <i id="modalIcon" class=""></i>
        <h3 id="modalTitle"></h3>
        <p id="modalDesc" style="white-space: pre-line;"></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
// Initialize GLightbox for gallery items
const lightbox = GLightbox({
    selector: '.gallery-link'
});

// Universal Text Modal JavaScript Functions
function openModal(title, description, iconClass) {
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalDesc').innerText = description;
    document.getElementById('modalIcon').className = iconClass;
    document.getElementById('universalModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('universalModal').style.display = 'none';
}

window.addEventListener('click', function(event) {
    let modal = document.getElementById('universalModal');
    if (event.target === modal) {
        closeModal();
    }
});
</script>

</body>
</html>