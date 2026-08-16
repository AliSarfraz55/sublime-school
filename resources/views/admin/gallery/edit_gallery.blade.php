<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Gallery</title>
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

/* Layout */

.wrapper{
    display:flex;
    min-height:100vh;
    background:#f8fafc;
}


/* Main */

.main{
    
    flex:1;
    padding:30px;
    width:100%;
    padding:30px;
}

.topbar{
    background:#fff;
    padding:22px 28px;
    border-radius:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.topbar h2{
    font-size:30px;
    color:#0f172a;
}

.back-btn{
    text-decoration:none;
    background:#2563eb;
    color:#fff;
    padding:12px 24px;
    border-radius:10px;
}

.form-box{
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.form-group{
    margin-bottom:25px;
}

.form-group label{
    display:block;
    margin-bottom:10px;
    font-weight:600;
}

.form-group input{
    width:100%;
    padding:15px;
    border:1px solid var(--border);
    border-radius:10px;
    outline:none;
}

.form-group input:focus{
    border-color:#2563eb;
}

.preview{
    margin-top:20px;
}

.preview img{
    width:250px;
    border-radius:15px;
    border:2px solid #2563eb;
}

.button-area{
    margin-top:30px;
}

.button-area button{
    background:#2563eb;
    color:#fff;
    border:none;
    padding:15px 35px;
    border-radius:10px;
    cursor:pointer;
    font-size:16px;
}

.button-area button:hover{
    background:#1d4ed8;
}

@media(max-width:768px){

.main{
padding:15px;
}

.topbar{
flex-direction:column;
align-items:flex-start;
gap:15px;
}

.preview img{
width:100%;
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

@include('admin.includes.aos')
@include('admin.includes.navbar')

<div class="wrapper">

@include('admin.includes.sidebar')

<div class="main">

<div class="topbar">

<h2>Edit Gallery</h2>

<a href="{{ url('/gallery_management') }}" class="back-btn">
Back
</a>

</div>

<div class="form-box">

<form action="{{ url('/update_gallery/'.$gallery->id) }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="form-group">

<label>Gallery Title</label>

<input
type="text"
name="title"
value="{{ $gallery->title }}"
required>

</div>

<div class="form-group">

<label>Change Image</label>

<input
type="file"
name="image">

</div>

<div class="preview">

<p style="margin-bottom:10px;font-weight:bold;">
Current Image
</p>

<img src="{{ asset('uploads/gallery/'.$gallery->image) }}">

</div>

<div class="button-area">

<button type="submit">

Update Gallery

</button>

</div>

</form>

</div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>