<style>
footer{
    position:relative;
    background:linear-gradient(135deg,#020617,#0f172a,#1e293b);
    color:#fff;
    padding:80px 0 25px;
    overflow:hidden;
}

footer::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background:linear-gradient(90deg,#2563eb,#06b6d4,#2563eb);
}

footer::after{
    content:"";
    position:absolute;
    width:450px;
    height:450px;
    background:rgba(37,99,235,.08);
    border-radius:50%;
    top:-150px;
    right:-150px;
    filter:blur(80px);
}

.footer-grid{
    display:grid;
    grid-template-columns:1.5fr 1fr 1fr;
    gap:60px;
    position:relative;
    z-index:2;
}

.footer-title{
    font-size:30px;
    font-weight:700;
    margin-bottom:18px;
}

.footer-grid h3{
    font-size:20px;
    margin-bottom:25px;
    position:relative;
}

.footer-grid h3::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-10px;
    width:50px;
    height:3px;
    border-radius:20px;
    background:#3b82f6;
}

.footer-grid p{
    color:#cbd5e1;
    line-height:1.9;
}

footer ul{
    list-style:none;
    padding:0;
}

footer ul li{
    margin-bottom:15px;
}

footer ul li a{
    color:#cbd5e1;
    text-decoration:none;
    transition:.35s;
    display:inline-block;
}

footer ul li a:hover{
    color:#60a5fa;
    transform:translateX(8px);
}

/* Contact */

.contact-item{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:18px;
    color:#cbd5e1;
}

.contact-item i{
    flex-shrink: 0;
    width:42px;
    height:42px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:rgba(255,255,255,.08);
    color:#60a5fa;
}

/* SOCIAL */

.social{
    display:flex;
    gap:16px;
    margin-top:30px;
}

.social a{
    text-decoration:none;
}

.social i{
    width:52px;
    height:52px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    font-size:20px;
    color:#fff;
    transition:.4s;
    box-shadow:0 10px 25px rgba(0,0,0,.3);
}

/* Instagram Original */

.social a.instagram i{
    background:linear-gradient(
    45deg,
    #f09433,
    #e6683c,
    #dc2743,
    #cc2366,
    #bc1888
    );
}

/* Facebook Original */

.social a.facebook i{
    background:#1877F2;
}

/* LinkedIn Original */

.social a.linkedin i{
    background:#0A66C2;
}

.social i:hover{
    transform:translateY(-8px) scale(1.12);
    box-shadow:0 15px 35px rgba(0,0,0,.45);
}

.copyright{
    position:relative;
    z-index:2;
    text-align:center;
    margin-top:55px;
    padding-top:25px;
    border-top:1px solid rgba(255,255,255,.1);
    color:#94a3b8;
    font-size:14px;
}

@media(max-width:768px){

.footer-grid{
    grid-template-columns:1fr;
    text-align:center;
    gap:40px;
}

.footer-grid h3::after{
    left:50%;
    transform:translateX(-50%);
}

.contact-item{
    justify-content:center;
}

.social{
    justify-content:center;
}

.footer-title{
    font-size:25px;
}
.contact-item span {
    white-space: nowrap;
}
}
</style>
    <footer id="contact">

    <div class="container footer-grid">

        <div>
            <h2 class="footer-title">
                SUBLIME SCHOOL SYSTEM
            </h2>

            <p>
                Empowering students through quality education,
                innovation, discipline and character building
                for a brighter future.
            </p>

          <div class="social">

    <a href="https://www.instagram.com/" class="instagram" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>

    <a href="https://www.facebook.com/profile.php?id=100088228089128" class="facebook" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>

    <a href="https://www.linkedin.com/" class="linkedin" target="_blank">
        <i class="fab fa-linkedin-in"></i>
    </a>

</div>
        </div>

        <div>

            <h3>Quick Links</h3>
  <ul>
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/admission') }}">Admissions</a></li>
        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
        <li><a href="{{ url('/academic') }}">Academics</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
      </ul>

        </div>

        <div>

            <h3>Contact Info</h3>

            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <span>+92 308 6489990</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span>info@school.com</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-location-dot"></i>
                <span>Anar Kali Bazar Sarkari Parao,Hafizabad</span>
            </div>

        </div>

    </div>

    <div class="copyright">
        © 2026 Sublime School System. All Rights Reserved.
    </div>

</footer>