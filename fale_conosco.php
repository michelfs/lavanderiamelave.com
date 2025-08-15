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




<section class="section bg-light" id="price">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <h2><span>Fale conosco</span></h2>
                <span class="scroll-title" data-enllax-ratio="2.5" data-enllax-type="foreground" data-enllax-direction="horizontal">Fale conosco</span>
                <p class="section_subtitle mx-auto">Fale conosco</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="price-box">
                                    <div class="p-box-inner">
                                        <div class="hover-line">
                                            <div class="price-box-header">
                                                <div class="plan-icons">
                                                    <i class="mdi mdi-whatsapp"></i>
                                                </div>
                                                <div class="price-title">Whatsapp</div>
                                            </div>

                                            <div class="header_btn">
                                                <a href="whatsapp.php" target="_blank" class="btn btn-success">ENTRAR EM CONTATO <i class="mdi mdi-arrow-right ml-2"></i></a>
                                            </div>

                                            <ul class="package-list-data">
                                                <li>Suporte Whatsapp</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">

                                <div class="price-box">
                                    <div class="p-box-inner">
                                        <div class="hover-line">

                                            <div class="price-box-header">
                                                <div class="plan-icons">
                                                    <i class="mdi mdi-instagram"></i>
                                                </div>
                                                <div class="price-title">Instagram</div>
                                            </div>

                                            <div class="header_btn">
                                                <a href="<?php echo $link_instagram; ?>" target="_blank" class="btn btn-success">VISITAR <i class="mdi mdi-arrow-right ml-2"></i></a>
                                            </div>

                                            <ul class="package-list-data">
                                                <li>Suporte Instagram</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</section>






<?php
include "include/footer.php"
?>