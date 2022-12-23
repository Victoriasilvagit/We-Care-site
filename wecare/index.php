<?php
session_start();
                                  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="shortcut icon" href="imagens/frô.png"/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <style>
    body {
  	padding: 0;
	  margin: 0;
	  box-sizing: border-box;
    }
	
 

      .header {
			width: 100%;
			background-color: #56CBf9;
			display: flex;
    		justify-content: space-between;
    		align-items: center;

		}

		.logo-imagem {
			width: 60px;
			height: 60px;

		}

		.container-logo {
			display: flex;
			align-items: baseline;
		}

		.menu li{
			display: inline-block;
			
		}

		.menu li a{
			font-size: 20px;
			font-family: 'Josefin Sans', sans-serif;
			text-decoration: none;
			color: black;
			padding: 10px 15px; 
		}

		.menu li a:hover{
			color: #D81159;
		}

		@font-face {
			font-family: coolveticarg;
			src: url(coolveticarg.ttf);
		}

		#titulo1 {
			position: absolute;
			font-family: coolveticarg;
			font-size: 20px;
			width: 800px;
			text-align: center;
			top: 350px;
			left: 300px;
	
		}

		@font-face {
			font-family: Balimoon-Regular;
			src: url(Balimoon-Regular.otf);
		}


		.titulo2 {
			position: absolute;
			font-family: Balimoon-Regular;
			font-size: 100px; 
			top: 240px;
			left: 600px;
			
		}

		#texto {
			margin-left: 80px;
			margin-right: 80px;
			width: 400px;
			height: 230px;
			font-family: 'Josefin Sans' sans-serif ;
			font-size: 20px;

		}

		.login {
			border: 0;
			outline: none;
			border-radius: 100px;
			padding: 15px 0;
			font-size: 1rem;
			font-weight: 500;
			font-family: 'Josefin Sans', sans-serif;
			text-transform: capitalize;
			letter-spacing: .1em;
			background: #FF729F;
			color: #ffffff;
			transition: all 0.5s ease;
			-webkit-appearance: none;
			margin-left:-150px;
			margin-top:-40px;		
		}

		.login:hover, .log:focus {
			background: hsl(341, 87%, 57%);
		  }

		.log {
			border: 0;
			text-decoration: none;
			border-radius: 100px;
			padding: 15px 0;
			font-size: 1rem;
			font-weight: 500;
			font-family: 'Josefin Sans', sans-serif;
			text-transform: capitalize;
			letter-spacing: .1em;
			background: #D81159;
			color: #ffffff;
			transition: all 0.5s ease;
			-webkit-appearance: none;
			margin-left:180px;
			margin-top:200px;	
		}

		a {
			text-decoration: none;
		}

		.log:hover, .log:focus {
			background: hsl(341, 87%, 57%);
		  }

	


		.abs {
			background-image:url(imagens/absorvente.jpeg);
			width: 1000px;
			height: 350px;
			display: block;
			margin-left:0;
			margin-left: 0;
		}

		

		#quadro {
			background-color: #FF729F;
			width: 350px;
			height: 350px;
			margin-top: -350px;
			margin-left: 890px;
		}

		#tex {
			position: absolute;
			text-align: center;
			font-family: coolveticarg;
			font-size: 30px;
			font-weight: bold;
			width: 200px;
			margin-top: -310px;
			margin-left: 960px;

		}

		.button {
			border: 0;
			outline: none;
			border-radius: 100px;
			padding: 15px 0;
			margin-left: 300px;
			font-size: 1rem;
			font-weight: 700;
			font-family: 'Josefin Sans', sans-serif;
			text-transform: capitalize;
			letter-spacing: .1em;
			background: #D81159;
			color: #ffffff;
			transition: all 0.5s ease;
			-webkit-appearance: none;
			margin-left: 980px;
			margin-top:-80px;
		  }
		  
		  .button:hover, .button:focus {
			background: hsl(341, 87%, 57%);
		  }
		  
		  .button-block {
			display: block;
			width: 180px;
		
		  }

		h2 {
			margin-left: 550px;
			font-family: coolveticarg; 
		}

		#row {
			width: 280%;
			margin-left: 130px; 
		}


		.icon {
			width: 100px;
			height: 100px;
			display: inline-block;
			margin-right: 80px;
		}


		.whats {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 1px 1px 2px #888;
			z-index: 1000;
		}
 
		.fa-whatsapp {
			margin-top: 16px;
		}

		#azur {
			width: 100%;
			height: 250px;
			background-color: #006BA6; 
			margin-left: 0px;
			margin-top: 200px;
			margin-bottom: -20px;
		}

		#dep {
			font-size: 20px;
			color: white;
			font-weight: bold;
			padding: 15px; 
			margin-top: 500px;
			margin-left: 20px;
		}

		#lista1 {
			font-size: 15px;
			margin-top: 600;
			margin-left: 35px;
			font-family: 'Josefin sans' sans-serif
		}

		#help {
			font-size: 20px;
			color: white;
			font-weight: bold;
			padding: 15px; 
			margin-top: -170px;
			margin-left: 580px;
		}

		#lista2 {
			font-size: 15px;
			margin-top: -10px;
			margin-left: 600px;
			font-family: 'Josefin sans' sans-serif
		}

		a.links,link a.links:visited {
			text-decoration: none;
			color: black; 
		}

		#conta {
			font-size: 20px;
			color: white;
			font-weight: bold;
			padding: 15px; 
			margin-top: -110px;
			margin-left: 1080px;
		}

		#lista3 {
			font-size: 15px;
			margin-top: -15px;
			margin-left: 1100px;
			font-family: 'Josefin sans' sans-serif
		}


		#Copyright {
			text-align: center;
			font-weight: bold;
		
		}

		.rodape {
			position: absolute;
			background-color: #56CBF9; 
			width: 100%;
			height: 60px;
			padding: 20px;
		}
  </style>
	<title>We Care | Home</title>

