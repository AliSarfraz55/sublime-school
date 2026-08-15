<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
//auth
Route::get('/login', [Welcome::class, 'login']);
Route::post('/register', [AdminController::class, 'register'])->name('register');
Route::post('/postlogin', [AdminController::class, 'postLogin'])->name('postlogin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
// frontend
Route::get('/', [Welcome::class, 'index']);
Route::get('/about', [Welcome::class, 'about']);
Route::get('/academic', [Welcome::class, 'academic']);
Route::get('/admission', [Welcome::class, 'admission']);
Route::get('/gallery', [Welcome::class, 'gallery']);
Route::get('/blog', [Welcome::class, 'blog']);
Route::get('/contact', [Welcome::class, 'contact']);
Route::post('/contact-store', [Welcome::class, 'contact_store'])->name('contact.store');
Route::get('/applynow', [Welcome::class, 'applynow']);
Route::post('/admission_store', [Welcome::class, 'admission_store'])->name('admission.store');
//admin
Route::get('/dashboard', function () {

    if(session('access') == 'attendance'){
        return redirect('/attendence');
    }

    return app(\App\Http\Controllers\AdminController::class)->dashboard();

});
Route::get('/attendence', function () {

    if(!session('teacher_id') && !Auth::check()){
        return redirect('/login');
    }

    return app(\App\Http\Controllers\AdminController::class)->attendence();

});
Route::post('/attendance/checkin', [AdminController::class, 'checkIn']);
Route::post('/attendance/checkout', [AdminController::class, 'checkOut']);
Route::get('/contact_messages', [AdminController::class, 'contact_messages'])->name('contact.messages');
Route::get('/contact/view/{id}', [AdminController::class, 'viewContact'])->name('contact.view');
Route::get('/contact/delete/{id}', [AdminController::class, 'deleteContact'])->name('contact.delete');
Route::get('/admissions', [AdminController::class,'admissions'])->name('admissions');
Route::get('/admission/view/{id}', [AdminController::class,'viewAdmission'])->name('admission.view');
Route::get('/admission/delete/{id}', [AdminController::class,'deleteAdmission'])->name('admission.delete');
Route::get('/admission/approve/{id}', [AdminController::class, 'approveAdmission'])->name('admission.approve');
Route::get('/admission/reject/{id}', [AdminController::class, 'rejectAdmission'])->name('admission.reject');
// Student Pages
Route::get('/student', [StudentController::class, 'index']);
Route::get('/add_student', [StudentController::class, 'add_student']);
Route::post('/store_student', [StudentController::class, 'store_student']);
Route::get('/view_student/{id}', [StudentController::class, 'view_student']);
Route::get('/edit_student/{id}', [StudentController::class, 'edit_student']);
Route::post('/update_student/{id}', [StudentController::class, 'update_student']);
Route::get('/delete_student/{id}', [StudentController::class, 'delete_student']);
// Teacher Pages
Route::get('/teacher', [TeacherController::class, 'teacher']);
Route::get('/add_teachers', [TeacherController::class, 'add_teachers']);
Route::post('/store_teacher', [TeacherController::class, 'store_teacher']);
Route::get('/view_teacher/{id}', [TeacherController::class, 'view_teacher']);
Route::get('/edit_teacher/{id}', [TeacherController::class, 'edit_teacher']);
Route::post('/update_teacher/{id}', [TeacherController::class, 'update_teacher']);
Route::get('/delete_teacher/{id}', [TeacherController::class, 'delete_teacher']);
// Class
Route::get('/class', [ClassController::class, 'class']);
Route::get('/add_class', [ClassController::class, 'add_class']);
Route::post('/store_class', [ClassController::class, 'store_class'])->name('store_class');
Route::get('/view_class/{id}', [ClassController::class,'view_class']) ->name('view_class');
Route::get('/edit_class/{id}', [ClassController::class,'edit_class']) ->name('edit_class');
Route::post('/update_class/{id}', [ClassController::class,'update_class']) ->name('update_class');
Route::get('/delete_class/{id}', [ClassController::class,'delete_class']) ->name('delete_class');
// Exam
Route::get('/exam', [ExamController::class,'exam']);
Route::get('/schedule_exam', [ExamController::class,'schedule_exam']);
Route::post('/store_exam', [ExamController::class,'store_exam']);
Route::get('/view_exam/{id}', [ExamController::class,'view_exam']);
Route::get('/edit_exam/{id}', [ExamController::class,'edit_exam']);
Route::post('/update_exam/{id}', [ExamController::class,'update_exam']);
Route::get('/delete_exam/{id}', [ExamController::class,'delete_exam']);
// Result
Route::get('/result', [ResultController::class,'result']);
Route::get('/publish_result', [ResultController::class,'publish_result']);
Route::post('/store_result', [ResultController::class,'store_result']);
Route::get('/view_result/{id}', [ResultController::class,'view_result']);
Route::get('/edit_result/{id}', [ResultController::class,'edit_result']);
Route::post('/update_result/{id}', [ResultController::class,'update_result']);
Route::get('/delete_result/{id}', [ResultController::class,'delete_result']);
// Subject
Route::get('/subject', [SubjectController::class, 'subject']);
Route::get('/create_subject', [SubjectController::class, 'create_subject']);
Route::post('/store_subject', [SubjectController::class, 'store_subject']);
Route::get('/view_subject/{id}', [SubjectController::class, 'view_subject']);
Route::get('/edit_subject/{id}', [SubjectController::class, 'edit_subject']);
Route::post('/update_subject/{id}', [SubjectController::class, 'update_subject']);
Route::get('/delete_subject/{id}', [AdminController::class, 'delete_subject']);
// Fees
Route::get('/fees', [FeesController::class, 'fees']);
Route::get('/collect_fee', [FeesController::class, 'collect_fee']);
Route::post('/collect_fee/store', [FeesController::class, 'store'])->name('fees.store');
Route::get('/view_fee/{id}', [FeesController::class, 'view_fee']);
Route::get('/edit_fee/{id}', [FeesController::class, 'edit_fee']);
Route::post('/update_fee/{id}', [FeesController::class, 'update_fee']);
Route::get('/delete_fee/{id}', [FeesController::class, 'delete_fee']);
Route::get('/receipt_fee/{id}', [FeesController::class, 'receipt_fee']);
// Notice
Route::get('/notice', [NoticeController::class, 'notice']);
Route::get('/publish_notice', [NoticeController::class, 'publish_notice']);
Route::post('/publish_notice', [NoticeController::class, 'store'])->name('publish.notice');
Route::get('/notice/view/{id}', [NoticeController::class, 'view'])->name('notice.view');
Route::get('/notice/edit/{id}', [NoticeController::class, 'edit'])->name('notice.edit');
Route::put('/notice/update/{id}', [NoticeController::class, 'update'])->name('notice.update');
Route::get('/notice/delete/{id}', [NoticeController::class, 'delete'])->name('notice.delete');
// Blog
Route::get('/blogs', [BlogController::class, 'blogs']);
Route::get('/add_blog', [BlogController::class, 'add_blog']);
Route::post('/save_blog', [BlogController::class, 'save_blog']);
Route::get('/view_blog/{id}', [BlogController::class, 'view_blog']);
Route::get('/edit_blog/{id}', [BlogController::class, 'edit_blog']);
Route::post('/update_blog/{id}', [BlogController::class, 'update_blog']);
Route::get('/blog/{id}', [BlogController::class, 'blog_detail']);
// Gallery
Route::get('/gallery_management', [GalleryController::class, 'gallery_management']);
Route::get('/add_gallery', [GalleryController::class, 'add_gallery']);
Route::post('/save_gallery', [GalleryController::class, 'save_gallery']);
Route::get('/view_gallery/{id}', [GalleryController::class, 'view_gallery']);
Route::get('/edit_gallery/{id}', [GalleryController::class, 'edit_gallery']);
Route::post('/update_gallery/{id}', [GalleryController::class, 'update_gallery']);
 Route::get('/delete_gallery/{id}', [GalleryController::class, 'delete_gallery']);
// Setting
Route::get('/setting', [AdminController::class, 'setting']);



