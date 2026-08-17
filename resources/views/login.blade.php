<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Login&Register</title>
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
        /* HERO */

.auth-hero{
    min-height:60vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    position:relative;
    overflow:hidden;

    background:
    linear-gradient(
    135deg,
    #0f172a,
    #1e3a8a,
    #2563eb);
}

.auth-hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(255,255,255,.05);
    border-radius:50%;
    top:-220px;
    right:-150px;
}

.auth-hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,.05);
    border-radius:50%;
    bottom:-150px;
    left:-100px;
}

.auth-hero h1{
    font-size:70px;
    font-weight:900;
    margin-bottom:15px;
}

.auth-hero p{
    font-size:20px;
}

/* SECTION */

.auth-section{
    padding:100px 0;
    background:#f8fafc;
}

.auth-wrapper{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

/* LEFT */

.badge{
    display:inline-block;
    padding:10px 20px;
    background:#dbeafe;
    color:#2563eb;
    border-radius:50px;
    font-weight:700;
    margin-bottom:20px;
}

.auth-info h2{
    font-size:50px;
    color:#0f172a;
    margin-bottom:20px;
}

.auth-info p{
    font-size:18px;
    color:#64748b;
    line-height:1.8;
}

.feature-list{
    margin-top:35px;
}

.feature-list div{
    margin-bottom:18px;
    font-size:17px;
    color:#334155;
}

.feature-list i{
    color:#2563eb;
    margin-right:12px;
}

/* CARD */

.auth-card{
    background:rgba(255,255,255,.85);
    backdrop-filter:blur(20px);

    padding:40px;
    border-radius:30px;

    box-shadow:
    0 25px 50px rgba(0,0,0,.08);
}

.tabs{
    display:flex;
    background:#eef2ff;
    border-radius:60px;
    padding:6px;
    margin-bottom:30px;
}

.tab-btn{
    flex:1;
    border:none;
    padding:14px;
    border-radius:50px;
    background:none;
    cursor:pointer;
    font-weight:700;
    transition:.3s;
}

.tab-btn.active{
    background:#2563eb;
    color:#fff;
}

.form-box h3{
    text-align:center;
    margin-bottom:25px;
    color:#0f172a;
}

.input-group{
    position:relative;
    margin-bottom:18px;
}

.input-group > i{
    position:absolute;
    top:18px;
    left:16px;
    color:#64748b;
}

.toggle-password{
    position:absolute;
    top:50%;
    right:16px;
    transform:translateY(-50%);
    cursor:pointer;
    color:#64748b;
    z-index:2;
}

.input-group input{
    width:100%;
    padding:16px 16px 16px 50px;
    border:1px solid #dbe2ea;
    border-radius:14px;
    outline:none;
    transition:.3s;
}

.input-group input:focus{
    border-color:#2563eb;
    box-shadow:
    0 0 0 4px rgba(37,99,235,.1);
}

.auth-btn{
    width:100%;
    border:none;
    padding:16px;
    border-radius:14px;
    background:#2563eb;
    color:#fff;
    font-size:16px;
    font-weight:700;
    cursor:pointer;
    transition:.3s;
}

.auth-btn:hover{
    background:#f59e0b;
}

.hidden{
    display:none;
}
.toggle-password{
    position:absolute;
    top:50%;
    right:16px;
    transform:translateY(-50%);
    cursor:pointer;
    color:#64748b;
    font-size:16px;
}

.input-group input{
    width:100%;
    padding:16px 50px 16px 50px;
    border:1px solid #dbe2ea;
    border-radius:14px;
    outline:none;
}
.success-msg{
background:#dcfce7;
color:#166534;
padding:12px;
border-radius:10px;
margin-bottom:15px;
}

.error-msg{
background:#fee2e2;
color:#b91c1c;
padding:12px;
border-radius:10px;
margin-bottom:15px;
}

.error-msg p{
margin:5px 0;
}
/* RESPONSIVE */

@media(max-width:992px){

    .auth-wrapper{
        grid-template-columns:1fr;
    }

    .auth-info{
        text-align:center;
    }
}

@media(max-width:768px){

    .auth-hero h1{
        font-size:42px;
    }

    .auth-info h2{
        font-size:34px;
    }

    .auth-card{
        padding:25px;
    }
}
/* LOGIN LOADER */

#loginLoader{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
display:none;
justify-content:center;
align-items:center;
flex-direction:column;
z-index:999999;
}

#loginLoader img{
width:120px;
animation:logo 1.5s infinite;
}

#loginLoader h2{
color:#fff;
margin-top:20px;
font-size:28px;
}

.loader{
margin-top:20px;
width:220px;
height:8px;
background:rgba(255,255,255,.2);
border-radius:20px;
overflow:hidden;
}

.loader span{
display:block;
height:100%;
background:#fff;
animation:loading 2s linear infinite;
}

@keyframes loading{
0%{width:0%;}
100%{width:100%;}
}

