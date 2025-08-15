
<!-- Start Footer -->
<footer class="footer theme-bg overflow-hidden">
    <!-- Circle Animations Effect-->
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-top">
                    <div class="foot_logo d-flex align-items-center justify-content-center">
                        <img src="theme/images/logo.png" class="img-fluid d-block" alt="">
                    </div>
                    <p class="ftr-about"><?php echo $endereco_completo; ?> <br>
                    <?php echo $title; ?> - Lavanderia self service auto atendimento - <?php echo $bairro; ?> - <?php echo $cidade; ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <ul class="footer_menu_list list-unstyled mb-0">
                    <li><a href="index.php">Início</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="localizacao.php">Mapa</a></li>
                    <li><a href="fale_conosco.php">Fale conosco</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="copyrights">
                    <p class="mb-0 text-center">2023 &copy; <span class="text-white font-weight-bold"><?php echo $title; ?>.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center">
                    <a class="social-icons" target="_blank" href="<?php echo $url_site; ?>/whatsapp.php"><i class="mdi mdi-whatsapp"></i></a>
                    <a class="social-icons" target="_blank" href="<?php echo $link_facebook; ?>"><i class="mdi mdi-facebook-box"></i></a>
                    <a class="social-icons" target="_blank" href="<?php echo $link_instagram; ?>"><i class="mdi mdi-instagram"></i></a>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Back To Top -->
<a href="#" class="back_top"> <i class="mdi mdi-chevron-up"></i></a>



<style>
    .whats-fixed-footer {
        background: #190;
        color: #fff;
        font-size: 1.3em;
        font-weight: 200;
        text-align: center;
        padding: 4px 0;
        border-radius: 3px;
        margin-bottom: 25px
    }

    #fixed-footer {
        width: 100%;
        height: 38px;
        background-color: #5ba544;
        background-repeat: x;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, .1);
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 10;
        border-bottom: 1px solid #d7d7d7;
    }

    #fixed-footer a,
    #fixed-footer a:hover,
    #fixed-footer a:visited {
        color: #fff;
    }
</style>


<div class="row">
    <div class="col-lg-12">

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">

            <i class="bi bi-arrow-up-short"></i></a>

        <div id="fixed-footer">
            <div class="whats-fixed-footer">
            <i class="mdi mdi-whatsapp"></i>
                <a href="whatsapp.php" target="_blank">WhatsApp: <img src="theme/images/whatsapp2.png"></a>
            </div>
        </div>

    </div>
</div>


<!-- Javascript -->
<script src="theme/js/jquery.min.js"></script>
<script src="theme/js/popper.min.js"></script>
<script src="theme/js/bootstrap.min.js"></script>
<script src="theme/js/jquery.easing.min.js"></script>
<script src="theme/js/owl.carousel.min.js"></script>
<script src="theme/js/parallax.js"></script>
<script src="theme/js/wow.min.js"></script>
<script src="theme/js/typed.min.js"></script>
<script src="theme/js/jquery.enllax.min.js"></script>
<script src="theme/js/isotope.pkgd.min.js"></script>
<script src="theme/js/jquery.magnific-popup.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false'></script>
<!-- Main Js   -->
<script src="theme/js/main.js"></script>
</body>

</html>