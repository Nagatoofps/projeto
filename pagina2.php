<?php
if(!isset($_SESSION)){
session_start();
include('protecao.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Croco gym</title>
<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="iLand Multipurpose Landing Page Template">
<meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
<!-- Resource style -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<!-- Resource style -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="#main">Inicio</a></li>
            <li><a class="page-scroll" href="#pricing">Segurança</a></li>
            <li><a class="page-scroll" href="#contact">Aulas</a></li>
            <li><a class="page-scroll" href="sair.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid -->
  
  <div class="main app form" id="main"><!-- Main Section-->
    <div class="hero-section">
      <div class="container nopadding">
        <div class="col-md-12">
          <div class="hero-content text-center">
              <h1 class="wow fadeInUp" data-wow-delay="0.1s">Bem vindo ao painel <?php echo $_SESSION['nome']; ?></h1>
        </div>
      </div>
    </div>
    
    <!-- Package Section -->
    <div id="pricing" class="pricing-section text-center">
      <div class="container">
        <div class="col-md-12 col-sm-12 nopadding">
          <div class="pricing-intro">
            <h1 class="wow fadeInUp" data-wow-delay="0s">MANTENHA SUA CONTA SEGURA</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"> Uma das principais dicas para não ter a sua conta invadida é não ter uma senha muito fácil de preferência, evite as senhas mais comuns ou óbvias. Além disso, como já explicamos, uma senha mais longa normalmente é melhor do que uma combinação que nunca dá pra lembrar entre maiúsculas, minúsculas, números e caracteres especiais.</p>
          </div>
          <div class="col-sm-6">
            <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
              <div class="pricing-details">
                <h2>Redefinir senha</h2>
                
                <ul>
                    <form action="trocasenha.php" method="POST">
             
              <input class="sombraclass circleclass telefoneclass" type="password" name="senhaantiga" placeholder="Digite sua antiga senha."><br>
              <br>
              <input class="sombraclass circleclass telefoneclass" type="password" name="senhanova" placeholder="Digite sua nova senha."><br>
              <br><!--  -->
              <br>
              <button class="btn btn-primary btn-action btn-fill">Redefinir</button>
            </form>
                </ul>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
              <div class="pricing-details">
                <h2>Excluir conta</h2>
                <span>⚠️</span>
                <ul>
                    <br>
                   
                    <form action="excluir.php" method="POST">    
              <button class="btn btn-primary btn-action btn-fill">Excluir permanentemente.</button>
            </form>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Subscribe Form -->
    <div class="cta-sub no-color">
      <div class="container">
        <div class="cta-inner">
          <h1 class="wow fadeInUp" data-wow-delay="0s">Pesquise aulas disponiveis através do dia desejado</h1>
          <p class="wow fadeInUp" data-wow-delay="0.2s"> Descubra novas atrações dentro da academia. </p>
          <div class="form wow fadeInUp" data-wow-delay="0.3s">
            <form class="subscribe-form center-form wow zoomIn" id="subscribeform">
             <input class="mail" type="text" name="dia" placeholder="Ex: Segunda, Terça, Quarta, Quinta, Sexta, Sábado" autocomplete="off" id="subemail">
              <input class="submit-button" type="submit" value="Pesquisar" name="send" id="subsubmit">
             </form>
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
   $(document).ready(function() {
  $('#subscribeform').submit(function(e) {
 e.preventDefault(); 

var dia = $('#subemail').val();

      $.ajax({
       type: 'POST',
url: 'pesquisa.php',
 data: { dia: dia },
success: function(result) {
       if (result.trim() !== "") {
        alert('Resultados da Pesquisa:\n\n' + result);
        } else {
           alert('Nenhum registro encontrado para o dia informado.');
              }
          },
          error: function() {
         alert('Ocorreu um erro ao processar a pesquisa.');
          }
        });
     });
  });
    </script>

<div id="resultado-pesquisa"></div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Section -->
    <div class="footer" id="contact">
      <div class="container">
        <div class="col-md-6 contact">
          <h1>Trainer</h1>
          <p>O maior centro de treinamento do Brasil, os melhores profissionais do mercado, os melhores equipamentos do mundo.</p>
          <p>Nossa linha de máquinas que se destaca não só pelo design, mas também pela qualidade, segurança e execução dos movimentos.</p>
        </div>
        <div class="col-md-3 contact footer-menu">
          <h1>Social</h1>
          <ul>
            <li><a href="https://www.facebook.com/ironberg.maringa/">Facebook</a></li>
            <li><a href="https://www.tiktok.com/@ironbergct">Tiktok</a></li>           
            <li><a href="https://www.youtube.com/@IronbergCT/featured">Youtube</a></li>
            
          </ul>
        </div>
        <div class="col-md-3 contact">
          <h1>Contato</h1>
          <p> © Copyright Todos os direitos reservados Ironberg </p>
          <a href="tel:48988335343">(48) 98833-5343</a> </div>
      </div>
    </div>
  </div>
  
  <!-- Scroll To Top --> 
  
  <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a> 
  
  <!-- Scroll To Top Ends--> 
  
</div>
<!-- Main Section -->
</div>
<!-- Wrapper--> 

<!-- Jquery and Js Plugins --> 
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script src="js/jquery.subscribe.js"></script>
</body>
</html>

