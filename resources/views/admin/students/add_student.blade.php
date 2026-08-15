<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Students</title>
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

  .form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
    margin-top:20px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:8px;
    font-weight:600;
    color:#0f172a;
}

.form-group input,
.form-group select,
.form-group textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    outline:none;
    transition:.3s;
    background:#fff;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 3px rgba(37,99,235,.15);
}

textarea{
    resize:none;
    min-height:120px;
}

.full-width{
    grid-column:1/-1;
}

.save-btn{
    background:#2563eb;
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:12px;
    cursor:pointer;
    font-size:15px;
    font-weight:600;
}

.save-btn:hover{
    background:#1d4ed8;
}

.cancel-btn{
    background:#ef4444;
    color:#fff;
    padding:14px 30px;
    border-radius:12px;
    text-decoration:none;
    margin-left:10px;
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
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.topbar h2{
    color:#0f172a;
}

.add-btn{
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:12px;
    font-weight:600;
}

.activity{
    background:#fff;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    margin-bottom:25px;
}

.activity h3{
    margin-bottom:20px;
    color:#0f172a;
}

.text-center{
    text-align:center;
}
@media(max-width:768px){

    .form-grid{
        grid-template-columns:1fr;
    }

    .save-btn,
    .cancel-btn{
        width:100%;
        display:block;
        margin:10px 0;
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

    <div class="topbar">
        <h2>Add New Student</h2>

        <a href="{{ url('/student') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Students
        </a>
    </div>

   <form action="{{ url('/store_student') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

        <!-- Basic Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-user-graduate"></i>
                Basic Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Student Name *</label>
                    <input type="text" name="name" required>
                </div>

                <div class="form-group">
                    <label>Roll No *</label>
                    <input type="text" name="roll_no" required>
                </div>

                <div class="form-group">
                    <label>Date of Birth *</label>
                    <input type="date" name="dob">
                </div>

                <div class="form-group">
                    <label>Gender *</label>
                    <select name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

            </div>

        </div>

        <!-- Academic Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-school"></i>
                Academic Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Class *</label>
                    <select name="class">
                        <option>Select Class</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Section *</label>
                    <select name="section">
                        
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Admission Date *</label>
                    <input type="date" name="admission_date">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

            </div>

        </div>

        <!-- Parent Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-users"></i>
                Parent Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Father Name *</label>
                    <input type="text" name="father_name">
                </div>

                <div class="form-group">
                    <label>Phone *</label>
                    <input type="text" name="phone">
                </div>

                <div class="form-group full-width">
                    <label>Address</label>
                    <textarea name="address"></textarea>
                </div>

            </div>

        </div>

        <!-- Student Photo -->

        <div class="activity">

            <h3>
                <i class="fas fa-camera"></i>
                Student Photo
            </h3>

            <div class="form-group">
                <input type="file" name="photo">
            </div>

        </div>

        <!-- Buttons -->

        <div class="activity text-center">

            <button type="submit" class="save-btn">
                <i class="fas fa-save"></i>
                Save Student
            </button>

            <a href="{{ url('/students') }}" class="cancel-btn">
                Cancel
            </a>

        </div>

    </form>

</div>
</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')
</body>
</html>