<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Teachers</title>
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
}

.main{
    flex:1;
    padding:30px;
}

/* Topbar */

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
    font-size:28px;
    font-weight:700;
}

/* Back Button */

.add-btn{
    background:var(--primary);
    color:#fff;
    text-decoration:none;
    padding:12px 22px;
    border-radius:12px;
    font-weight:600;
    transition:.3s;
}

.add-btn:hover{
    background:var(--primary-dark);
    transform:translateY(-2px);
}

/* Form Sections */

.activity{
    background:#fff;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    margin-bottom:25px;
    transition:.3s;
}

.activity:hover{
    transform:translateY(-3px);
}

.activity h3{
    color:#0f172a;
    margin-bottom:20px;
    font-size:22px;
    display:flex;
    align-items:center;
    gap:10px;
}

.activity h3 i{
    color:var(--primary);
}

/* Grid */

.form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

/* Form Group */

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:8px;
    font-weight:600;
    color:#0f172a;
}

/* Inputs */

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    background:#fff;
    font-size:15px;
    transition:.3s;
    outline:none;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:var(--primary);
    box-shadow:0 0 0 4px rgba(37,99,235,.12);
}

.form-group textarea{
    resize:none;
    min-height:120px;
}

/* Full Width */

.full-width{
    grid-column:1/-1;
}

/* File Upload */

input[type="file"]{
    padding:12px;
    background:#f8fafc;
    border:2px dashed #cbd5e1;
    cursor:pointer;
}

/* Buttons */

.text-center{
    text-align:center;
}

.save-btn{
    background:var(--primary);
    color:#fff;
    border:none;
    padding:14px 35px;
    border-radius:12px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.save-btn:hover{
    background:var(--primary-dark);
    transform:translateY(-2px);
}

.cancel-btn{
    background:#ef4444;
    color:#fff;
    text-decoration:none;
    padding:14px 35px;
    border-radius:12px;
    margin-left:10px;
    display:inline-block;
    transition:.3s;
}

.cancel-btn:hover{
    background:#dc2626;
    transform:translateY(-2px);
}

/* Required Mark */

.required{
    color:red;
}

/* Responsive */

@media(max-width:992px){

    .form-grid{
        grid-template-columns:1fr;
    }

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

    .topbar h2{
        font-size:22px;
    }

    .activity{
        padding:20px;
    }

    .save-btn,
    .cancel-btn{
        width:100%;
        display:block;
        margin:10px 0;
        text-align:center;
    }

}

@media(max-width:480px){

    .activity h3{
        font-size:18px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea{
        padding:12px;
        font-size:14px;
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

<body>

@include('admin.includes.aos')
@include('admin.includes.navbar')

<div class="wrapper">

@include('admin.includes.sidebar')

<div class="main">

    <!-- Topbar -->

    <div class="topbar">
        <h2>Add New Teacher</h2>

        <a href="{{ url('/teacher') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Teachers
        </a>
    </div>
<form action="{{ url('/store_teacher') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <!-- Basic Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-user"></i>
                Basic Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Teacher Name *</label>
                    <input type="text" name="name" required>
                </div>

                <div class="form-group">
                    <label>Father Name *</label>
                    <input type="text" name="father_name" required>
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

                <div class="form-group">
                    <label>CNIC *</label>
                    <input type="text" name="cnic">
                </div>

                <div class="form-group">
                    <label>Religion</label>
                    <input type="text" name="religion">
                </div>

            </div>

        </div>

        <!-- Professional Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-briefcase"></i>
                Professional Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Teacher ID *</label>
                    <input type="text" name="teacher_id">
                </div>

                <div class="form-group">
                    <label>Designation *</label>
                    <input type="text" name="designation">
                </div>

                <div class="form-group">
                    <label>Department *</label>
                    <input type="text" name="department">
                </div>

                <div class="form-group">
                    <label>Joining Date *</label>
                    <input type="date" name="joining_date">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Experience</label>
                    <input type="number" name="experience">
                </div>

            </div>

        </div>

        <!-- Contact Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-phone"></i>
                Contact Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Mobile Number *</label>
                    <input type="text" name="phone">
                </div>

                <div class="form-group">
                    <label>Whatsapp Number</label>
                    <input type="text" name="whatsapp">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email">
                </div>

                <div class="form-group">
                    <label>Emergency Contact</label>
                    <input type="text" name="emergency_contact">
                </div>

                <div class="form-group full-width">
                    <label>Address</label>
                    <textarea name="address"></textarea>
                </div>

            </div>

        </div>

        <!-- Qualification -->

        <div class="activity">

            <h3>
                <i class="fas fa-graduation-cap"></i>
                Qualification Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Qualification *</label>
                    <input type="text" name="qualification">
                </div>

                <div class="form-group">
                    <label>Specialization</label>
                    <input type="text" name="specialization">
                </div>

                <div class="form-group">
                    <label>University / Institute</label>
                    <input type="text" name="institute">
                </div>

                <div class="form-group">
                    <label>Passing Year</label>
                    <input type="text" name="passing_year">
                </div>

            </div>

        </div>

        <!-- Salary -->

        <div class="activity">

            <h3>
                <i class="fas fa-money-bill-wave"></i>
                Salary Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Basic Salary *</label>
                    <input type="number" name="salary">
                </div>

                <div class="form-group">
                    <label>Bank Name</label>
                    <input type="text" name="bank_name">
                </div>

                <div class="form-group">
                    <label>Account Number</label>
                    <input type="text" name="account_number">
                </div>

                <div class="form-group">
                    <label>IBAN</label>
                    <input type="text" name="iban">
                </div>

            </div>

        </div>

        <!-- Photo -->

        <div class="activity">

            <h3>
                <i class="fas fa-camera"></i>
                Teacher Photo
            </h3>

            <div class="form-group">
                <input type="file" name="photo">
            </div>

        </div>

        <!-- Login -->

        <div class="activity">

            <h3>
                <i class="fas fa-user-lock"></i>
                Login Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Username *</label>
                    <input type="text" name="username">
                </div>

                <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="password">
                </div>

            </div>

        </div>
<div class="form-group">
    <label>Role</label>
    <select name="role" required>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
    </select>
</div>

<div class="form-group">
    <label>Access</label>
    <select name="access" required>
        <option value="attendance">Attendance Only</option>
        <option value="full">Full Dashboard</option>
    </select>
</div>
        <!-- Buttons -->

        <div class="activity text-center">

            <button type="submit" class="save-btn">
                <i class="fas fa-save"></i>
                Save Teacher
            </button>

            <a href="{{ url('/teacher') }}" class="cancel-btn">
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