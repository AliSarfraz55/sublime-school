<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Fee</title>
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
    font-size:22px;
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
    color:#334155;
}

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    outline:none;
    font-size:15px;
    transition:.3s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 3px rgba(37,99,235,.15);
}

.form-group img{
    width:180px;
    margin-top:10px;
    border-radius:12px;
    border:1px solid #ddd;
}

.full-width{
    grid-column:1/-1;
}

.text-center{
    text-align:center;
}

.save-btn{
    background: #3c7c00;
    color:#fff;
    border:none;
    padding:14px 35px;
    border-radius:12px;
    cursor:pointer;
    font-size:16px;
    font-weight:600;
    transition:.3s;
}

.save-btn:hover{
    background:#15803d;
}

.cancel-btn{
    background: #f91616;
    color:#fff;
    text-decoration:none;
    padding:14px 35px;
    border-radius:12px;
    margin-left:10px;
    display:inline-block;
    transition:.3s;
}

.cancel-btn:hover{
    background:#b91c1c;
}

.preview-box{
    margin-top:10px;
}

.preview-box img{
    width:180px;
    border-radius:10px;
    border:1px solid #ddd;
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

    <!-- Header -->

    <div class="topbar">

        <h2>Edit Fee</h2>

        <a href="{{ url('/fees') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Fees
        </a>

    </div>

    <form action="/update_fee/{{ $fee->id }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

        <!-- Student Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-user-graduate"></i>
                Student Fee Information
            </h3>

            <div class="form-grid">

                <!-- Student -->

                <div class="form-group">

                    <label>Student *</label>

                    <select name="student_id" required>

                        @foreach($students as $student)

                        <option value="{{ $student->id }}"
                        {{ $fee->student_id==$student->id ? 'selected' : '' }}>

                            {{ $student->name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <!-- Class -->

                <div class="form-group">

                    <label>Class *</label>

                    <select name="class" required>

@foreach($classes as $class)

<option value="{{ $class->id }}"
{{ $fee->class == $class->id ? 'selected' : '' }}>

{{ $class->class_name }}

</option>

@endforeach

</select>

                </div>

                <!-- Fee Month -->

                <div class="form-group">

                    <label>Fee Month *</label>

                    <input
                    type="month"
                    name="fee_month"
                    value="{{ $fee->fee_month }}"
                    required>

                </div>

                <!-- Due Date -->

                <div class="form-group">

                    <label>Due Date *</label>

                    <input
                    type="date"
                    name="due_date"
                    value="{{ $fee->due_date }}"
                    required>

                </div>

            </div>

        </div>
        <!-- Payment Details -->

<div class="activity">

    <h3>Payment Details</h3>

    <div class="form-grid">

        <div class="form-group">
            <label>Total Fee *</label>
            <input type="number" name="total_fee"
                   value="{{ $fee->total_fee }}" required>
        </div>

        <div class="form-group">
            <label>Discount</label>
            <input type="number" name="discount"
                   value="{{ $fee->discount }}">
        </div>

        <div class="form-group">
            <label>Fine</label>
            <input type="number" name="fine"
                   value="{{ $fee->fine }}">
        </div>

        <div class="form-group">
            <label>Paid Amount *</label>
            <input type="number" name="paid_amount"
                   value="{{ $fee->paid_amount }}" required>
        </div>

        <div class="form-group">
            <label>Payment Method *</label>

            <select name="payment_method">

                <option value="Cash"
                    {{ $fee->payment_method=='Cash'?'selected':'' }}>
                    Cash
                </option>

                <option value="Bank Transfer"
                    {{ $fee->payment_method=='Bank Transfer'?'selected':'' }}>
                    Bank Transfer
                </option>

                <option value="JazzCash"
                    {{ $fee->payment_method=='JazzCash'?'selected':'' }}>
                    JazzCash
                </option>

                <option value="EasyPaisa"
                    {{ $fee->payment_method=='EasyPaisa'?'selected':'' }}>
                    EasyPaisa
                </option>

            </select>

        </div>

        <div class="form-group">
            <label>Payment Date *</label>
            <input type="date"
                   name="payment_date"
                   value="{{ $fee->payment_date }}">
        </div>

        <div class="form-group">
            <label>Status</label>

            <select name="status">

                <option value="Paid"
                    {{ $fee->status=='Paid'?'selected':'' }}>
                    Paid
                </option>

                <option value="Pending"
                    {{ $fee->status=='Pending'?'selected':'' }}>
                    Pending
                </option>

                <option value="Partial"
                    {{ $fee->status=='Partial'?'selected':'' }}>
                    Partial
                </option>

            </select>

        </div>

        <div class="form-group">
            <label>Remaining Amount</label>
            <input type="number"
                   id="remaining_amount"
                   name="remaining_amount"
                   value="{{ $fee->remaining_amount }}"
                   readonly>
        </div>

        <div class="form-group">
            <label>Receipt No</label>
            <input type="text"
                   name="receipt_no"
                   value="{{ $fee->receipt_no }}"
                   readonly>
        </div>

        <div class="form-group">
            <label>Receipt Image</label>

            <input type="file"
                   name="receipt_image"
                   accept="image/*">

            @if($fee->receipt_image)
                <br><br>
                <img src="{{ asset('receipt_images/'.$fee->receipt_image) }}"
                     width="150">
            @endif

        </div>

    </div>

</div>

<!-- Buttons -->

<div class="activity text-center">

    <button type="submit" class="save-btn">
        Update Fee
    </button>

    <a href="{{ url('/fees') }}" class="cancel-btn">
        Cancel
    </a>

</div>
</from>
</body>
</html>