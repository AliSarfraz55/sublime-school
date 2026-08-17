<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Blog</title>
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
    border-radius:18px;
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
    padding:12px 22px;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
}

.back-btn:hover{
    background:#1d4ed8;
    transform:translateY(-2px);
}

/* ================= FORM ================= */

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
    grid-column:1/-1;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    font-size:15px;
    font-weight:600;
    color:#0f172a;
    margin-bottom:10px;
}

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    padding:15px;
    border:1px solid #dbe3ef;
    border-radius:12px;
    font-size:15px;
    outline:none;
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

/* ================= IMAGE ================= */

.preview-image{
    width:280px;
    max-width:100%;
    border-radius:15px;
    border:1px solid #ddd;
    padding:5px;
    margin-top:5px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

input[type=file]{
    padding:12px;
    cursor:pointer;
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

    .preview-image{
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

<!-- TOPBAR -->

<div class="topbar">

<div>

<h2>Edit Blog</h2>

<p>Update your blog information.</p>

</div>

<a href="{{ url('/blogs') }}" class="back-btn">
Back to Blogs
</a>

</div>

<!-- FORM -->

<div class="form-box">
<form action="/update_blog/{{ $blog->id }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

<div class="form-grid">

<!-- TITLE -->

<div class="form-group full">

<label>Blog Title</label>

<input
type="text"
name="title"
value="{{ $blog->title }}"
required>

</div>

<!-- AUTHOR -->

<div class="form-group">

<label>Author</label>

<input
type="text"
name="author"
value="{{ $blog->author }}"
required>

</div>

<!-- STATUS -->

<div class="form-group">

<label>Status</label>

<select name="status">

<option value="Published"
{{ $blog->status=='Published' ? 'selected' : '' }}>
Published
</option>

<option value="Draft"
{{ $blog->status=='Draft' ? 'selected' : '' }}>
Draft
</option>

</select>

</div>

<!-- CURRENT IMAGE -->

<div class="form-group full">

<label>Current Image</label>

<img
src="{{ asset('uploads/blogs/'.$blog->image) }}"
class="preview-image">

</div>

<!-- NEW IMAGE -->

<div class="form-group full">

<label>Change Image</label>

<input
type="file"
name="image">

</div>

<!-- SHORT DESCRIPTION -->

<div class="form-group full">

<label>Short Description</label>

<textarea
name="short_description"
rows="5"
required>{{ $blog->short_description }}</textarea>

</div>

<!-- DESCRIPTION -->

<div class="form-group full">

<label>Full Description</label>

<textarea
name="description"
rows="10"
required>{{ $blog->description }}</textarea>

</div>

</div>

<div class="button-area">

<button type="submit">

Update Blog

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