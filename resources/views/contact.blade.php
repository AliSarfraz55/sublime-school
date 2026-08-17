<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Contact</title>
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
/* CONTACT HERO */

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

.about-hero .container{
    position:relative;
    z-index:2;
}

.about-hero h1{
    font-size:70px;
    font-weight:900;
    margin-bottom:20px;
    color:#fff;
}

.about-hero p{
    font-size:20px;
    color:rgba(255,255,255,.9);
}

@media(max-width:768px){

    .about-hero h1{
        font-size:42px;
    }

    .about-hero p{
        font-size:16px;
    }
}
/* ================= TITLE ================= */

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

/* ================= BUTTON ================= */

.btn{
    display:inline-block;
    padding:16px 40px;
    border-radius:60px;
    text-decoration:none;
    font-weight:700;
    background:#fff;
    color:#2563eb;
    transition:.35s ease;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
}

.btn:hover{
    transform:translateY(-6px);
}

/* ================= HERO ================= */

.contact-hero{
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

.contact-hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(255,255,255,.05);
    border-radius:50%;
    top:-200px;
    right:-150px;
}

.contact-hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,.04);
    border-radius:50%;
    bottom:-150px;
    left:-100px;
}

.contact-hero h1{
    font-size:70px;
    font-weight:900;
    margin-bottom:20px;
}

.contact-hero p{
    font-size:20px;
    opacity:.9;
}

/* ================= CONTACT INFO ================= */

.contact-info{
    background:#fff;
}

.contact-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.contact-card{
    background:#fff;
    padding:45px 30px;
    text-align:center;
    border-radius:25px;
    border-top:5px solid #2563eb;

    box-shadow:
    0 15px 35px rgba(0,0,0,.08);

    transition:.4s ease;
}

.contact-card:hover{
    transform:translateY(-12px);

    box-shadow:
    0 25px 50px rgba(0,0,0,.15);
}

.contact-card i{
    font-size:55px;
    color:#2563eb;
    margin-bottom:20px;
    transition:.3s;
}

.contact-card:hover i{
    color:#f59e0b;
}

.contact-card h3{
    margin-bottom:12px;
    color:#0f172a;
    font-size:24px;
}

.contact-card p{
    color:#64748b;
    line-height:1.8;
}

/* ================= CONTACT FORM ================= */

.contact-form-section{
    background:#f8fafc;
}

.contact-wrapper{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

.contact-form{
    background:#fff;
    padding:45px;
    border-radius:25px;

    box-shadow:
    0 15px 35px rgba(0,0,0,.08);
}

.contact-form .section-title{
    text-align:left;
}

.contact-form .section-title::after{
    margin:15px 0 0;
}

.contact-form form{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:16px 18px;
    border:1px solid #dbe2ea;
    border-radius:12px;
    outline:none;
    font-size:15px;
    transition:.3s;
}

.contact-form input:focus,
.contact-form textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.1);
}

.contact-form textarea{
    resize:none;
}

.contact-form button.submit-btn{
    border:none;
    cursor:pointer;
    background:#2563eb;
    color:#fff;
    padding:16px;
    border-radius:12px;
    font-size:16px;
    font-weight:700;
    transition:.3s;
    width:100%;
    display:block;
}

.contact-form button.submit-btn:hover{
    background:#f59e0b;
}

.contact-image{
    overflow:hidden;
    border-radius:30px;
}

.contact-image img{
    width:100%;
    display:block;
    border-radius:30px;
    transition:.5s;
}

.contact-image:hover img{
    transform:scale(1.05);
}

/* ================= TIMING ================= */

.timing{
    background:#fff;
}

.timing-card{
    max-width:750px;
    margin:auto;

    background:#fff;
    padding:50px;

    border-radius:25px;
    border-top:5px solid #2563eb;

    box-shadow:
    0 15px 35px rgba(0,0,0,.08);

    text-align:center;
}

.timing-card p{
    font-size:18px;
    margin:18px 0;
    color:#475569;
}

