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
        
    
<section class="section bg-light" id="price">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <h2><span>Preços de nossos serviços</span></h2>
                <span class="scroll-title" data-enllax-ratio="2.5" data-enllax-type="foreground" data-enllax-direction="horizontal">PROMOÇÃO</span>
                <p class="section_subtitle mx-auto">Serviços</p>
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
                                                    <i class="mdi mdi-washing-machine"></i>
                                                </div>
                                                <div class="price-title">Lavar</div>
                                            </div>

                                            <ul class="package-list-data">
                                                <li>1 Cesto (+-25 peças)</li>
                                                <li>Sabão e amaciante incluso</li>
                                                <li>32 min</li>
                                                <li>Você mesmo realiza</li>
                                            </ul>
                                            <h2><em>R$</em><?php echo $valor_lavar; ?></h2>
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
                                                    <i class="mdi mdi-weather-windy"></i>
                                                </div>
                                                <div class="price-title">Secar</div>
                                            </div>

                                            <ul class="package-list-data">
                                                <li>1 Cesto (+-25 peças)</li>
                                                <li>45 min</li>
                                                <li>Você mesmo realiza</li>
                                            </ul>
                                            <h2><em>R$</em><?php echo $valor_secar; ?></h2>
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

    
    </div>
</section>
<!-- Home End -->





<section class="section getin-touch">
    <div class="container">

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