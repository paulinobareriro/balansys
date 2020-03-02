<?php 
if(isset($_POST['submit'])){
    $mailto = "paulino.barreiro@balansys.pt"; // Balansys email address 
    $from = $_POST['email'];   // Sender email address 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From:" . $from;

    mail($mailto,$subject,$message,$headers);

    
    echo "Correio enviado. Obrigado " . $first_name . ", entraremos em contato em breve.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
<!--Begin Head-->
<head>
    <?php $page='home'; include 'includes/head.php'; ?>
</head>
<!--End Head-->
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="index.php">
              <img src="images/logo_balancys.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">

            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-placeholder text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">Av. Alameda Silva Rocha, 109, Aveiro</span>
                <span class="caption-text"></span>
              </div>
            </div>

          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-call text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">Ligue-Nos Agora</span>
                <span class="caption-text">+351 234421282</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-email text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">geral@balansys.pt</span>
                <span class="caption-text"></span>
              </div>
            </div>
          </div>

          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      <!--Begin NavBar-->
        <?php include 'includes/navbar.php'; ?>
      <!--End NavBar  -->
    </div>
    
    <div class="hero-slide owl-carousel site-blocks-cover">

      <div class="intro-section" style="background-image: url('images/banner_2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <span class="d-block"></span>
              <h1>Soluções na diversidade de indústrias</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/banner_3.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <span class="d-block"></span>
              <h1>Soluções na diversidade de indústrias</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/banner.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Somos especializados em <strong>soluções de balança</strong></h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <span class="d-block"></span>
              <h1>Experiências em trabalhos de alta qualidade</h1>
            </div>
          </div>
        </div>
      </div>

      

    </div>
    <!-- END slider -->
    

   
    <!--Begin Serviços-->
      <?php include 'includes/services.php'; ?>
    <!--End Serviços  -->
  



    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 align-self-end">
            <img src="images/img_transparent.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-7 align-self-center mb-5">

            <div class="bg-black  quote-form-wrap wrap text-white">
              <div class="mb-5">
                <h3 class="section-subtitle">Envie-nos um e-mail</h3>
                <!--<h2 class="section-title mb-4"><strong>Quote</strong></h2>-->
              </div>
              <form action="#" class="quote-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Seu nome*">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Seu telefone*">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="email" class="form-control" placeholder="Seu email*">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Assunto*">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <textarea name="message" class="form-control" id="" placeholder="Como podemos ajudar*" cols="30" rows="7"></textarea>
                  </div>
                  <div class="col-md-6 align-self-end">
                    <input type="submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Enviar Mensagem">
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section block-3">
      <div class="container">
        
        <div class="mb-5">
          <h3 class="section-subtitle">Áreas de Atuação</h3>
          <h2 class="section-title mb-4">Explore nossas <strong>Áreas de Atuação</strong></h2>
        </div>

        <div class="projects-carousel-wrap">
          <div class="owl-carousel owl-slide-3">
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category"></span>
                  <h2 class="project-item-title">
                    Laboratório
                  </h2>
                </a>
              </div>
              <img src="images/bal_laboratorio.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category"></span>
                  <h2 class="project-item-title">
                     Balanças Rodoviárias 
                  </h2>
                </a>
              </div>
              <img src="images/bal_rail.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category"></span>
                  <h2 class="project-item-title">
                    Aviação 
                  </h2>
                </a>
              </div>
              <img src="images/bal_aviacion.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category"></span>
                  <h2 class="project-item-title">
                    Building Refinery 
                  </h2>
                </a>
              </div>
              <img src="images/bal_comercial.jpg" alt="Image" class="img-fluid">
            </div>


          </div>
        </div>

      </div>
    </div>

    

    

   

    

    

    <!--Begin footer-->
      <?php include 'includes/footer.php'; ?>
    <!--End foooter  -->
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>