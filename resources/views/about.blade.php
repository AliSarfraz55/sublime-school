<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - About</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
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
.about-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}
/* ================= SCHOOL INTRO ================= */
.about-text .section-title{
    text-align:left;
}

.about-text .section-title::after{
    margin:15px 0 0;
}
.about-school{
    padding:120px 0;
    background:#fff;
}
.about-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    transition:transform .6s ease, filter .6s ease;
}

.about-image{
    width:100%;
    max-width:520px;
    aspect-ratio:16/9;
    overflow:hidden;
    border-radius:30px;
    position:relative;
}

/* HOVER EFFECT */
.about-image:hover img{
    transform:scale(1.08);
    filter:brightness(1.05) contrast(1.05);
}

.about-text p{
    font-size:18px;
    line-height:1.9;
    color:#475569;
}

/* ================= MISSION & VISION ================= */

.mv-card{
    background:rgba(255,255,255,.95);
    padding:45px;
    border-radius:25px;

    box-shadow:
    0 15px 35px rgba(0,0,0,.08);

    transition:.4s ease;

    border-top:5px solid #2563eb;
    cursor: pointer;
}

.mv-card:hover{
    transform:translateY(-12px);
    box-shadow:
    0 25px 50px rgba(0,0,0,.15);
}

.mv-card i{
    font-size:55px;
    color:#2563eb;
    margin-bottom:20px;
}

.mv-card:hover i{
    color:#f59e0b;
}
.mv-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:30px;
}
.mission-vision{
    padding:100px 0;
    background:#f8fafc;
}
/* ================= PRINCIPAL ================= */

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
    cursor: pointer;
    transition: 0.3s ease;
}

.principal-text:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,.12);
}

.principal-text .section-title{
    margin-bottom:25px;
    text-align:left;
}

.principal-text .section-title::after{
    margin:15px 0 0;
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
/* ================= FACILITIES ================= */
.facilities{
    padding:100px 0;
    background:#ffffff;
}
.feature{
    background:#fff;
    padding:40px 25px;
    text-align:center;
    border-radius:20px;

    border-top:4px solid #2563eb;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);

    transition:.3s ease;
    cursor: pointer;
}

.feature:hover{
    transform:translateY(-10px);
    box-shadow:
    0 20px 45px rgba(0,0,0,.15);
}

.feature i{
    font-size:45px;
    color:#2563eb;
    margin-bottom:20px;
}

.feature:hover i{
    color:#f59e0b;
}
.features{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}
/* ================= STATS ================= */

.stats{
    padding:100px 0;
    background:#fff;
}

.highlight{
    background:#fff;
    padding:35px 25px;
    text-align:center;
    border-radius:20px;

    border-top:4px solid #2563eb;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);

    transition:.3s ease;
    cursor: pointer;
}

.highlight:hover{
    transform:translateY(-10px);
    box-shadow:
    0 20px 40px rgba(0,0,0,.12);
}

.highlight h2{
    color:  #2563eb;;
    font-size:42px;
}
.highlight-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
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
    -webkit-tap-highlight-color: transparent;
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

/* ================= ANIMATIONS ================= */

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

    .about-content,
    .principal-content{
        grid-template-columns:1fr;
    }

    .features{
        grid-template-columns:repeat(2,1fr);
    }

    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .mv-grid{
        grid-template-columns:1fr;
    }
}

