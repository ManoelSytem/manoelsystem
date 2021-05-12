
<!DOCTYPE HTML>
<head>
<title>SoftwMicro</title>
<?php ini_set('default_charset','iso-8859-1');?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="img/demo/ManoelSystem.png" type="image/png" sizes="16x16">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="boxes/css/style5.css">
<!-- JS Files -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/js/slippry.min.js"></script>
<link rel="stylesheet" href="/css/slippry.css" />
<script src="js/jquery.tools.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.eislideshow.js"></script>
<script src="js/custom.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<script>
    
jQuery.noConflict()(function ($) {
    $('#ei-slider').eislideshow({
        animation: 'center',
        autoplay: true,
        slideshow_interval: 3000,
        titlesFactor: 0
    });
});
</script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
<script src="js/slides/slides.min.jquery.js"></script>
<script src="js/cycle-slider/cycle.js"></script>
<script src="js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="js/tabify/jquery.tabify.js"></script>
<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/scrolltop/scrolltopcontrol.js"></script>
<script src="js/portfolio/filterable.js"></script>
<script src="js/modernizr/modernizr-2.0.3.js"></script>
<script src="js/easing/jquery.easing.1.3.js"></script>
<script src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="js/swfobject/swfobject.js"></script>
<!-- FancyBox -->

<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="all">
<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
  
 
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69920252-3', 'auto');
  ga('send', 'pageview');

</script>
   
