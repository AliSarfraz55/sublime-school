<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Fee</title>
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
/* Header */

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
    background:#2563eb;
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

/* Card */

.activity{
    background:#fff;
    padding:30px;
    border-radius:20px;
    margin-bottom:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.activity h3{
    margin-bottom:25px;
    color:#0f172a;
    font-size:22px;
}

/* Form */

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
    font-weight:600;
    margin-bottom:8px;
    color:#334155;
}

.form-group input{
    padding:14px;
    border:1px solid #e2e8f0;
    border-radius:12px;
    background:#f8fafc;
    color:#0f172a;
    font-size:15px;
}

.form-group input:focus{
    outline:none;
}

/* Receipt */

.receipt-box{
    text-align:center;
    margin-top:20px;
}

.receipt-box img{
    width:250px;
    border-radius:12px;
    border:2px solid #ddd;
    padding:5px;
}

/* Status */

.status-paid{
    display:inline-block;
    background:#dcfce7;
    color:#16a34a;
    padding:10px 20px;
    border-radius:30px;
    font-weight:600;
}

.status-pending{
    display:inline-block;
    background:#fee2e2;
    color:#dc2626;
    padding:10px 20px;
    border-radius:30px;
    font-weight:600;
}

.status-partial{
    display:inline-block;
    background:#fef3c7;
    color:#d97706;
    padding:10px 20px;
    border-radius:30px;
    font-weight:600;
}

/* Buttons */

.text-center{
    text-align:center;
}

.print-btn{
    background:#16a34a;
    color:#fff;
    text-decoration:none;
    padding:14px 30px;
    border-radius:12px;
    margin-right:10px;
    display:inline-block;
    font-weight:600;
}

.print-btn:hover{
    background:#15803d;
}

.back-btn{
    background:#dc2626;
    color:#fff;
    text-decoration:none;
    padding:14px 30px;
    border-radius:12px;
    display:inline-block;
    font-weight:600;
}

.back-btn:hover{
    background:#b91c1c;
}

/* Responsive */

@media(max-width:768px){

.form-grid{
    grid-template-columns:1fr;
}

.topbar{
    flex-direction:column;
    gap:15px;
    align-items:flex-start;
}

.receipt-box img{
    width:100%;
}

.print-btn,
.back-btn{
    width:100%;
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

    <!-- Header -->

    <div class="topbar">

        <h2>
            <i class="fas fa-file-invoice-dollar"></i>
            Fee Details
        </h2>

        <a href="{{ url('/fees') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Fees
        </a>

    </div>

    <!-- Fee Details -->

    <div class="activity">

        <h3>
            <i class="fas fa-user-graduate"></i>
            Student Information
        </h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Student Name</label>
                <input type="text"
                       value="{{ $fee->name }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Roll No</label>
                <input type="text"
                       value="{{ $fee->roll_no }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Class</label>
                <input type="text"
                       value="{{ $fee->class_name }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Fee Month</label>
                <input type="text"
                       value="{{ $fee->fee_month }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Due Date</label>
                <input type="text"
                       value="{{ $fee->due_date }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Total Fee</label>
                <input type="text"
                       value="Rs. {{ $fee->total_fee }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Discount</label>
                <input type="text"
                       value="Rs. {{ $fee->discount }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Fine</label>
                <input type="text"
                       value="Rs. {{ $fee->fine }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Paid Amount</label>
                <input type="text"
                       value="Rs. {{ $fee->paid_amount }}"
                       readonly>
            </div>

            <div class="form-group">
                <label>Remaining Amount</label>
                <input type="text"
                       value="Rs. {{ $fee->remaining_amount }}"
                       readonly>
            </div>

        </div>

    </div> 
    <!-- Payment Information -->

<div class="activity">

    <h3>
        Payment Information
    </h3>

    <div class="form-grid">

        <div class="form-group">
            <label>Payment Method</label>
            <input type="text" value="{{ $fee->payment_method }}" readonly>
        </div>

        <div class="form-group">
            <label>Payment Date</label>
            <input type="text" value="{{ $fee->payment_date }}" readonly>
        </div>

        <div class="form-group">
            <label>Receipt No</label>
            <input type="text" value="{{ $fee->receipt_no }}" readonly>
        </div>

        <div class="form-group">
            <label>Status</label>

            @if(strtolower($fee->status)=="paid")
                <span class="status-paid">Paid</span>

            @elseif(strtolower($fee->status)=="pending")
                <span class="status-pending">Pending</span>

            @else
                <span class="status-partial">Partial</span>
            @endif

        </div>

    </div>

</div>
<div class="activity">

    <h3>
        Receipt Image
    </h3>

    <div class="receipt-box">

        @if($fee->receipt_image)

            <img src="{{ asset('receipt_images/'.$fee->receipt_image) }}">

        @else

            <h3 style="color:red;">No Receipt Uploaded</h3>

        @endif

    </div>

</div>

</body>
</html>