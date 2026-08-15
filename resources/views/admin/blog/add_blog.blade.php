<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Blog</title>
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

.wrapper{
    display:flex;
    min-height:100vh;
}

.main{
    flex:1;
    padding:30px;
}

/* ================= TOPBAR ================= */

.topbar{
    background:#fff;
    padding:22px 28px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);

    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
    flex-wrap:wrap;

    margin-bottom:30px;
}

.topbar h2{
    color:#0f172a;
    font-size:30px;
    margin-bottom:5px;
}

.topbar p{
    color:#64748b;
    font-size:15px;
}

/* ================= BACK BUTTON ================= */

.back-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:14px 24px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
}

.back-btn i{
    margin-right:8px;
}

.back-btn:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

/* ================= FORM BOX ================= */

.form-box{
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

/* ================= GRID ================= */

.form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
}

.full{
    grid-column:1 / -1;
}

/* ================= FORM GROUP ================= */

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:10px;
    color:#0f172a;
    font-weight:600;
    font-size:15px;
}

.form-group label i{
    color:#2563eb;
    margin-right:8px;
}

/* ================= INPUTS ================= */

.form-group input,
.form-group select,
.form-group textarea{

    width:100%;
    padding:15px 18px;
    border:1px solid var(--border);
    border-radius:12px;
    outline:none;
    font-size:15px;
    transition:.3s;
    background:#fff;
}

.form-group textarea{
    resize:vertical;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{

    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.12);
}

/* ================= FILE INPUT ================= */

input[type=file]{
    cursor:pointer;
    padding:13px;
}

/* ================= BUTTON ================= */

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

.button-area button i{
    margin-right:8px;
}

.button-area button:hover{

    background:#1d4ed8;
    transform:translateY(-3px);
    box-shadow:0 12px 25px rgba(37,99,235,.25);
}

/* ================= PLACEHOLDER ================= */

::placeholder{
    color:#94a3b8;
}

/* ================= RESPONSIVE ================= */

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
        padding:18px;
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

</style>

</head>

<body>

@include('admin.includes.aos')
@include('admin.includes.navbar')

<div class="wrapper">

@include('admin.includes.sidebar')

<div class="main">

<!-- TOPBAR -->

<div class="topbar">

    <div>

        <h2>Add New Blog</h2>

        <p>Create a new blog for your school website.</p>

    </div>

    <a href="{{ url('/blogs') }}" class="back-btn">

        <i class="fas fa-arrow-left"></i>

        Back to Blogs

    </a>

</div>
@if ($errors->any())

<div style="background:#fee2e2;color:#b91c1c;padding:15px;border-radius:10px;margin-bottom:20px;">

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif
<!-- BLOG FORM -->

<div class="form-box">

<form action="{{ url('/save_blog') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="form-grid">

<!-- Blog Title -->

<div class="form-group full">

<label>

<i class="fas fa-heading"></i>

Blog Title

</label>

<input
type="text"
name="title"
placeholder="Enter Blog Title"
required>

</div>

<!-- Author -->

<div class="form-group">

<label>

<i class="fas fa-user"></i>

Author

</label>

<input
type="text"
name="author"
placeholder="Author Name"
required>

</div>

<!-- Status -->

<div class="form-group">

<label>

<i class="fas fa-toggle-on"></i>

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

<!-- Image -->

<div class="form-group full">

<label>

<i class="fas fa-image"></i>

Featured Image

</label>

<input
type="file"
name="image"
required>

</div>

<!-- Short Description -->

<div class="form-group full">

<label>

<i class="fas fa-align-left"></i>

Short Description

</label>

<textarea
name="short_description"
rows="5"
placeholder="Write Short Description..."
required></textarea>

</div>

<!-- Full Description -->

<div class="form-group full">

<label>

<i class="fas fa-file-lines"></i>

Full Description

</label>

<textarea
name="description"
rows="12"
placeholder="Write Complete Blog..."
required></textarea>

</div>

</div>

<div class="button-area">

<button type="submit">

<i class="fas fa-paper-plane"></i>

Publish Blog

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