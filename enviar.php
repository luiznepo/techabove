<!DOCTYPE html>
<!--
Template Name: Nodelle
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>TechAbove | Solucoes | Contato</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="../index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#x1">Sobre</a></li>
        <li><a href="#x2">Contato</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> (16) 3610 4240</li>
        <li><i class="fa fa-phone"></i> (16) 3610 3669</li>        
        <li><i class="fa fa-envelope-o"></i> techabove@gmail.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
          <img alt="logo-fly" src="https://totvsdigital.azureedge.net/prod/images/default-source/totvs/default-album/logo-fly.png?sfvrsn=0">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="#">Tech Above</a></h1>
      <p>Soluções para MPE</p>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Soluções</a>
          <ul>
            <li><a href="solucoes/comercio.html">Comércio</a></li>
            <li><a href="solucoes/gestao.html">Gestão</a></li>
            <li><a href="solucoes/bar_e_restaurante.html">Bar e Restaurante</a></li>
            <li><a href="solucoes/food_truck.html">Food Truck</a></li>
            <li><a href="solucoes/odonto.html">Odontologia</a></li>
            <li><a href="solucoes/saude.html">Saúde</a></li>
            <li><a href="solucoes/vestuario.html">Vestuário</a></li>
            <li><a href="solucoes/beleza_estetica.html">Beleza e Estética</a></li>                                    
          </ul>
        </li>
        <li><a href="cases-de-sucesso.html">Cases de Sucesso</a></li>
        <li><a href="entre-em-contato.html">Solicite Contato</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Solicite Contato</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/gallery/slide-home10.jpg'); background-size: cover; background-repeat:no-repeat; padding: 20px; margin: 10px 10px 10px 0px;">
  <div class="cliente-contato">
  <main class="hoc container clear" > 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
     </div> 
<form name="form-1" method="post" action="enviar.php">
<?php

/*iremos declarar as variaveis que recebemos pelo método post

lembra lá na explicação do metodo post o que deveria ser feito? então, os dados

serão pegos por aqui e transformados em comunicação entre server e cliente para gerar

o email do cara e te enviar*/

$nome=$_POST[username];//aqui pega os dados que foram preenchidos la no formulário com o ID NOME
$sobrenome=$_POST[sobrenome];
$telefone=$_POST[telefone];
$email=$_POST[email];//aqui a mesma coisa, mas com o email
$produto=$_POST[produto];

//agora vamos enviar todos esses dados usando a função mail que é do PHP
mail("meuemail@meudominio.com.br","$produto","
Nome: $nome
Sobrenome: $sobrenome
Email: $email
Produto: $produto","FROM:$nome<$email>");

/*Ele diz assim pro código: "Envia um email para meuemail@meudominio.com.br e que esse email tenha os dados que
foram pegos em ASSUNTO, NOME, EMAIL, ASSUNTO e MENSAGEM, eles foram pegos com o MÉTODO POST e em FROM vai conter
os dados de quem enviou o email, ou seja, la na caixa de entrada do teu e-mail vai ter isso. :)*/

echo "sua mensagem foi enviada com sucesso!"; //aí mostramos no navegador da pessoa que enviou o email uma mensagem de sucesso

?>
</form>
    </div>
</div>
</div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Quer novidades?</h6>
      <p class="btmspace-15">Siga-nos nas redes e fique por dentro das novidades e conteúdos sobre micro e pequenos negócios</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-youtube" href="#"><i class="fa fa-youtube"></i></a></li> 
        <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>                
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Fale conosco</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Rua Florêncio de Abreu, nº 681, Sala 408, Centro, Ribeirão Preto
          </address>
        </li>
        <li><i class="fa fa-phone"></i> (16) 3610 4240</li>
        <li><i class="fa fa-phone"></i> (16) 3610 3669</li>
        <li><i class="fa fa-envelope-o"></i> techabove@gmail.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Quem Somos?</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="https://www.totvs.com/sobre-a-totvs" target="_blank">Sobre a Totvs</a></h2>
            <p class="nospace">A TOTVS é uma empresa brasileira de software, serviços, plataforma e consultoria. É líder absoluta no Brasil e na América Latina e está entre as maiores desenvolvedoras de sistemas de gestão integrada do mundo.&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Sobre a Tech Above</a></h2>
            <p class="nospace">A Tech Above é uma empresa de tecnologia para micro e pequenos empreendedores, proporciona melhoria em gestão, com baixo investimento e alta rentabilidade, revendendo soluções da empresa líder no mercado de Software e Hardware no Brasil
&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">techabove.com.br</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>