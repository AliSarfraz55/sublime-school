<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Collect Fee</title>
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
}

.add-btn:hover{
    background:var(--primary-dark);
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



/* Table */

.fee-table{
    width:100%;
    border-collapse:collapse;
}

.fee-table th{
    background:#2563eb;
    color:#fff;
    padding:15px;
}

.fee-table td{
    padding:15px;
    border-bottom:1px solid #eee;
}

.fee-table tr:hover{
    background:#f8fafc;
}

.status-paid{
    background:#dcfce7;
    color:#16a34a;
    padding:6px 12px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}

.status-pending{
    background:#fee2e2;
    color:#dc2626;
    padding:6px 12px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}

/* Buttons */

.text-center{
    text-align:center;
}

.save-btn{
    background: #b00303;
    color:#fff;
    border:none;
    padding:14px 30px;
    border-radius:12px;
    cursor:pointer;
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

@media(max-width:768px){

    .cards{
        grid-template-columns:1fr;
    }

    .form-grid{
        grid-template-columns:1fr;
    }

    .topbar{
        flex-direction:column;
        gap:15px;
        align-items:flex-start;
    }

    .fee-table{
        display:block;
        overflow-x:auto;
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
        <h2>Collect Fee</h2>

        <a href="{{ url('/fees') }}" class="add-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Fees
        </a>
    </div>

    

    <form action="{{ route('fees.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        

        <!-- Student Fee Information -->

        <div class="activity">

            <h3>
                <i class="fas fa-user-graduate"></i>
                Student Fee Information
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Student *</label>
                    <select name="student_id" required>
                    <option value="">Select Student</option>

                    @foreach($students as $student)
                        <option value="{{ $student->id }}">
                            {{ $student->name }}
                        </option>
                    @endforeach

                    </select>
                </div>
<div class="form-group">
    <label>Class *</label>

    <select name="class" required>

<option value="">Select Class</option>

@foreach($classes as $class)

<option value="{{ $class->id }}">
    {{ $class->class_name }}
</option>

@endforeach

</select>
</div>

                <div class="form-group">
                    <label>Fee Month *</label>
                    <input type="month" name="fee_month">
                </div>

                <div class="form-group">
                    <label>Due Date *</label>
                    <input type="date" name="due_date">
                </div>

            </div>

        </div>

        <!-- Payment Details -->

        <div class="activity">

            <h3>
                <i class="fas fa-credit-card"></i>
                Payment Details
            </h3>

            <div class="form-grid">

                <div class="form-group">
                    <label>Total Fee *</label>
                    <input type="number" name="total_fee">
                </div>

                <div class="form-group">
                    <label>Discount</label>
                    <input type="number" name="discount">
                </div>

                <div class="form-group">
                    <label>Fine</label>
                    <input type="number" name="fine">
                </div>

                <div class="form-group">
                    <label>Paid Amount *</label>
                    <input type="number" name="paid_amount">
                </div>

                <div class="form-group">
                    <label>Payment Method *</label>
                    <select name="payment_method">
                        <option>Cash</option>
                        <option>Bank Transfer</option>
                        <option>JazzCash</option>
                        <option>EasyPaisa</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Payment Date *</label>
                    <input type="date" name="payment_date">
                </div>
                <div class="form-group">
                    <label>Status *</label>

                    <select name="status" required>
                        <option value="">Select Status</option>
                        <option value="Paid">Paid</option>
                        <option value="Pending">Pending</option>
                        <option value="Partial">Partial</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Remaining Amount</label>
                    <input type="number" id="remaining_amount" name="remaining_amount" readonly>
                </div>
                <div class="form-group">
                    <label>Receipt No</label>
                    <input type="text" name="receipt_no" value="REC-{{ time() }}" readonly>
                </div>
                <div class="form-group">
                    <label>Receipt Image</label>
                    <input type="file" name="receipt_image" accept="image/*">
                </div>
            </div>

        </div>



        <!-- Buttons -->

        <div class="activity text-center">

            <button type="submit" class="save-btn">
                <i class="fas fa-check-circle"></i>
                Collect Fee
            </button>

            <a href="{{ url('/fees') }}" class="cancel-btn">
                Cancel
            </a>

        </div>

    </form>

</div>

</div>

@include('admin.includes.footer')
@include('admin.includes.scroll')
<script>

document.getElementById('class').addEventListener('change', function () {

    var fee = this.options[this.selectedIndex].getAttribute('data-fee');

    document.getElementById('total_fee').value = fee;

});

</script>
<script>
function calculateRemaining() {

    let total = parseFloat(document.getElementById('total_fee').value) || 0;
    let discount = parseFloat(document.getElementsByName('discount')[0].value) || 0;
    let fine = parseFloat(document.getElementsByName('fine')[0].value) || 0;
    let paid = parseFloat(document.getElementsByName('paid_amount')[0].value) || 0;

    let remaining = (total - discount + fine) - paid;

    if (remaining < 0) {
        remaining = 0;
    }

    document.getElementById('remaining_amount').value = remaining;
}

document.getElementById('total_fee').addEventListener('input', calculateRemaining);
document.getElementsByName('discount')[0].addEventListener('input', calculateRemaining);
document.getElementsByName('fine')[0].addEventListener('input', calculateRemaining);
document.getElementsByName('paid_amount')[0].addEventListener('input', calculateRemaining);
</script>
</body>
</html>