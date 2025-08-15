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
        <div class="welcome-text-area">
            <div class="area-bg"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h1 class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">Lavanderia Self service - automática<span class="typed"></span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <div class="d-flex justify-content-center align-items-center wow fadeInUp"  data-wow-delay="1s" data-wow-duration="1.5s">
                                <img src="theme/images/logo.png" class="img-fluid" alt="<?php echo $title; ?>">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home End -->



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
                                                <li>1 Cesto (+-20 peças)</li>
                                                <li>Sabão e amaciante incluso</li>
                                                <li>35 min</li>
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
                <!--<div id="map"></div>-->
                <iframe src="<?php echo $maps; ?>" width="1024" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- Start About-Us -->
<section class="section" id="aboutus">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <h2><span>Quem somos?</span></h2>
                <span class="scroll-title" data-enllax-ratio="2.5" data-enllax-type="foreground" data-enllax-direction="horizontal">Quem somos?</span>
                <p class="section_subtitle mx-auto">Somos uma lavanderia self service onde você mesmo lava ou seca
                    sua roupa.</p>
            </div>
        </div>



        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="about-image-block wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
                    <img src="theme/images/stacks/stack-1.jpg" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-text-block wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.5s">
                    <div class="about-content">
                        <h4>
                            Preço?
                        </h4>
                        <div class="text">Preço muito em conta apenas R$ <?php echo $valor_lavar; ?> para lavar ou para secar. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 order-md-2">
                <div class="about-image-block wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.5s">
                    <img src="theme/images/stacks/stack-2.jpg" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12 order-md-1">
                <div class="about-text-block wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
                    <div class="about-content">
                        <h4>
                            Produtos?
                        </h4>
                        <div class="text">Não precisa levar nenhum produto, todas máquinas já tem todos os produtos necessários e o dosador automático. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="image-container wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">

                <h4>Nossas máquinas</h4>

                <img src="theme/images/maquinas_lavar2.jpg" class="img-fluid" alt="">

                <!--
                    <div class="video-wrapper">
                        <a class="popup-youtube" data-toggle="modal" data-target="#videomodal" href="javascript:void(0)">
                            <img src="theme/images/maquinas_lavar.jpg" class="img-fluid" alt="">
                            <span class="video-play-button">
                                <span></span>
                            </span>
                        </a>
                    </div>
                -->


                </div>
            </div>
            <div class="modal fade" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="videomodal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content transparent-modal">
                        <div class="modal-body p-0">
                            <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <iframe src="https://www.youtube.com/embed/UB1O30fR-EE?controls=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About-Us -->



