<?php 


   
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    class mailSender
    {
        public $smtpHost;
        public $smtpPort;
        public $sender;
        public $password;
        public $receiver;
        public $code;

        public function __construct($receiver)
        {
            /**
             * Your email id  
             * For example : johndoe@gmail.com
             * contact@johndoe.com
             * 
             */
            $this->sender = "paulino.barreiro@balansys.pt"; 

            /**
             *  YOUR PASSWORD 
             *  ************
             */               
            $this->password = "*5689Balsys";  

            /**
             * Receiver email
             * For example : johndoe@gmail.com
             */     
            $this->receiver = $receiver;  

            /**
             * YOUR SMTP HOST NAME 
             * For example : smtp.gmail.com 
             * OR mail.youwebsite.com
             */     
            $this->smtpHost="mail.balansys.pt";        
            
            /**
             * SMTP port number
             * For example :587
             */
            $this->smtpPort = 587;

        }
        public function sendMail(){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->Host = $this->smtpHost;   
            $mail->Port = $this->smtpPort;    
            $mail->IsHTML(true);
            $mail->Username = $this->sender;
            $mail->Password = $this->password;
            $mail->Body=$this->getHTMLMessage();
            $mail->Subject = "Your verification code is {$this->code}";
            $mail->SetFrom($this->sender,"Verification Codes");
            $mail->AddAddress($this->receiver);
            if($mail->send()){
              echo "MAIL SENT SUCCESSFULLY";
              // return true;
              exit;  
            }
            echo "FAILED TO SEND MAIL";
            // return false;

        }
        public function getVerificationCode()
        {
            return (int) substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        }

        public function getHTMLMessage(){
            //$this->code=$this->getVerificationCode();   
            $this->code=$_POST['subject'];
            $htmlMessage=<<<MSG
            <!DOCTYPE html>
            <html>
            <body>
                <h1>Your verification code is {$this->code}</h1>
                <p>Use this code to verify your account.</p>
            </body>
            </html>        
            MSG;
            return $htmlMessage;
        }

    }
  // pass your recipient's email
  $vc=new mailSender('paulino.barreiro@balansys.pt'); 
  $vc->sendMail(); // MAIL SENT SUCCESSFULLY
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
             
                <h1>Soluções de vanguarda para otimização industrial</h1>
             
            </div>
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('images/celdas.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <span class="d-block"></span>
              <a href="load-cell.php">
                <h1>Células de carga digitais, dispositivos de enorme versatilidade no campo da pesagem.</h1>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('images/banner_4.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <span class="d-block"></span>
              <h1>Soluções de pesagem versáteis e prontas para uso (Balanças portáteis)</h1>
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
            
              <h1>Somos especialistas em <strong>Soluções de Pesagem</strong> para a Indústria</h1>
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

              <form action="<?=$_SERVER['index.html'];?>" class="quote-form">
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
                    <textarea name="message" class="form-control" id="" placeholder="Como podemos te ajudar*" cols="30" rows="7"></textarea>
                  </div>
                  <div class="col-md-6 align-self-end">
                    <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Enviar Mensagem">
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
          <h3 class="section-subtitle">Áreas de Negócio</h3>
          <h2 class="section-title mb-4">Explore nossas <strong>Áreas de Negócio</strong></h2>
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
                     Balanças comerciais / Industriais 
                  </h2>
                </a>
              </div>
              <img src="images/bal_comercial.jpg" alt="Image" class="img-fluid">
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