@keyframes logo{
0%,100%{transform:scale(1);}
50%{transform:scale(1.15);}
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
<div id="loginLoader">

    <img src="{{ asset('images/logo.png') }}">

    <h2>Sublime School System</h2>

    <div class="loader">
        <span></span>
    </div>

</div>
   @include('includes.aos')
   @include('includes.navbar')
@include('includes.whatsapp') 

<!-- HERO -->

<section class="auth-hero">

    <div class="container">

        <h1>Teacher Portal</h1>

        <p>
            Login To Your Account Or Create A New One
        </p>

    </div>

</section>

<!-- AUTH SECTION -->

<section class="auth-section">

    <div class="container">

        <div class="auth-wrapper">

            <!-- LEFT SIDE -->

            <div class="auth-info">

                <span class="badge">
                    Sublime School System
                </span>

                <h2>
                    Your Gateway To Academic Excellence
                </h2>

                <p>
                    Access results, notices, attendance,
                    fee records and much more through
                    your student account.
                </p>

                <div class="feature-list">

                    <div>
                        <i class="fas fa-user-graduate"></i>
                        Admin Dashboard
                    </div>

                    <div>
                        <i class="fas fa-book"></i>
                        Online Resources
                    </div>

                    <div>
                        <i class="fas fa-chart-line"></i>
                        Progress Reports
                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->

            <div class="auth-card">

                <div class="tabs">

                    <button class="tab-btn active"
                        onclick="showForm('login')">
                        Login
                    </button>

                    <button class="tab-btn"
                        onclick="showForm('register')">
                        Register
                    </button>

                </div>

             <!-- LOGIN -->
<form id="loginForm" method="POST" action="/postlogin" class="form-box" onsubmit="showLoader()">
@csrf
    <h3>Welcome Back</h3>

    <div class="input-group">
        <i class="fas fa-envelope"></i>

        <input type="email"
               name="email"
               placeholder="Email Address"
               required>
    </div>

    <div class="input-group">
        <i class="fas fa-lock"></i>

        <input type="password"
               id="loginPassword"
               name="password"
               placeholder="Password"
               required>

        <span class="toggle-password"
              onclick="togglePassword('loginPassword', this)">
            <i class="fas fa-eye"></i>
        </span>
    </div>

    <button type="submit" class="auth-btn">
        Login Account
    </button>

</form>


<!-- REGISTER -->
<form id="registerForm"
      class="form-box hidden"
      action="/register"
      method="POST">

    @csrf

    <h3>Create Account</h3>
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

    <!-- Name -->
    <div class="input-group">
        <i class="fas fa-user"></i>

        <input type="text"
               name="name"
               placeholder="Full Name"
               required>
    </div>

    <!-- Email -->
    <div class="input-group">
        <i class="fas fa-envelope"></i>

        <input type="email"
               name="email"
               placeholder="Email Address"
               required>
    </div>

    <!-- Password -->
    <div class="input-group">
        <i class="fas fa-lock"></i>

        <input type="password"
               id="password"
               name="password"
               placeholder="Password"
               required>

        <span class="toggle-password"
              onclick="togglePassword('password', this)">
            <i class="fas fa-eye"></i>
        </span>
    </div>

<div class="input-group">
    <i class="fas fa-key"></i>

    <input type="password"
           id="admin_code"
           name="admin_code"
           placeholder="Enter Secret Code"
           required>

    <span class="toggle-password"
          onclick="togglePassword('admin_code', this)">
        <i class="fas fa-eye"></i>
    </span>
</div>
    <!-- Number -->
    <div class="input-group">
        <i class="fas fa-phone"></i>

        <input type="text"
               name="number"
               placeholder="Phone Number"
               maxlength="15"
               required>
    </div>

    <button type="submit"
            class="auth-btn">
        Create Account
    </button>

</form>


</form>

            </div>

        </div>

    </div>

</section>



<script>

function showForm(type){

    let login =
    document.getElementById('loginForm');

    let register =
    document.getElementById('registerForm');

    let tabs =
    document.querySelectorAll('.tab-btn');

    tabs.forEach(btn =>
    btn.classList.remove('active'));

    if(type === 'login'){

        login.classList.remove('hidden');
        register.classList.add('hidden');

        tabs[0].classList.add('active');

    }else{

        register.classList.remove('hidden');
        login.classList.add('hidden');

        tabs[1].classList.add('active');
    }
}

function togglePassword(inputId, element){

    const input = document.getElementById(inputId);
    const icon = element.querySelector('i');

    if(input.type === "password"){
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }else{
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>

@if(session('success') || $errors->any())
<script>
window.onload = function () {
    showForm('register');
}
function showLoader(){

document.getElementById("loginLoader").style.display="flex";

}
</script>

@endif

@include('includes.footer')
@include('includes.scroll')
<script>
function showLoader() {
    document.getElementById("loginLoader").style.display = "flex";
}
</script>
</body>
</html>
