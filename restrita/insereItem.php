<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nota Fiscal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div class="col-xl-12">
<?php 
		include 'conecta.php';
		echo "<br>";

		session_start();
		$nf = $_SESSION['nf'];
		echo "<b>Numero da NF: ". $nf . "</b><br>";
		$id_prod = $_POST['produto_opcao'];
		$qtde_prod = $_POST['qtde'];

		$consulta = "SELECT preco,nome FROM produtos WHERE id='$id_prod'";
		$consulta = $conexao->query($consulta);
		$linha = $consulta->fetch_assoc();
		print_r($linha);
		$preco = $linha['preco'];
		$nome = $linha['nome'];

        $subtotal = $preco * $qtde_prod;


    ?>
    </div>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        
    </header>
    <main>
        <!-- Hero Start-->
        <div class="slider-area slider-bg ">
            <div class="single-slider d-flex align-items-center slider-height2 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center pt-50">
                                <h2>Ultima Nota</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
                <img class="slider-shape2" src="assets/img/hero/right-top-shape.png" alt="">
                <img class="slider-shape3" src="assets/img/hero/left-botom-shape.png" alt="">
            </div>
        </div>
        <!--Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
                <div class="container">

        

								<form  class="form-contact contact_form" action="insereItemNf.php" method="POST">
								<div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
								<p>Id Produto: <input type="text" name="id_prod" value="<?php echo $id_prod; ?>" reandonly="reandonly">
								</p>
								</div>
								</div>
								<div class="col-sm-6">
                                        <div class="form-group">
								<p>Produto: <input type="text" name="nome_produto" value="<?php echo $nome; ?>" reandonly="reandonly">
								</p>
								</div>
									</div>
									<div class="col-sm-6">
                                        <div class="form-group">
								<p>Valor Unit: <input type="text" name="valor_unit" value="<?php echo $preco; ?>" reandonly="reandonly">
								</p>
								</div>
									</div>
									<div class="col-12">
                                        <div class="form-group">
								<p>QTDE: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" reandonly="reandonly">
								</p>
								</div>
                                    </div>
								</div>
								<div class="form-group mt-3">
								<p>Subtotal: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>" reandonly="reandonly">
								</p>
								<input class="button button-contactForm boxed-btn" type="submit" name="Adicionar Produto">
								</div>

	</form>
                            </form>
                        </div>
                        
                </div>
            </section>
        <!-- ================ contact section end ================= -->
    </main>
    <footer>
       <!-- Footer Start-->
	   <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
               </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-9 ">
                            
                        </div>
                        
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

    </body>
    
</html>