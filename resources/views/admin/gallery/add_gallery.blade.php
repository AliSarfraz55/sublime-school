<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Gallery</title>
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
/* Topbar */

.topbar{
    background:#fff;
    padding:22px 28px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
    flex-wrap:wrap;
    gap:20px;
}

.topbar h2{
    font-size:30px;
    color:#0f172a;
    margin-bottom:5px;
}

.topbar p{
    color:#64748b;
}

.back-btn{
    text-decoration:none;
    background:#2563eb;
    color:#fff;
    padding:14px 24px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
}

.back-btn:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

/* Form */

.form-box{
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
}

.full{
    grid-column:1 / -1;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:10px;
    font-weight:600;
    color:#0f172a;
}

.form-group input,
.form-group select{
    width:100%;
    padding:15px;
    border:1px solid var(--border);
    border-radius:12px;
    font-size:15px;
    outline:none;
    transition:.3s;
}

.form-group input:focus,
.form-group select:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.12);
}

input[type=file]{
    cursor:pointer;
}

/* Success */

.success{
    background:#dcfce7;
    color:#166534;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

/* Button */

.button-area{
    margin-top:35px;
    text-align:right;
}

.button-area button{
    background:#2563eb;
    color:#fff;
    border:none;
    padding:15px 35px;
    border-radius:12px;
    cursor:pointer;
    font-size:16px;
    font-weight:600;
    transition:.3s;
}

.button-area button:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

/* Responsive */

@media(max-width:992px){

    .form-grid{
        grid-template-columns:1fr;
    }

    .full{
        grid-column:auto;
    }

}

@media(max-width:768px){

    .main{
        padding:15px;
    }

    .topbar{
        flex-direction:column;
        align-items:flex-start;
    }

    .topbar h2{
        font-size:24px;
    }

    .form-box{
        padding:20px;
    }

    .button-area{
        text-align:center;
    }

    .button-area button{
        width:100%;
    }

    .back-btn{
        width:100%;
        text-align:center;
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

<div>

<h2>Add Gallery Image</h2>

<p>Add new image to website gallery.</p>

</div>

<a href="{{ url('/gallery_management') }}" class="back-btn">

Back to Gallery

</a>

</div>

<div class="form-box">

@if(session('success'))

<div class="success">

{{ session('success') }}

</div>

@endif

<form action="/save_gallery"
      method="POST"
      enctype="multipart/form-data">

    @csrf

<div class="form-grid">

<div class="form-group full">

<label>

Gallery Title

</label>

<input
type="text"
name="title"
placeholder="Enter Image Title"
required>

</div>

<div class="form-group">

<label>

Status

</label>

<select name="status">

<option value="Published">

Published

</option>

<option value="Draft">

Draft

</option>

</select>

</div>

<div class="form-group">

<label>

Gallery Image

</label>

<input
type="file"
name="image"
required>

</div>

</div>

<div class="button-area">

<button type="submit">

Upload Image

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