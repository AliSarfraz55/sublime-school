<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Apply Now</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
:root
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
    font-family:Arial, sans-serif;
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

.section-title{
    font-size:42px;
    font-weight:800;
    color:#0f172a;
    text-align:center;
    display:block;
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

     /* Admission Section */
.admission-page{
    padding:120px 0;
    background:linear-gradient(135deg,#f8fafc,#eef4ff);
    min-height:100vh;
}

/* Header */
.admission-header{
    text-align:center;
    margin-bottom:60px;
}

.admission-header h1{
    font-size:52px;
    font-weight:800;
    color:#0f172a;
    margin-bottom:15px;
    letter-spacing:-1px;
}

.admission-header p{
    font-size:18px;
    color:#64748b;
    max-width:650px;
    margin:auto;
    line-height:1.7;
}

/* Form Container */
.admission-form{
    max-width:950px;
    margin:auto;
    background:rgba(255,255,255,0.95);
    backdrop-filter:blur(15px);
    padding:45px;
    border-radius:28px;
    box-shadow:
        0 20px 50px rgba(37,99,235,.10),
        0 8px 20px rgba(0,0,0,.05);
    border:1px solid rgba(255,255,255,.6);
    transition:.35s ease;
}

.admission-form:hover{
    transform:translateY(-4px);
    box-shadow:
        0 25px 60px rgba(37,99,235,.15),
        0 12px 25px rgba(0,0,0,.08);
}

/* Row */
.row{
    display:flex;
    gap:25px;
    margin-bottom:22px;
}

/* Form Group */
.form-group{
    flex:1;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#1e293b;
    font-size:15px;
}

/* Inputs */
.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    padding:15px 18px;
    border:1.5px solid #dbe2ea;
    border-radius:14px;
    font-size:15px;
    background:#fff;
    transition:.3s ease;
    outline:none;
}

/* Placeholder */
.form-group input::placeholder,
.form-group textarea::placeholder{
    color:#94a3b8;
}

/* Focus Effect */
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.15);
}

/* Textarea */
.form-group textarea{
    resize:none;
    min-height:140px;
}

/* Submit Button */
.submit-btn{
    width:100%;
    border:none;
    padding:18px;
    border-radius:14px;
    background:linear-gradient(
        135deg,
        #2563eb,
        #3b82f6
    );
    color:#fff;
    font-size:18px;
    font-weight:700;
    cursor:pointer;
    transition:.35s ease;
    margin-top:10px;
    letter-spacing:.5px;
}

.submit-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 12px 25px rgba(37,99,235,.35);
}

.submit-btn:active{
    transform:scale(.98);
}

/* Mobile Responsive */
@media(max-width:768px){

    .admission-page{
        padding:80px 20px;
    }

    .row{
        flex-direction:column;
        gap:18px;
    }

    .admission-header h1{
        font-size:38px;
    }

    .admission-header p{
        font-size:16px;
    }

    .admission-form{
        padding:28px;
        border-radius:22px;
    }
}
    </style>
</head>
<body>

    @include('includes.aos')
        @include('includes.navbar')
@include('includes.whatsapp') 
<section class="admission-page">

    <div class="container">
        <form action="{{ route('admission.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="admission-form">

@csrf
        <div class="admission-header">
            <h1>Apply For Admission</h1>
            <p>Join Sublime School System and start your journey towards excellence.</p>
        </div>


            <div class="row">
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" name="student_name" required>
                </div>

                <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="father_name" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" required>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Class Applying For</label>
                    <select name="class" required>
                        <option value="">Select Class</option>
                        <option>Play Group</option>
                        <option>Nursery</option>
                        <option>KG</option>
                        <option>Class 1</option>
                        <option>Class 2</option>
                        <option>Class 3</option>
                        <option>Class 4</option>
                        <option>Class 5</option>
                        <option>Class 6</option>
                        <option>Class 7</option>
                        <option>Class 8</option>
                        <option>Class 9</option>
                        <option>Class 10</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Previous School</label>
                    <input type="text" name="previous_school">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Parent Contact</label>
                    <input type="number" name="contact" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea name="address" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>Birth Certificate / B-Form</label>
                <input type="file" name="document">
            </div>

            <button type="submit" class="submit-btn">
                Submit Application
            </button>

        </form>

    </div>

</section>


 @include('includes.footer')
@include('includes.scroll')
</body>
</html>