<!-- Start How-it-Work -->
<section class="section" id="howitworks">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <h2><span>Como lavar ou secar?</span></h2>
                <span class="scroll-title" data-enllax-ratio="2.5" data-enllax-type="foreground" data-enllax-direction="horizontal">Como lavar ou secar?</span>
                <p class="section_subtitle mx-auto">Estaremos listando passo a passo como executar a lavagem ou
                    secagem.</p>
            </div>
        </div>
        <div class="work-steps-process">
            <div class="work-steps-box">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="work-steps-detail d-flex align-items-start wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1000ms">
                            <div class="steps-icon">
                                <i class="mdi mdi-file-document-edit-outline"></i>
                            </div>
                            <div class="steps-text">
                                <h4>Escolha do Local e Pagamento</h4>
                                <p class="step-desc"><strong>Seleção da Lavanderia</strong>: Escolha uma máquina de
                                    lavar e/ou secar disponível de acordo com o tamanho da carga de roupa.</p><br>
                                <p class="step-desc"><strong>Método de Pagamento</strong>: Selecione cartão de crédito, débito ou Pix, seguindo as instruções na máquina.</p>
                            </div>
                        </div>

                        <div class="work-steps-detail d-flex align-items-start wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1000ms">
                            <div class="steps-icon">
                                <i class="mdi mdi-file-document-edit-outline"></i>
                            </div>
                            <div class="steps-text">
                                <h4>Preparação das Roupas</h4>
                                <p class="step-desc"><strong>Classificação das Roupas</strong>: Separe as roupas por cores e tipos de tecido para evitar manchas ou danos durante a lavagem.</p><br>
                                <p class="step-desc"><strong>Verificação dos Bolsos</strong>: Certifique-se de esvaziar bolsos e remover objetos como moedas, chaves ou itens pessoais.</p>
                            </div>
                        </div>

                        <div class="work-steps-detail d-flex align-items-start wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1000ms">
                            <div class="steps-icon">
                                <i class="mdi mdi-file-document-edit-outline"></i>
                            </div>
                            <div class="steps-text">
                                <h4>Carregamento e Início da Lavagem</h4>
                                <p class="step-desc"><strong>Carregamento das Máquinas</strong>: Carregue a máquina de lavar com a quantidade adequada de roupas de acordo com o cesto medidor.</p><br>
                                <p class="step-desc"><strong>Seleção do Ciclo de Lavagem</strong>: Escolha o ciclo desejado na máquina de lavar, considerando o tipo de tecido e o nível de sujeira das roupas, selecione: leve, médio ou pesado.</p>
                            </div>
                        </div>

                        <div class="work-steps-detail d-flex align-items-start wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1000ms">
                            <div class="steps-icon">
                                <i class="mdi mdi-file-document-edit-outline"></i>
                            </div>
                            <div class="steps-text">
                                <h4>Monitoramento e Espera</h4>
                                <p class="step-desc"><strong>Aguardar o Ciclo</strong>: Aguarde o ciclo de lavagem completar. Para lavagem 35 minutos e para secagem 45 minutos.</p><br>
                                <p class="step-desc"><strong>Como secar?</strong>: É necessário transferir as roupas da lavadora para uma máquina de secar após a lavagem.</p>
                            </div>
                        </div>

                        <div class="work-steps-detail d-flex align-items-start wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1000ms">
                            <div class="steps-icon">
                                <i class="mdi mdi-file-document-edit-outline"></i>
                            </div>
                            <div class="steps-text">
                                <h4>Finalização e Recolhimento das Roupas</h4>
                                <p class="step-desc"><strong>Fim do Ciclo</strong>: Após o término do ciclo de lavagem e/ou secagem, retire as roupas das máquinas.</p><br>
                                <p class="step-desc"><strong>Dobrar e Recolher</strong>: Dobre as roupas aproveite que elas estão bem quentes e não precisará passar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">

                    
                        <div class="work-steps-images wow fadeInRight" data-wow-delay="0.2" data-wow-duration="1000ms">
                            <!--<img src="theme/images/stacks/stack-3.jpg" class="img-fluid" alt="">-->

                            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/C2SgJqnAts_/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C2SgJqnAts_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/C2SgJqnAts_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicação compartilhada por Vem Lavar - Lavanderia PG (@vemlavar.lavanderia)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End How-it-Work -->
<!-- Start Counter-->
<section class="parallax parallax-box section">
    <div id="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-6">
                    <div class="counter-box text-center">
                        <div class="counter-ico"><i class="mdi mdi-wifi"></i></div>
                        <h3 id="number1" class="number counter-value" data-count="12">0</h3>
                        <span></span>
                        <p>Wifi grátis</p>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="counter-box text-center">
                        <div class="counter-ico"><i class="mdi mdi-air-conditioner"></i></div>
                        <h3 id="number2" class="number counter-value" data-count="55">0</h3>
                        <span></span>
                        <p>Ar-condicionado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter-->

