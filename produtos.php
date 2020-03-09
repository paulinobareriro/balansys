<!DOCTYPE html>
<html lang="en">
<!--Begin Head-->
<head>
  <?php $page='produtos'; include 'includes/head.php'; ?>
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
    



    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Produtos</h1>
            <p class="text-white text-center">
              <a href="index.php">Início</a>
              <span class="mx-2">/</span>
              <span>Produtos</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="load-cell.php">
                            <span class="project-item-category">Descrição do produto</span>
                            <h2 class="project-item-title">
                               Células de carga digitais.
                            </h2>
                            </a>
                        </div>
                        <img src="images/celdas.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="project-single.html">
                            <span class="project-item-category"></span>
                            <h2 class="project-item-title">
                               Balanças para pesagem de animais
                            </h2>
                            </a>
                        </div>
                        <img src="images/bal_animais.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="project-single.html">
                            <span class="project-item-category"></span>
                            <h2 class="project-item-title">
                                Plataformas
                            </h2>
                            </a>
                        </div>
                        <img src="images/plataforma_ind.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="project-single.html">
                            <span class="project-item-category"></span>
                            <h2 class="project-item-title">
                              Pesagem especializada na indústria da aviação
                            </h2>
                            </a>
                        </div>
                        <img src="images/bal_aviacion.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="project-single.html">
                            <span class="project-item-category"></span>
                            <h2 class="project-item-title">
                                Pesagem especializada na indústria de alimentos
                            </h2>
                            </a>
                        </div>
                        <img src="images/bal_food.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="project-single.html">
                            <span class="project-item-category"></span>
                            <h2 class="project-item-title">
                              Verificadores de peso
                            </h2>
                            </a>
                        </div>
                        <img src="images/checker.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="project-single.html">
                            <span class="project-item-category"></span>
                            <h2 class="project-item-title">
                               Laboratorio
                            </h2>
                            </a>
                        </div>
                        <img src="images/bal_laboratorio.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="truck.php">
                            <span class="project-item-category">Descrição do produto</span>
                            <h2 class="project-item-title">
                              Pesa Camiões 
                            </h2>
                            </a>
                        </div>
                        <img src="images/bal_trucks.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    

            
            
    


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo_balancys.png" alt="Image" class="img-fluid"></p>
            <p>A <strong>Balansys</strong> projeta, constrói e comercializa dispositivos e soluções integradas de pesagem, baseadas nas mais recentes tecnologias, e adaptadas às necessidades específicas de cada área de atividade.</p>  
            <!--
            <p><a href="#">Learn More</a></p>
            -->
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Nossa Empresa</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Sobre Nós</a></li>
                <!--<li><a href="#">News</a></li> -->
                <li><a href="#">Nossos Serviços</a></li>
                <li><a href="#">Nossa Equipe Profissional</a></li>
                <!--
                <li><a href="#">Careers</a></li>
                <li><a href="#">Projects</a></li>
                -->
            </ul>
          </div>
          <!--
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Nossos Serviços</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Industrial</a></li>
                  <li><a href="#">Construction</a></li>
                  <li><a href="#">Remodeling</a></li>
              </ul>
          </div>
          -->
          <!--
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
          -->
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
  <!-- Begin scripts -->
   <?php include 'includes/scripts.php'; ?>
  <!-- End scripts -->  

</body>

</html>