/* ================= MAP ================= */

.map-section{
    background:#f8fafc;
}

.map-box{
    overflow:hidden;
    border-radius:25px;

    box-shadow:
    0 15px 40px rgba(0,0,0,.1);
}

.map-box iframe{
    width:100%;
    height:500px;
    border:0;
    display:block;
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
/* ================= ANIMATION ================= */

.animate{
    animation:fadeUp 1s ease forwards;
}
.success-msg{
background:#dcfce7;
color:#166534;
padding:12px;
border-radius:10px;
margin-bottom:20px;
}

.error-msg{
background:#fee2e2;
color:#b91c1c;
padding:12px;
border-radius:10px;
margin-bottom:20px;
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

    .contact-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    .contact-wrapper{
        grid-template-columns:1fr;
    }

    .contact-image{
        order:-1;
    }
}
@media(max-width:768px){

    .contact-grid{
        display:grid;
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }

    .contact-card{
        padding:20px 15px;
    }

    .contact-card i{
        font-size:30px;
        margin-bottom:10px;
    }

    .contact-card h3{
        font-size:16px;
    }

    .contact-card p{
        font-size:12px;
        word-break:break-word;
    }
}

@media(max-width:576px){

    .contact-card{
        padding:35px 20px;
    }

    .contact-card i{
        font-size:45px;
    }

    .contact-form{
        padding:25px;
    }

    .cta{
        padding:80px 0;
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
<!-- CONTACT HERO -->

<section class="about-hero">

    <div class="container">

        <h1>Contact Us</h1>

        <p>
            We're Here To Help You And Answer Your Questions
        </p>

    </div>

</section>

<!-- CONTACT INFO -->

<section class="contact-info">

    <div class="container">

        <h2 class="section-title">
            Get In Touch
        </h2>

        <div class="contact-grid">

            <div class="contact-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Anar Kali Bazar Sarkari Parao,Hafizabad</p>
            </div>

            <div class="contact-card">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>+92 308 6489990</p>
            </div>

            <div class="contact-card">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>info@sublimeschool.edu.pk</p>
            </div>

        </div>

    </div>

</section>

<!-- CONTACT FORM -->

<section class="contact-form-section">

    <div class="container contact-wrapper">

       <div class="contact-form">

<h2 class="section-title">
Send Message
</h2>

@if(session('success'))
<div class="success-msg">
{{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="error-msg">

@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach

</div>
@endif

<form action="/contact_store"
      method="POST">

    @csrf

<input
type="text"
name="name"
placeholder="Your Name"
required>

<input
type="email"
name="email"
placeholder="Your Email"
required>

<textarea
name="message"
rows="6"
placeholder="Your Message"
required></textarea>

<button
type="submit"
class="submit-btn">

Send Message

</button>

</form>

</div>

        <div class="contact-image">
            <img src="images/c1.png" alt="">
        </div>

    </div>

</section>

<!-- SCHOOL TIMING -->

<section class="timing">

    <div class="container">

        <h2 class="section-title">
            School Timings
        </h2>

        <div class="timing-card">

            <p><strong>Monday - Friday:</strong> 8:00 AM - 2:00 PM</p>

            <p><strong>Saturday:</strong> 8:00 AM - 12:00 PM</p>

            <p><strong>Sunday:</strong> Closed</p>

        </div>

    </div>

</section>

<!-- MAP -->

<section class="map-section">

    <div class="container">

        <h2 class="section-title">
            Find Us
        </h2>

        <div class="map-box">

          <div class="map-box">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d211.31015667458425!2d73.69268746349424!3d32.070262809848565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f4df8f4dfab37%3A0x88d9a60a0004d215!2sZahid%20home.yadgar%20daresgah%20school!5e0!3m2!1sen!2s!4v1780758858049!5m2!1sen!2s"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="cta">

    <div class="container">

        <h2>
            Ready To Visit Our Campus?
        </h2>

        <p>
            Contact us today and schedule a visit.
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