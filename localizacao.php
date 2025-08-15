<?php
include "include/header.php";
?>



<!-- Home Start-->
<section class="home-section" id="home">
    <!-- Line Animations Effect-->
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <!-- Circle Animations Effect-->
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="home-bg">

    </div>
</section>
<!-- Home End -->




<section class="section getin-touch">
    <div class="container">
    <h3><span><strong>No Waze:</strong> <?php echo $title; ?> Lavanderia</span></h3><br>


        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">


                

                <h2><span><?php echo $endereco_completo; ?></span></h2>



                <span class="scroll-title" data-enllax-ratio="2.5" data-enllax-type="foreground" data-enllax-direction="horizontal">Localização</span>
                <p class="section_subtitle mx-auto">Localização</p>

            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-12 col-sm-12">
            <iframe src="https://www.google.com/maps/place/Av.+Pres.+Kennedy,+12644+-+Vila+Cai%C3%A7ara,+Praia+Grande+-+SP,+11707-005/data=!4m2!3m1!1s0x94ce2032979a2eab:0x9a2274aa195d8abc?sa=X&ved=1t:242&ictx=111" width="1024" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>







<?php
include "include/footer.php"
?>