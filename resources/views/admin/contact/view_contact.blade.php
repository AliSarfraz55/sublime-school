<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Contact</title>
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
.topbar{
    background:#fff;
    padding:20px 25px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    margin-bottom:30px;
}

.topbar h2{
    color:#0f172a;
}

.message-card{
    background:#fff;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.info-row{
    display:flex;
    margin-bottom:25px;
    border-bottom:1px solid #eee;
    padding-bottom:15px;
}

.label{
    width:180px;
    font-weight:bold;
    color:#0f172a;
}

.value{
    flex:1;
    color:#475569;
    word-break:break-word;
}

.message-box{
    background:#f8fafc;
    border-left:5px solid #2563eb;
    padding:20px;
    border-radius:12px;
    line-height:1.8;
    color:#334155;
    margin-top:10px;
}

.back-btn{
    display:inline-block;
    margin-top:30px;
    padding:12px 24px;
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    border-radius:10px;
    transition:.3s;
}

.back-btn:hover{
    background:#1d4ed8;
}

@media(max-width:768px){

.info-row{
    flex-direction:column;
}

.label{
    width:100%;
    margin-bottom:8px;
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
<i class="fas fa-envelope-open-text"></i>
View Contact Message
</h2>
</div>

<div class="message-card">

<div class="info-row">
<div class="label">Message ID</div>
<div class="value">{{ $message->id }}</div>
</div>

<div class="info-row">
<div class="label">Sender Name</div>
<div class="value">{{ $message->name }}</div>
</div>

<div class="info-row">
<div class="label">Email Address</div>
<div class="value">{{ $message->email }}</div>
</div>

<div class="info-row">
<div class="label">Status</div>
<div class="value">

@if($message->status=="Read")

<span style="color:green;font-weight:bold;">
Read
</span>

@else

<span style="color:red;font-weight:bold;">
Unread
</span>

@endif

</div>
</div>

<div class="info-row">
<div class="label">Received On</div>
<div class="value">
{{ date('d M Y h:i A',strtotime($message->created_at)) }}
</div>
</div>

<div class="info-row" style="border:none;display:block;">

<div class="label" style="margin-bottom:15px;">
Message
</div>

<div class="message-box">

{{ $message->message }}

</div>

</div>

<a href="{{ route('contact.messages') }}" class="back-btn">
<i class="fas fa-arrow-left"></i>
Back to Messages
</a>

</div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>