</head>
<body>
     <header class="header">
         <div class="container-logo"> 
             <div class="logo-imagem">
          
                 <img src="imagens/logo.png" alt="logo we care">
             </div>


         </div>

         <div class="menu">
               <ul>
                   <li><a href="doacoes_sessao.html">Faça parte</a></li>
                   <li><a href="patrocine_sessao.html">Patrocine</a></li>
                   <li><a href="vc sabia_sessao.html">Você Sabia?</a></li>
                   <li><a href="Sobrenos_sessao.html">Sobre Nós</a></li>
               </ul>
         </div>
     </header>

     <div>
     	<img src="imagens/home.png" width="100%"/>
     </div>

      <div id="titulo1">
        ...faz parte da vida de todos, e sempre precisamos ficar <br>
         atentos para lidar com isso. Nunca sinta vergonha do seu <br>
          corpo, pois ele tem tudo de perfeito e <br>
           necessita de seus cuidados para continuar bem!<br>
        Levante sua autoestima e empodere-se.
      </div>
      <div class="titulo2">
          A Higiene...
    
        </a>
        </div>
       
     <br><br>

    
     
     <article id="texto">

      <div class="abs">
        <img src="imagens/absorvente.jpeg" alt="absorvente" height="350" width="900" >
      </div>

      <div id="quadro"></div>

      <div id="tex">Ajude nossa comunidade, e seja um apoiador de nosso trabalho.</div>

      <a href="patrocine.html">
       <button type="submit" class="button button-block" >Quero Apoiar</button>
      </a>

      <br><br>
      <br><br>

      <a class="whats" href="https://web.whatsapp.com/send?phone=5511994791687" target="_blank">
        <i class="fa fa-whatsapp"></i>
      </a>

      <h2>Patrocinadores</h2><br><br>

      <div id="row">
        
          <img src="imagens/w.png" class="icon" alt="w">
        
          <img src="imagens/maca.png" alt="maca" class="icon">
          <img src="imagens/magali.png" alt="magali" class="icon">
          <img src="imagens/mariana.png" alt="mariana" class="icon">
          <img src="imagens/Googue.png" alt="Googue" class="icon">
          <img src="imagens/cacocalo.png" alt="cacocalo"class="icon">
       
       
      </div>
      <br>

     </article>

     <div id="azur">

       <div id="dep">Departamentos</div><br>
       <div id="lista1">
         Absorventes Reutilizáveis<br>
         Absorventes Descartaveis<br>
         Calcinhas Absorventes<br>
         Coletor menstrual<br>
         Lenços humidecidos<br>
         Porta Absorvente<br>
       </div>

       <div id="help">Ajuda</div><br>
       <div id="lista2">
         <a href="atendimento.html" class="links">Atendimentos</a><br>
         <a href="doações.html" class="links">Dúvidas</a><br>
          <a href="#" class="links">Políticas da comunidade</a><br>
       </div>

       <div id="conta">Conta</div><br>
       <div id="lista3">
         <a href="#" class="links">Minha conta</a><br>
         <a href="#" class="links">Minhas doações</a>
       </div>

      </div><br>
     

     <footer class="rodape">
      <div id="Copyright">
        Made by Universe Design &copy; 2021
      </div>
     </footer>
     
     
</body>
</html>