<style>
    .scroll-animate{
    opacity:0;
    transition:
        opacity 0.8s ease,
        transform 0.8s ease;
}

.scroll-animate.show{
    opacity:1;
}

</style>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const elements = document.querySelectorAll(
        ".section-title, .feature, .highlight, .module-card, .news-card, .contact-card, img, .principal-text, .hero-text, .about-text"
    );

    elements.forEach(el => {
        el.classList.add("scroll-animate");
    });

    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                entry.target.classList.add("show");
            }
        });
    },{
        threshold:0.15
    });

    elements.forEach(el => observer.observe(el));

});
</script>