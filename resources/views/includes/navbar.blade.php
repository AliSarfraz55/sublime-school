<style>

:root{
    --primary:#2563eb;
    --primary-dark:#1d4ed8;
    --accent:#f59e0b;
    --text:#1e293b;
    --white:#ffffff;
    
    --nav-height:105px;

}

/* PREMIUM NAVBAR */

nav{
position:sticky;
top:0;
z-index:99999;
width:100%;
min-height:var(--nav-height);
padding:14px 0;
background:rgba(255,255,255,.82);
backdrop-filter:blur(25px);
-webkit-backdrop-filter:blur(25px);
border-bottom:1px solid rgba(255,255,255,.3);
box-shadow:0 8px 32px rgba(0,0,0,.08);
}


.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
}

/* LOGO */

.logo{
    display:flex;
    align-items:center;
    gap:15px;
    text-decoration:none;
    flex-shrink:0;
}

/* FORCE SINGLE LINE NAME */
.logo-text h3{
    font-size:20px;
    font-weight:800;
    color:var(--primary);
    margin:0;
    white-space:nowrap;   /* IMPORTANT */
}

.logo-text span{
    color:#64748b;
    font-size:12px;
    letter-spacing:2px;
    text-transform:uppercase;
}

/* LOGO IMAGE */
.logo img{
    width:75px;
    height:75px;
    border-radius:50%;
    object-fit:cover;
    background:#fff;
    padding:4px;
    border:3px solid var(--primary);
    box-shadow:0 10px 25px rgba(37,99,235,.25);
    transition:.4s;
}

.logo:hover img{
    transform:rotate(6deg) scale(1.07);
}

/* NAV LINKS */

.nav-links{
    display:flex;
    align-items:center;
    gap:8px;
    list-style:none;
    margin:0;
    padding:0;
      flex:1;
    justify-content:center;
}

.nav-links a{
    position:relative;
    display:block;
    text-decoration:none;
    color:var(--text);
    font-weight:700;
    padding:12px 18px;
    border-radius:14px;
    transition:.3s ease;
}

.nav-links a.active{
    color:#fff;
    background:linear-gradient(135deg,#2563eb,#3b82f6);
    box-shadow:0 8px 20px rgba(37,99,235,.30);
}

.nav-links a.active::after{
    width:60%;
    background:#fff;
}
/* UNDERLINE ANIMATION */
.nav-links a::after{
    content:'';
    position:absolute;
    left:50%;
    bottom:6px;
    transform:translateX(-50%);
    width:0;
    height:3px;
    border-radius:30px;
    background:var(--primary);
    transition:.3s;
}

.nav-links a:hover::after{
    width:60%;
}

/* APPLY BUTTON */

.btn{
    text-decoration:none;
    padding:14px 30px;
    border-radius:14px;
    color:#fff;
    font-weight:700;
    background:linear-gradient(135deg,#2563eb,#3b82f6);
    box-shadow:0 12px 25px rgba(37,99,235,.28);
    transition:.4s;
    flex-shrink:0;
}

.btn:hover{
    transform:translateY(-4px);
    box-shadow:0 20px 40px rgba(37,99,235,.35);
}

/* MOBILE MENU BUTTON */

.menu-btn{
    display:none;
    font-size:30px;
    cursor:pointer;
    color:var(--primary);
    transition:.3s;
}

/* MOBILE NAV IMPROVED */

@media(max-width:991px){

    .menu-btn{
        display:block;
    }

    /* FULL SCREEN STYLE DROPDOWN */
    .nav-links{
        position:absolute;
        top:100%;
        left:0;
        width:100%;
        flex-direction:column;
        background:rgba(255,255,255,.98);
        backdrop-filter:blur(20px);
        -webkit-backdrop-filter:blur(20px);
        gap:0;
        padding:0;
        box-shadow:0 20px 40px rgba(0,0,0,.12);

        max-height:0;
        overflow:hidden;
        transition:.5s ease;
        border-bottom-left-radius:20px;
        border-bottom-right-radius:20px;
    }

    /* OPEN STATE */
    .nav-links.active{
        max-height:420px;
        padding:15px 0;
    }

    .nav-links li{
        width:100%;
    }

    .nav-links a{
        display:block;
        width:90%;
        margin:8px auto;
        text-align:center;
        border-radius:12px;
        padding:14px;
    }

    /* MOBILE BUTTON HIDE */
    .btn{
        display:none;
    }

    .logo img{
        width:60px;
        height:60px;
    }

    .logo-text h3{
        font-size:16px;
        white-space:nowrap;
    }
}

/* SMALL ANIMATION TOUCH */
.nav-links a{
    position:relative;
   
}

.nav-links a:hover{
    letter-spacing:.5px;
}

</style>

<nav>

<div class="container navbar">

    <div class="logo">
       <img src="{{ asset('images/logo.png') }}" alt="School Logo">

        <div class="logo-text">
            <h3>SUBLIME SCHOOL SYSTEM</h3>
            <span>Quality Education</span>
        </div>
    </div>

    <div class="menu-btn" id="menuBtn">☰</div>

    <ul class="nav-links" id="navLinks">

        <li><a href="{{ url('/') }}" class="{{ Request::path() == '/' ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ url('/academic') }}" class="{{ request()->is('academic') ? 'active' : '' }}">Academics</a></li>
        <li><a href="{{ url('/admission') }}" class="{{ request()->is('admission') ? 'active' : '' }}">Admissions</a></li>
        <li><a href="{{ url('/gallery') }}" class="{{ request()->is('gallery') ? 'active' : '' }}">Gallery</a></li>
        <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        

    </ul>

    <a href="{{ url('/applynow') }}" class="btn">
    Apply Now
</a>

</div>

</nav>

<script>

const menuBtn = document.getElementById('menuBtn');
const navLinks = document.getElementById('navLinks');
const navItems = document.querySelectorAll('#navLinks a');

menuBtn.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    menuBtn.classList.toggle('open');
});

// close menu when clicking link (mobile UX improvement)
navItems.forEach(item => {
    item.addEventListener('click', () => {
        navLinks.classList.remove('active');
    });
});

</script>