<style>
body {font-family: Arial, Helvetica, sans-serif;}
a {color: #C00;}
details {border: 1px solid #E1E1E1; border-radius: 5px; box-shadow: 0 1px 4px rgba(0, 0, 0, .4); color: #363636; margin: 0 0 .4em; padding: 1%;}
details[open] {background: #E1E1E1;}
summary {background: -webkit-linear-gradient(top, #FAFAFA 50%, #E1E1E1 50%); border-radius: 5px; cursor: pointer; font-size: 1.0em; margin: -1%; padding: 8px 0; position: inherit; width: 102%;}
summary:hover, details[open] summary {background: #E1E1E1;}
summary::-webkit-details-marker {display: none}
summary:before{border-radius: 5px; content: "+"; color: #363636; display: block; float: left; font-size: 1.5em; font-weight: bold; margin: -2px 10px 0 10px; padding: 0; text-align: center; width: 20px;}
details[open] summary:before {content: "-"; margin-top: -4px;}
p {font-size: 1.0em;}

</style>
<script type="text/javascript" src="js/funcoes.js"> 
</script>
</head>
<body style="background: #FFF">
<div style="width:100%; background: #FFF">
  <div class="header">
  <!-- Logo/Title -->
  <div id="site_title"><a style="color:#000000"href="index.php"> <img src="img/SoftwMicroLogoOriginal2.jpg" alt=""></a> </div>
  <!-- Main Menu -->
  <ol id="menu">
    <li class="active_menu_item"><a href="index.php" style="color:#FFF">INICIO</a>
      <!-- sub menu 
      <ol>
        <li><a href="nivo.html">Nivo Slider</a></li>
        <li><a href="ei-slider.html">EI Slider</a></li>
        <li><a href="fullscreen-gallery.html">Fullscreen Slider</a></li>
        <li><a href="image-frontpage.html">Static Image</a></li>
      </ol>-->
    </li>
    <!-- end sub menu -->
    <li><a href="About.php">Sobre</a>
      <!-- sub menu
      <ol>
        <li><a href="magazine.html">Magazine</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="full-width.html">Full Width Page</a></li>
        <li><a href="columns.html">Columns</a></li>
      </ol> -->
    </li>
    <!-- end sub menu -->
    <li><a href="Portifolio.php">Portifolio</a></li>
    <li><a href="Curriculo.php">Curriculo</a>
      <!-- sub menu 
      <ol>
        <li><a href="gallery-simple.html">Simple</a></li>
        <li><a href="portfolio.html">Filterable</a></li>
        <li><a href="gallery-fader.html">Fade Scroll</a></li>
        <li><a href="video.html">Video</a></li>
        <li class="last"><a href="photogrid.html">PhotoGrid</a></li>
      </ol>-->
    </li>
    <!-- end sub menu -->
    <li><a href="https://docs.google.com/forms/d/1c9Z2n6vEaP08Ev9zdt6w0Dq_z8LUEfUlU0k3q62eFwY/viewform#responses">CONTATO</a></li>
  </ol>
</div>
  <!-- END header -->
</div>
<div class="wrapper">
  <div id="ei-slider" class="ei-slider">
    <ul class="ei-slider-large">
        <li> <img src="img/large/SoftwMicroMasterBanner.jpg" alt="">
        <div class="ei-title">
          <h3></h3>
        </div>
      </li>
        <li> <img src="img/large/banneraplicativos.jpg" alt="">
        <div class="ei-title">
            <h2 style="background:#990000;color:#ffffff">Desenvolvimento de Aplicativos</h2>
           <h2 style="background:black;color:#ffffff">on demand</h2>
          <h3></h3>
        </div>
      </li>
      <li> <img src="img/large/2.jpg" alt="">
        <div class="ei-title">
            <h2 style="background:#990000;color:#ffffff">Soluções</h2>
            <h3 style="background:black;color:#ffffff">Ágeis</h3>
        </div>
      </li>
      <li> <img src="img/large/3.jpg" alt="">
        <div class="ei-title">
          <h2 style="background:red;color:#ffffff" >Trabalho em Equipe</h2>
          <h3></h3>
        </div>
      </li>
    
    </ul>
    <!-- ei-slider-large -->
    <ul class="ei-slider-thumbs">
      <li class="ei-slider-element">Current</li>
      <li><a href="#">Slide 1</a><img src="img/thumbs/banneraplicativos.jpg.jpg" alt=""></li>
      <li><a href="#">Slide 2</a><img src="img/thumbs/2.jpg" alt=""></li>
      <li><a href="#">Slide 3</a><img src="img/thumbs/3.jpg" alt=""></li>
      <li><a href="#">Slide 3</a><img src="img/thumbs/3.jpg" alt=""></li>
    </ul>
    <!-- ei-slider-thumbs -->
  </div>
  <!-- ei-slider -->
</div>
<!-- wrapper -->
  <div id="prod_wrapper">
    <div id="panes">
        <div> <img src="img/demo/fabrica_software.jpg" alt="" height="225" width="379">
        <h1>Soluções</h1>
        
        <details id="a">
            <summary onclick="myFunction('a','b','c','d')">Gerenciamento de Projetos</summary>
            <p> PMBOK® - A Guide to the Project Manager Base of Knowledge </p>
            <p>Desenvolvimento de um novo produto ou serviço.
Mudanças organizacionais:estruturais, infraestrutura.
Aquisição ou implementação de sistemas de informações.
Implementação de procedimentos e processos de negócios.</p>
        </details>
       
      
        <details id="b">
            <summary onclick="myFunction('b', 'a', 'c', 'd')">Sistemas de Informações</summary>
            <p>Desenvolvimento, Implantação e manutenção: Aplicativos móveis, Sistemas web,
               Banco de Dados, Servidores, Hospedegem de Sites, Marketing Digital e Redes de Computadores.</p>
        </details>
     
       
        <details id="c">
            <summary onclick="myFunction('c', 'a', 'b', 'd')">Desenvolvimento de Sistemas para áreas corporativas micro e pequenos negócios</summary>
            <p> - Vários segmentos.</p>
            <p>Vestuário, Gestão, Comércio, Distribuição, Varejo, Serviços e Educacional.</p>
        </details>
       
        
        <details id="d">
            <summary onclick="myFunction('d', 'a', 'c', 'b')">Consultoria</summary>
            <p>Negócios, Hardware, Treinamentos e Certificações.</p>
        </details>
           
    
        <p style="text-align:right; margin-right: 16px">
      </div>
         <div> <img id="fbSoftw" src="img/demo/analista-de-sistema.jpg" alt="" height="225" width="379">
        <h1>Fábrica de Software</h1>
       <?php include './Negocio/AnaliseDev.php';?>
        <p style="text-align:right; margin-right: 16px"><a href="https://docs.google.com/forms/d/1c9Z2n6vEaP08Ev9zdt6w0Dq_z8LUEfUlU0k3q62eFwY/viewform?embedded=true" class="button">Fale com Analista</a></p>
      </div>
        <div> <img src="img/demo/computacaonuvem.jpg" alt="" height="225" width="379">
        <h1>Nuvem</h1>
        <p>Com a gama de Informações a computação em nuvem oferece uma forma simples de acessar servidores, armazenamento, bancos de dados e um conjunto amplo de serviços de
            aplicativo pela Internet. Os provedores de computação em nuvem lider no mercado, por exemplo Microsoft, Google, IBM entre outras. Muitas empresas Precisam de programadores, analista para gerencia as 
        informações. Trabalhamos com serviço de Implementação de Banco de Dados e suporte.</p>
        <p style="text-align:right; margin-right: 16px"><a href="https://docs.google.com/forms/d/1c9Z2n6vEaP08Ev9zdt6w0Dq_z8LUEfUlU0k3q62eFwY/viewform?embedded=true" class="button">Fale com Analista</a></p>
      </div>
        <div> <img src="img/demo/seguranca.jpg" alt=""  height="225" width="379">
        <p>Com a crescente utilização de tecnologias digitais, a interligação de sistemas e comunicação de pessoas por meios destas tecnologias, um grande volume de informação circula eletronicamente.
        <p>O sigilo é essencial para empresa. Aplicamos e seguimos os conceitos de padrões do mercado para segurança da informação <a style="color:black;text-decoration: underline; " href="http://www.iso.org/iso/home.html">ISO /</a><a  style="color:black;text-decoration: underline;" href="http://www.iec.ch/"> IEC</a> . Buscando melhores alternativas para o ambiente coorporativo.
        </p> 
        <p style="text-align:right; margin-right: 16px"><a href="https://docs.google.com/forms/d/1c9Z2n6vEaP08Ev9zdt6w0Dq_z8LUEfUlU0k3q62eFwY/viewform?embedded=true" class="button">Fale com Analista</a></p>
      </div>
        <div> <img src="img/demo/infrastutura.jpg" alt="" height="225" width="379">
        <h1>Infraestrutura TI</h1>
        <p>
            Alicerce com a origem da palavra conseguimos 
            seguir um rumo, a Infraestrutura é o alicerce 
            interno de uma empresa, é a base da disponibilização
            do negócio. Trabalhamos com Infraestrutura em Tecnologia, Analista de Suporte e Redes de Computadores. </p>
        <p style="text-align:right; margin-right: 16px"><a href="https://docs.google.com/forms/d/1c9Z2n6vEaP08Ev9zdt6w0Dq_z8LUEfUlU0k3q62eFwY/viewform?embedded=true" class="button">Fale com Analista!</a></p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
        <li><a href="#1"><img src="img/demo/thumb1.jpg" height="75" width="75" alt=""><strong>Soluções</strong></a></li>
        <li><a href="#3"><img src="img/demo/thumb3.png" height="75" width="75" alt=""><strong>Análise e Desenvolvimento</strong> </a></li>
        <li><a href="#4"><img src="img/demo/nuvemthumb.jpg" height="75" width="75" alt=""><strong>Nuvem</strong></a></li>
        <li><a href="#5"><img src="img/demo/seguranca_cadeado.jpg" height="75" width="75" alt=""><strong>Segurança da Informação</strong></a></li>
        <li><a href="#2"><img src="img/demo/thumb2.jpg" height="75" width="75" alt=""><strong>Infraestrutura TI</strong></a></li>
      </ul>
    </div>
    <!-- close navigator -->
  </div>
<!-- END container -->
<div id="footer">
 <div class="one-fourth">
    <h3>Links</h3>
    <ul class="footer_links">
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Sobre</a></li>
      <li><a href="#">Portifólio</a></li>
      <li><a href="#">Currículo</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
  </div>
  <!-- Second Column 
  <div class="one-fourth">
    <h3>Terms</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>-->
  <!-- Third Column -->
  <div class="one-fourth">
    <h3>Informação</h3>
    Versículo para hoje.
Porque Deus amou o mundo de tal maneira que deu o seu Filho unigênito, para que todo aquele que nele crê não pereça, mas tenha a vida eterna. João 3:16
    <div id="social_icons">Desenvolvedor: <a href="http://www.manoelsystem.com.br/Portmanoel/">ManoelSystem</a><br>
     2015-2020 © Direitos Reservado, Salvador-Ba, Nova Fatima-Ba, Fortaleza-Ce.<a href="#"></a> </div>
  </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <h3>Rede Social</h3>
    <a href="https://www.facebook.com/manoel.neto.56829446"><img src="img/icon_fb.png" alt=""></a>
      <a href="https://www.linkedin.com/in/manoel-neto-06ab9184"><img src="img/icon_in.png" alt=""> </a>
      <a href="https://www.youtube.com/channel/UCUfp9SYNVDaVWfddT2of5Fg"><img src="img/youtubeicon.png" alt=""> </a>
    </div>
  <div style="clear:both"></div>
</div>
<!-- END footer -->
</body>
</html>