@media(max-width:768px){

    .about-hero h1{
        font-size:42px;
    }

    /* Mission & Vision */
    .mv-grid{
        grid-template-columns:1fr;
    }

    /* Facilities */
    .features{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    /* Stats */
    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
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
</style>
<body>
    @include('includes.aos')
    @include('includes.navbar')
@include('includes.whatsapp')    


<section class="about-hero">

    <div class="container">

        <h1>About Sublime School System</h1>

        <p>
            Building Future Leaders Through Quality Education
        </p>

    </div>

</section>

<section class="about-school">

    <div class="container about-content">

        <div class="about-image">
            <img src="images/a1.png" alt="">
        </div>

        <div class="about-text">

            <h2 class="section-title">
                Our Story
            </h2>

            <p>
                Sublime School System is dedicated to providing
                quality education in a safe and inspiring learning
                environment. We focus on academic excellence,
                character building and leadership development.
            </p>

        </div>

    </div>

</section>

<section class="mission-vision">

    <div class="container">

        <div class="mv-grid">

            <div class="mv-card" onclick="openModal('Our Mission', 'To provide high quality education that empowers students to become confident, ethical, and responsible citizens. We strive to cultivate inquisitive minds through interactive learning modules, moral discipline, and personalized mentorship, ensuring every child achieves their utmost potential.', 'fas fa-bullseye')">
                <i class="fas fa-bullseye"></i>
                <h3>Our Mission</h3>

                <p>
                    To provide high quality education that empowers
                    students to become confident and responsible citizens.
                </p>

            </div>

            <div class="mv-card" onclick="openModal('Our Vision', 'To be a leading educational institution that nurtures future leaders, innovators, and visionaries. We envision a dynamic campus culture where modern technology meets traditional values, preparing young minds to successfully navigate and excel in a rapidly evolving global society.', 'fas fa-eye')">
                <i class="fas fa-eye"></i>
                <h3>Our Vision</h3>

                <p>
                    To be a leading educational institution that nurtures
                    future leaders and innovators.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="principal">

    <div class="container principal-content">

        <div class="principal-image">
            <a href="{{ asset('images/p1.png') }}" class="principal-img-link">
                <img src="images/p1.png" alt="Principal">
            </a>
        </div>

        <div class="principal-text" onclick="openModal('Principal\'s Complete Message', 'Dear Parents, Students, and Well-Wishers,\n\nWelcome to Sublime School System! As the Principal, it is my utmost privilege to lead an institution where education transcends ordinary textbooks and shapes the holistic character of every child.\n\nWe firmly believe that every child possesses unique potential waiting to be unlocked. Our dedicated faculty and staff work tirelessly to foster an inspiring, disciplined, and nurturing environment where curiosity is encouraged, moral values are deeply instilled, and academic rigor goes hand-in-hand with emotional well-being.\n\nEducation is a collaborative partnership between the school, parents, and the community. Together, we can guide our students to become confident, resilient, and socially responsible leaders of tomorrow. Thank you for entrusting us with your child\'s future.\n\nWarm Regards,\nSarfraz Ahmad Bhatti', 'fas fa-user-tie')">

            <h2 class="section-title">
                Principal's Message
            </h2>

            <p>
                We believe every child has unique potential.
                Our goal is to provide opportunities that help
                students excel academically and personally. (Click here to read full message)
            </p>

            <br>

            <h4>Sarfraz Ahmad Bhatti</h4>

        </div>

    </div>

</section>

<section class="facilities">

    <div class="container">

        <h2 class="section-title">
            School Facilities
        </h2>

        <div class="features">

            <div class="feature" onclick="openModal('Smart Classrooms Facility', 'Our smart classrooms feature high-speed internet, multimedia projectors, and digital boards to make learning interactive and engaging.', 'fas fa-school')">
                <i class="fas fa-school"></i>
                <h3>Smart Classrooms</h3>
            </div>

            <div class="feature" onclick="openModal('Qualified Teachers Support', 'Our experienced educators provide regular guidance, personal attention, and rigorous mentoring to ensure top-tier academic results.', 'fas fa-chalkboard-teacher')">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Qualified Teachers</h3>
            </div>

            <div class="feature" onclick="openModal('Academic Excellence Standards', 'We maintain exceptional educational standards with comprehensive testing, conceptual clarity, and regular student performance tracking.', 'fas fa-graduation-cap')">
                <i class="fas fa-graduation-cap"></i>
                <h3>Academic Excellence</h3>
            </div>

            <div class="feature" onclick="openModal('Achievements & Awards Program', 'We celebrate student success across academic contests, sports events, science fairs, and annual cultural celebrations.', 'fas fa-trophy')">
                <i class="fas fa-trophy"></i>
                <h3>Achievements & Awards</h3>
            </div>

            <div class="feature" onclick="openModal('Career Guidance & Counseling', 'Professional mentorship helps students identify their strengths and map out successful career trajectories from an early stage.', 'fas fa-compass')">
                <i class="fas fa-compass"></i>
                <h3>Career Guidance</h3>
            </div>

            <div class="feature" onclick="openModal('Safe & Secure Campus Environment', 'Our campus is fully secured with 24/7 CCTV monitoring, gated entry checkpoints, and disciplined security personnel.', 'fas fa-shield-alt')">
                <i class="fas fa-shield-alt"></i>
                <h3>Safe Environment</h3>
            </div>

        </div>

    </div>

</section>

<section class="stats">

    <div class="container">

        <div class="highlight-grid">

            <div class="highlight" onclick="openModal('250+ Enrolled Students Community', 'A vibrant student body participating actively in academics, sports, and co-curricular programs.', 'fas fa-user-graduate')">
                <h2>250+</h2>
                <p>Students</p>
            </div>

            <div class="highlight" onclick="openModal('15+ Expert Faculty Members', 'Dedicated instructors focused on student-centric teaching and intellectual growth.', 'fas fa-chalkboard-teacher')">
                <h2>15+</h2>
                <p>Teachers</p>
            </div>

            <div class="highlight" onclick="openModal('25+ Years of Proven Legacy', 'Over two decades of unmatched commitment to quality education and institutional discipline.', 'fas fa-award')">
                <h2>25+</h2>
                <p>Years Experience</p>
            </div>

            <div class="highlight" onclick="openModal('100% Quality Education Commitment', 'Ensuring top-tier knowledge delivery and comprehensive moral development.', 'fas fa-book')">
                <h2>100%</h2>
                <p>Quality Education</p>
            </div>

        </div>

    </div>

</section>

<section class="cta">

    <div class="container">

        <h2>
            Join Sublime School System Today
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

<div id="universalModal" class="custom-modal">
    <div class="custom-modal-content">
        <span class="custom-modal-close" onclick="closeModal()">&times;</span>
        <i id="modalIcon" class=""></i>
        <h3 id="modalTitle"></h3>
        <p id="modalDesc" style="white-space: pre-line;"></p>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
const lightbox = GLightbox({
    selector: '.principal-img-link'
});

// Universal Modal JavaScript Functions
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