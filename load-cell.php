<!DOCTYPE html>
<html lang="en">

<head>
  <!--Begin Head-->
  <head>
    <?php $page='produtos'; include 'includes/head.php'; ?>
  </head>
  <!--End Head-->
</head>

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
            <a href="index.html">
              <img src="images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">

            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-placeholder text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">San Francisco</span>
                <span class="caption-text">Mountain View, Fake st., CA</span>
              </div>
            </div>

          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-call text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">000 209 392 312</span>
                <span class="caption-text">Toll free</span>
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
                <span class="caption-text">Gournadi, 1230 Bariasl</span>
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
    



    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Células de carga digitais</h1>
            <p class="text-white text-center">
              <a href="index.html">Home</a>
              <span class="mx-2">/</span>
              <span>Descrição do produto</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
        <div class="container">
            <div class="row">
                <!--
                <div class="col-md-7 mb-4">
                    <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                </div>
                -->
                <div class="col-md-12 ml-auto"> 
                    <h2 class="text-black mb-4">Vantagens e benefícios</h2>
                    <p>
                        Elimina os custos de manutenção.
                    </p>
                    <p>
                        Instalação fácil.
                    </p>
                    <p>
                        Precisão garantida ao longo do tempo.
                    </p>
                    <p>
                        Tranquilidade e segurança, mesmo nas condições de trabalho mais adversas.
                    </p>
                    <p>
                        Confiabilidade total, elimina as causas de falhas freqüentes nas balanças de caminhões</p> 
                    <p>
                        Diagnóstico preditivo: sistema de auto-monitoramento que notifica (na tela, por e-mail ou mensagem de texto) possíveis erros de pesagem imperceptíveis para o operador
                    </p> 
                    <p>
                        Facilidade e velocidade de reparo, praticamente eliminam o tempo de inatividade devido a quebra ou falha. As células de carga, os cabos ou o indicador de peso são substituídos sem recalibrar a balança
                    </p>
                    <p>
                        Trazabilidad + seguridad: registro interno programable, inviolable, de pesadas y eventos en la balanza.
                    </p>
                    <p>
                        Monitoramento on-line de temperatura, tensão, linearidade, instabilidade, zero e sensibilidade em cada célula de carga.
                    </p>
                    <p>
                        Conexões seguras com controle total do indicador: rede e indicador de célula, sem terminais ou caixa de derivação.
                    </p>
                    <p>
                        Proteção contra raios verificada por testes independentes, demonstrando sua resistência a um pico de 80.000 amperes.
                    </p>
                    <p>
                        Encapsulamento da célula de carga em aço inoxidável com vedação hermética IP68 + IP69k, e a conexão através do conector com vedação vidro-metal que garante a estanqueidade. A umidade não afeta a saída de dados.
                    </p>
                   <!--
                  
                   <p class="mb-5">Atque rerum fugiat iste voluptas, magni mollitia, cupiditate corporis perferendis veniam</p>
                    -->
                    <!--
                      <p><a href="#" class="btn btn-primary rounded-0 py-3 px-5">Visit Site</a></p>
                    -->
               </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo_balancys.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Nossa Empresa</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Nossos Serviços</a></li>
                <li><a href="#"> Nossa Equipe Profissional</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Nossos Serviços</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Industrial</a></li>
                  <li><a href="#">Construction</a></li>
                  <li><a href="#">Remodeling</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Our Partners</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

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