<!-- Start FAQ's -->
<section id="faq" class="section">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <h2><span>Perguntas frequentes</span></h2>
                <span class="scroll-title" data-enllax-ratio="2.5" data-enllax-type="foreground" data-enllax-direction="horizontal">Perguntas frequentes</span>
                <p class="section_subtitle mx-auto">Abaixo estão algumas perguntas e respostas frequentes de
                    clientes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div id="accordion" class="faq-accordion-panel wow fadeInUp" data-wow-duration="1500ms">
                    <div class="question-card shadow-sm active">
                        <div class="card-header p-0" id="headingOne">
                            <h4 class="mb-0">
                                <button class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span>Como eu uso uma
                                        lavanderia self service automática?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                            </h4>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Utilizar nossas máquinas é fácil! Separe suas roupas por cores e tipos de
                                    tecido, carregue as máquinas de lavar, escolha o ciclo desejado e insira o
                                    pagamento. Nossas máquinas dosam automaticamente amaciantes e sabão,
                                    seguindo as instruções exibidas nelas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingTwo">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>Quanto tempo leva para
                                        lavar e secar as roupas?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    O tempo varia conforme o ciclo escolhido e o tamanho da carga. A lavagem leva 35 minutos, enquanto a secagem pode levar de 30 a 60
                                    minutos, dependendo da opção selecionada nas máquinas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingThree">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>Qual amaciante devo usar nas máquinas de
                                        lavar?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                            </h4>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Nossas máquinas de lavar já têm amaciantes e sabão dosados automaticamente. Você não
                                    precisa trazer seu próprio amaciante/sabão, pois eles são fornecidos e incorporados
                                    ao ciclo de lavagem.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingFour">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span>Posso lavar roupas delicadas ou que exigem
                                        cuidados especiais?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                            </h4>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Sim, você pode! Nossas máquinas oferecem configurações específicas para roupas
                                    delicadas, permitindo uma lavagem adequada para esses tecidos. Siga as
                                    instruções exibidas nas máquinas para selecionar o ciclo apropriado.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingFive">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span>Quais são os métodos de pagamento aceitos?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span>
                                </button>
                            </h4>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Aceitamos cartões de Crédito, Débito e Pix para facilitar o pagamento. Nossas
                                    máquinas de lavar e secar são compatíveis com esses métodos, proporcionando
                                    praticidade e agilidade no processo de pagamento.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingSix">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span>É necessário trazer meu próprio sabão ou amaciante?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span>
                                </button>
                            </h4>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Não é necessário. Nossas máquinas fornecem automaticamente os sabão,
                                    amaciantes e outros produtos necessários para a lavagem, incorporando-os ao
                                    processo sem que você precise trazê-los.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingSeven">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <span>Posso deixar minhas roupas na lavanderia enquanto elas lavam e
                                        secam?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span>
                                </button>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Sim, você pode esperar na lavanderia durante o processo. Acompanhe o progresso e
                                    retire suas roupas assim que terminarem para liberar as máquinas para outros
                                    clientes.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingEight">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <span>Qual é o horário de funcionamento da lavanderia?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span>
                                </button>
                            </h4>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Nosso horário de funcionamento todos os dias, das 8:00 às 22:00.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingNine">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <span>Vocês oferecem serviços de lavagem a seco ou passar roupas?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span>
                                </button>
                            </h4>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Focamos principalmente na lavagem e secagem de roupas. No entanto, algumas
                                    lavanderias self service podem oferecer máquinas de secagem a vapor.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="question-card shadow-sm">
                        <div class="card-header p-0" id="headingTen">
                            <h4 class="mb-0">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <span>O que devo fazer se uma máquina não estiver funcionando
                                        corretamente?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span>
                                </button>
                            </h4>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Por favor, avise imediatamente um funcionário da lavanderia para que possamos
                                    ajudar a resolver o problema ou oferecer uma máquina alternativa.
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</section>
<!-- End FAQ's -->
<!-- Start Testimonial -->
<section class="section client-Testimonials bg-light" id="client">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <h2><span>Depoimentos de clientes</span></h2>
                <span class="scroll-title" data-enllax-ratio="2.5" data-enllax-type="foreground" data-enllax-direction="horizontal">Depoimentos de clientes</span>
                <p class="section_subtitle mx-auto">abaixo está alguns dos depoimentos de nossos clientes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme client-slider wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1000ms">
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <i class="mdi mdi-account" style="font-size:70px;"></i>
                            </div>
                            <p class="client-say">
                                Uma experiência incrível! A lavanderia self service é muito prática e eficiente. O
                                fato de ter todos os produtos disponíveis nas máquinas, incluindo sabão e
                                amaciante, sem precisar carregar nada de casa, é ótimo. As máquinas modernas e a
                                variedade de ciclos de lavagem me impressionaram. Recomendo a todos que buscam uma
                                lavanderia de qualidade.
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Maria Silva
                                </a>
                            </h4>

                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <i class="mdi mdi-account" style="font-size:70px;"></i>
                            </div>
                            <p class="client-say">
                                Estou muito impressionado com a lavanderia self service! Suas máquinas automáticas
                                facilitam bastante a lavagem e secagem das roupas. Além disso, adorei o fato de não
                                precisar me preocupar com trazer sabão/amaciante, pois eles já estão inclusos e dosados
                                automaticamente. Sem dúvidas, recomendo essa lavanderia para todos que buscam
                                praticidade e eficiência.
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Mayara Silva
                                </a>
                            </h4>

                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <i class="mdi mdi-account" style="font-size:70px;"></i>
                            </div>
                            <p class="client-say">
                                Excelente serviço! Fiquei surpreso com a facilidade de usar as máquinas,
                                especialmente para lavar minhas roupas delicadas. As configurações específicas para
                                tecidos sensíveis foram realmente úteis. Além disso, a opção de pagamento via cartão
                                de crédito, débito e Pix tornou tudo ainda mais conveniente. Definitivamente, minha
                                lavanderia favorita na região!.
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Joana Cardoso
                                </a>
                            </h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial -->


<?php
include "include/footer.php"
?>