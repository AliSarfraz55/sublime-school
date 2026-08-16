<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Notices</title>
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
    margin-bottom:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.topbar h2{
    color:#0f172a;
}

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
    background:#1d4ed8;
}

.activity{
    background:#fff;
    padding:30px;
    border-radius:20px;
    margin-bottom:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.activity h3{
    margin-bottom:20px;
    color:#0f172a;
}

.form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:8px;
    font-weight:600;
}

.form-group input,
.form-group select,
.form-group textarea{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    outline:none;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 3px rgba(37,99,235,.15);
}

.full-width{
    grid-column:1/-1;
}

textarea{
    resize:none;
}

.text-center{
    text-align:center;
}

.save-btn{
    background:#16a34a;
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:12px;
    cursor:pointer;
    font-size:15px;
    font-weight:600;
}

.save-btn:hover{
    background:#15803d;
}

.cancel-btn{
    background:var(--danger);
    color:#fff;
    text-decoration:none;
    padding:14px 30px;
    border-radius:12px;
    margin-left:10px;
}

.current-file{
    background:#f8fafc;
    border:1px solid #e2e8f0;
    padding:15px;
    border-radius:10px;
    margin-bottom:15px;
}

.current-file a{
    color:#2563eb;
    text-decoration:none;
    font-weight:600;
}

@media(max-width:768px){

    .form-grid{
        grid-template-columns:1fr;
    }

    .topbar{
        flex-direction:column;
        gap:15px;
        align-items:flex-start;
    }

    .save-btn,
    .cancel-btn{
        width:100%;
        display:block;
        margin:10px 0;
        text-align:center;
    }

    .main{
        padding:15px;
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

        <h2>Edit Notice</h2>

        <a href="{{ url('/notice') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Notices
        </a>

    </div>

    <form method="POST"
          action="{{ route('notice.update',$notice->id) }}"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="activity">

            <h3>
                <i class="fas fa-edit"></i>
                Notice Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Notice Title *</label>
                    <input type="text"
                           name="title"
                           value="{{ $notice->title }}"
                           required>
                </div>

                <div class="form-group">
                    <label>Notice Category *</label>

                    <select name="category">

                        <option value="General"
                        {{ $notice->category == 'General' ? 'selected' : '' }}>
                        General
                        </option>

                        <option value="Exam"
                        {{ $notice->category == 'Exam' ? 'selected' : '' }}>
                        Exam
                        </option>

                        <option value="Admission"
                        {{ $notice->category == 'Admission' ? 'selected' : '' }}>
                        Admission
                        </option>

                        <option value="Holiday"
                        {{ $notice->category == 'Holiday' ? 'selected' : '' }}>
                        Holiday
                        </option>

                        <option value="Meeting"
                        {{ $notice->category == 'Meeting' ? 'selected' : '' }}>
                        Meeting
                        </option>

                    </select>

                </div>

                <div class="form-group">
                    <label>Publish Date *</label>
                    <input type="date"
                           name="publish_date"
                           value="{{ $notice->publish_date }}"
                           required>
                </div>

                <div class="form-group">
                    <label>Expiry Date</label>
                    <input type="date"
                           name="expiry_date"
                           value="{{ $notice->expiry_date }}">
                </div>

                <div class="form-group">

                    <label>Audience *</label>

                    <select name="audience">

                        <option value="All Users"
                        {{ $notice->audience == 'All Users' ? 'selected' : '' }}>
                        All Users
                        </option>

                        <option value="Students"
                        {{ $notice->audience == 'Students' ? 'selected' : '' }}>
                        Students
                        </option>

                        <option value="Teachers"
                        {{ $notice->audience == 'Teachers' ? 'selected' : '' }}>
                        Teachers
                        </option>

                        <option value="Parents"
                        {{ $notice->audience == 'Parents' ? 'selected' : '' }}>
                        Parents
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label>Status</label>

                    <select name="status">

                        <option value="Published"
                        {{ $notice->status == 'Published' ? 'selected' : '' }}>
                        Published
                        </option>

                        <option value="Draft"
                        {{ $notice->status == 'Draft' ? 'selected' : '' }}>
                        Draft
                        </option>

                    </select>

                </div>

                <div class="form-group full-width">

                    <label>Notice Details *</label>

                    <textarea name="description"
                              rows="6"
                              required>{{ $notice->description }}</textarea>

                </div>

            </div>

        </div>

        <div class="activity">

            <h3>
                <i class="fas fa-paperclip"></i>
                Attachment
            </h3>

            @if($notice->attachment)

            <div class="current-file">

                Current Attachment :

                <a href="{{ asset($notice->attachment) }}"
                   target="_blank">
                    View File
                </a>

            </div>

            @endif

            <input type="file"
                   name="attachment"
                   accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

        </div>

        <div class="activity text-center">

            <button type="submit" class="save-btn">

                <i class="fas fa-save"></i>

                Update Notice

            </button>

            <a href="{{ url('/notice') }}"
               class="cancel-btn">

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