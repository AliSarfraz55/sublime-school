<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Admissions</title>
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

.card{

    background:#fff;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);

}

.row{

    display:flex;
    border-bottom:1px solid #eee;
    padding:18px 0;

}

.label{

    width:220px;
    font-weight:bold;
    color:#0f172a;

}

.value{

    flex:1;
    color:#475569;

}

.document-btn{

display:inline-block;
padding:10px 20px;
background:#2563eb;
color:#fff;
text-decoration:none;
border-radius:8px;

}

.back-btn{

display:inline-block;
margin-top:30px;
padding:12px 25px;
background:#2563eb;
color:#fff;
text-decoration:none;
border-radius:10px;

}

.pending{

color:#d97706;
font-weight:bold;

}

.approved{

color:#16a34a;
font-weight:bold;

}

.rejected{

color:#dc2626;
font-weight:bold;

}

@media(max-width:768px){

.row{

flex-direction:column;

}

.label{

width:100%;
margin-bottom:8px;

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

<div class="topbar">

<h2>

<i class="fas fa-user-graduate"></i>

Admission Details

</h2>

</div>

<div class="card">

<div class="row">
<div class="label">Student Name</div>
<div class="value">{{ $application->student_name }}</div>
</div>

<div class="row">
<div class="label">Father Name</div>
<div class="value">{{ $application->father_name }}</div>
</div>

<div class="row">
<div class="label">Date of Birth</div>
<div class="value">{{ $application->dob }}</div>
</div>

<div class="row">
<div class="label">Gender</div>
<div class="value">{{ $application->gender }}</div>
</div>

<div class="row">
<div class="label">Class</div>
<div class="value">{{ $application->class }}</div>
</div>

<div class="row">
<div class="label">Previous School</div>
<div class="value">{{ $application->previous_school }}</div>
</div>

<div class="row">
<div class="label">Parent Contact</div>
<div class="value">{{ $application->contact }}</div>
</div>

<div class="row">
<div class="label">Email</div>
<div class="value">{{ $application->email }}</div>
</div>

<div class="row">
<div class="label">Address</div>
<div class="value">{{ $application->address }}</div>
</div>

<div class="row">

<div class="label">Document</div>

<div class="value">

@if($application->document)

<a href="{{ asset('admission_documents/'.$application->document) }}"
target="_blank"
class="document-btn">

<i class="fas fa-download"></i>

View Document

</a>

@else

No Document Uploaded

@endif

</div>

</div>

<div class="row">

<div class="label">Status</div>

<div class="value">

@if($application->status=='Approved')

<span class="approved">Approved</span>

@elseif($application->status=='Rejected')

<span class="rejected">Rejected</span>

@else

<span class="pending">Pending</span>

@endif

</div>

</div>

<div class="row">

<div class="label">Apply Date</div>

<div class="value">

{{ date('d M Y h:i A',strtotime($application->created_at)) }}

</div>

</div>

<a href="{{ route('admissions') }}" class="back-btn">

<i class="fas fa-arrow-left"></i>

Back

</a>

</div>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')

</body>
</html>