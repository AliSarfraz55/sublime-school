<style>
    
/* SIDEBAR */

.sidebar{
    width:280px;
    background:linear-gradient(
        180deg,
        #0f172a,
        #1e3a8a,
        #2563eb
    );
    padding:30px 0;
    min-height:100vh;
    box-shadow:0 20px 40px rgba(0,0,0,.12);
    flex-shrink:0;
    transition:.3s;
}

.sidebar ul{
    list-style:none;
    padding:20px 0;
}

.sidebar ul li a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:15px 25px;
    color:#fff;
    text-decoration:none;
    transition:.3s;
}

.sidebar ul li a:hover,
.sidebar ul li a.active{
    background:rgba(255,255,255,.12);
    border-left:4px solid #f59e0b;
}

/* MOBILE TOGGLE */

.menu-toggle{
    display:none;
    position:fixed;
    top:80px;
    left:15px;
    width:50px;
    height:50px;
    background:#2563eb;
    color:#fff;
    border:none;
    border-radius:10px;
    z-index:99999;
    cursor:pointer;
}

.sidebar-overlay{
    display:none;
}

/* MOBILE */

@media(max-width:768px){

.sidebar{
    position:fixed;
    top:0;
    left:-280px;
    width:280px;
    height:100vh;
    z-index:1000000;
    overflow-y:auto;
    transition:.3s;
}

.sidebar.active{
    left:0;
}

.menu-toggle{
    display:block;
    z-index:10000000;
}

.sidebar-overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.5);
    z-index:9999;
    display:none;
}

.sidebar-overlay.active{
    display:block;
}

}
</style>

   <button class="menu-toggle" id="menuToggle">
    <i class="fas fa-bars"></i>
</button>
    <!-- Sidebar -->


<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="sidebar" id="sidebar">   

<ul>

@if(session('access') == 'attendance')

<li>
<a href="{{ url('/attendence') }}"
   class="{{ request()->is('attendence*') ? 'active' : '' }}">
    <i class="fas fa-clipboard-check"></i>
    <span>Attendance</span>
</a>
</li>

<li>
<a href="{{ url('/logout') }}">
    <i class="fas fa-sign-out-alt"></i>
    <span>Logout</span>
</a>
</li>

@else

<li>
<a href="{{ url('/dashboard') }}"
   class="{{ request()->is('dashboard') ? 'active' : '' }}">
    <i class="fas fa-home"></i>
    <span>Dashboard</span>
</a>
</li>

@if(session('access') == 'full' || session('role') == 'admin')

<li>
<a href="{{ url('/student') }}"
class="{{ request()->is('student') ||
          request()->is('add_student') ||
          request()->is('view_student/*') ||
          request()->is('edit_student/*') ? 'active' : '' }}">
    <i class="fas fa-user-graduate"></i>
    <span>Students</span>
</a>
</li>

@endif

<li>
<a href="{{ url('/teacher') }}"
class="{{ request()->is('teacher') ||
          request()->is('add_teacher') ||
          request()->is('view_teacher/*') ||
          request()->is('edit_teacher/*') ? 'active' : '' }}">
    <i class="fas fa-chalkboard-teacher"></i>
    <span>Teachers</span>
</a>
</li>

<li>
<a href="{{ url('/class') }}"
class="{{ request()->is('class') ||
          request()->is('add_class') ||
          request()->is('view_class/*') ||
          request()->is('edit_class/*') ? 'active' : '' }}">
    <i class="fas fa-school"></i>
    <span>Classes</span>
</a>
</li>

<li>
<a href="{{ url('/exam') }}"
class="{{ request()->is('exam') ||
          
          request()->is('view_exam/*') ||
          request()->is('edit_exam/*') ||
          request()->is('schedule_exam/*') ? 'active' : '' }}">
    <i class="fas fa-file-alt"></i>
    <span>Exams</span>
</a>
</li>

<li>
<a href="{{ url('/result') }}"
class="{{ request()->is('result') ||
          request()->is('result/*') ||
          request()->is('publish_result') ||
          request()->is('add_result') ||
          request()->is('view_result/*') ||
          request()->is('edit_result/*') ? 'active' : '' }}">
    <i class="fas fa-chart-bar"></i>
    <span>Results</span>
</a>
</li>

<li>
<a href="{{ url('/subject') }}"
class="{{ request()->is('subject') ||
          request()->is('add_subject') ||
          request()->is('view_subject/*') ||
          request()->is('edit_subject/*') ? 'active' : '' }}">
    <i class="fas fa-book"></i>
    <span>Subjects</span>
</a>
</li>

@if(
    session('access') == 'attendance' ||
    session('access') == 'full' ||
    session('role') == 'admin'
)

<li>
<a href="{{ url('/attendence') }}"
class="{{ request()->is('attendence') ||
          request()->is('attendance/*') ? 'active' : '' }}">
    <i class="fas fa-clipboard-check"></i>
    <span>Attendance</span>
</a>
</li>

@endif
<li>
<a href="{{ url('/fees') }}"
class="{{ request()->is('fees') ||
          request()->is('fees/*') ||
          request()->is('collect_fee') ||
          request()->is('collect_fee/*') ||
          request()->is('add_fee') ||
          request()->is('add_fee/*') ||
          request()->is('view_fee/*') ||
          request()->is('edit_fee/*') ? 'active' : '' }}">
    <i class="fas fa-money-bill"></i>
    <span>Fees</span>
</a>
</li>

<li>
<a href="{{ url('/notice') }}"
class="{{ request()->is('notice') ||
          request()->is('publish_notice') ||
          request()->is('view_notice/*') ||
          request()->is('edit_notice/*') ? 'active' : '' }}">
    <i class="fas fa-bullhorn"></i>
    <span>Notices</span>
</a>
</li>

<li>
<a href="{{ url('/blogs') }}"
class="{{ request()->is('blogs') ||
          request()->is('add_blog') ||
          request()->is('view_blog/*') ||
          request()->is('edit_blog/*') ? 'active' : '' }}">
    <i class="fas fa-blog"></i>
    <span>Blogs</span>
</a>
</li>

<li>
<a href="{{ url('/gallery_management') }}"
class="{{ request()->is('gallery_management') ||
          request()->is('add_gallery') ||
          request()->is('view_gallery/*') ||
          request()->is('edit_gallery/*') ? 'active' : '' }}">
    <i class="fas fa-images"></i>
    <span>Gallery</span>
</a>
</li>

<li>
<a href="{{ url('/contact_messages') }}"
class="{{ request()->is('contact_messages') ||
          request()->is('contact/view/*') ? 'active' : '' }}">
    <i class="fas fa-envelope"></i>
    <span>Contact Messages</span>
</a>
</li>

<li>
<a href="{{ url('/admissions') }}"
class="{{ request()->is('admissions') ||
          request()->is('admission/view/*') ||
          request()->is('admission/edit/*') ? 'active' : '' }}">
    <i class="fas fa-user-graduate"></i>
    <span>Admissions</span>
</a>
</li>



<li>
<a href="{{ url('/logout') }}">
    <i class="fas fa-sign-out-alt"></i>
    <span>Logout</span>
</a>
</li>

@endif

</ul>

    </div>
<script>
document.addEventListener('DOMContentLoaded', function(){

    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    if(menuToggle && sidebar && overlay){

        menuToggle.addEventListener('click', function(){
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', function(){
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        });

    }

});
</script>