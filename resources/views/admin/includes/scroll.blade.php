<button id="scrollTopBtn">
    <i class="fas fa-arrow-up"></i>
</button>

<style>
#scrollTopBtn{
    position:fixed;
    bottom:90px;
    right:20px;

    width:58px;
    height:58px;

    border:none;
    border-radius:50%;

    background:linear-gradient(
        135deg,
        #2563EB,
        #1D4ED8
    );

    color:#fff;
    font-size:24px;
    font-weight:700;

    display:flex;
    align-items:center;
    justify-content:center;

    cursor:pointer;
    z-index:9999;

    opacity:0;
    visibility:hidden;

    transform:translateY(20px);

    box-shadow:
    0 10px 25px rgba(37,99,235,.35);

    transition:.4s ease;
}

#scrollTopBtn.show{
    opacity:1;
    visibility:visible;
    transform:translateY(0);
}

#scrollTopBtn:hover{
    transform:translateY(-6px) scale(1.08);

    background:linear-gradient(
        135deg,
        #F59E0B,
        #D97706
    );

    box-shadow:
    0 15px 35px rgba(245,158,11,.45);
}

#scrollTopBtn span{
    transition:.3s;
}

#scrollTopBtn:hover span{
    transform:translateY(-4px);
}


@media(max-width:768px){

    #scrollTopBtn{
        width:50px;
        height:50px;
        right:15px;
        bottom:85px;
        font-size:20px;
    }

}


</style>

<script>

const scrollBtn = document.getElementById("scrollTopBtn");

window.addEventListener("scroll", () => {

    if(window.scrollY > 250){

        scrollBtn.classList.add("show");

    }else{

        scrollBtn.classList.remove("show");

    }

});


scrollBtn.addEventListener("click", () => {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});

</script>