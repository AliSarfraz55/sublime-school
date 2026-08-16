<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Notices</title>
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
    padding:20px 25px;
    border-radius:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.topbar h2{
    color:#0f172a;
}

.back-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:12px;
    font-weight:600;
}

.back-btn:hover{
    background:#1d4ed8;
}

.notice-card{
    background:#fff;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.notice-title{
    font-size:30px;
    color:#0f172a;
    margin-bottom:25px;
    border-bottom:2px solid #e2e8f0;
    padding-bottom:15px;
}

.info-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
    margin-bottom:30px;
}

.info-box{
    background:#f8fafc;
    border:1px solid #e2e8f0;
    padding:18px;
    border-radius:12px;
}

.info-box label{
    display:block;
    font-size:13px;
    color:#64748b;
    margin-bottom:6px;
    font-weight:600;
}

.info-box p{
    font-size:16px;
    color:#0f172a;
    font-weight:600;
}

.description{
    margin-top:20px;
}

.description h3{
    margin-bottom:15px;
    color:#0f172a;
}

.description-box{
    background:#f8fafc;
    border:1px solid #e2e8f0;
    padding:20px;
    border-radius:12px;
    line-height:1.8;
}

.attachment{
    margin-top:30px;
}

.attachment h3{
    margin-bottom:15px;
}

.file-link{
    display:inline-block;
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:12px 20px;
    border-radius:10px;
}

.file-link:hover{
    background:#1d4ed8;
}

.status{
    display:inline-block;
    padding:8px 14px;
    border-radius:30px;
    color:#fff;
    font-size:14px;
    font-weight:600;
}

.published{
    background:#16a34a;
}

.draft{
    background:#f59e0b;
}

@media(max-width:768px){

    .info-grid{
        grid-template-columns:1fr;
    }

    .topbar{
        flex-direction:column;
        gap:15px;
        align-items:flex-start;
    }

    .main{
        padding:15px;
    }

    .notice-title{
        font-size:24px;
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

        <h2>
            <i class="fas fa-eye"></i>
            View Notice
        </h2>

        <a href="{{ url('/notice') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Notices
        </a>

    </div>

    <div class="notice-card">

        <h1 class="notice-title">
            {{ $notice->title }}
        </h1>

        <div class="info-grid">

            <div class="info-box">
                <label>Category</label>
                <p>{{ $notice->category }}</p>
            </div>

            <div class="info-box">
                <label>Audience</label>
                <p>{{ $notice->audience }}</p>
            </div>

            <div class="info-box">
                <label>Publish Date</label>
                <p>{{ $notice->publish_date }}</p>
            </div>

            <div class="info-box">
                <label>Expiry Date</label>
                <p>
                    {{ $notice->expiry_date ?? 'No Expiry Date' }}
                </p>
            </div>

            <div class="info-box">
                <label>Status</label>

                <p>
                    <span class="status {{ strtolower($notice->status) }}">
                        {{ $notice->status }}
                    </span>
                </p>

            </div>

            <div class="info-box">
                <label>Created At</label>
                <p>{{ $notice->created_at }}</p>
            </div>

        </div>

        <div class="description">

            <h3>
                <i class="fas fa-align-left"></i>
                Notice Description
            </h3>

            <div class="description-box">
                {!! nl2br(e($notice->description)) !!}
            </div>

        </div>

        @if($notice->attachment)

        <div class="attachment">

            <h3>
                <i class="fas fa-paperclip"></i>
                Attachment
            </h3>

            <a href="{{ asset($notice->attachment) }}"
               target="_blank"
               class="file-link">

               <i class="fas fa-download"></i>
               View Attachment

            </a>

        </div>

        @endif

    </div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>