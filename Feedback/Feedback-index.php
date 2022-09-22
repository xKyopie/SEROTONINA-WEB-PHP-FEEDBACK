
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Serotonina</title>

    <!-- CSS -->
   <link href="style-feedback.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header>
    <!--MENU-->
        <ul class="menu">
            <li id="nome">Serotonina|</li>  
            <li><a href="#">Início</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Fale Conosco</a></li>
            <li><a href="../Cadastro-WEB/Cadastro_index.php" id="entrar">Entrar</a></li>
        </ul>  
    </header>    
        
    <!--PARAGRÁFO-->
    <article>
      <h1 id="titulo">Com Serotonina você se motiva!</h1>
      <b><p id="texto">Organize sua vida e tenha acesso a dicas e metodologias 
            para melhorar seu desempenho.</p></b>
    </article>
    
          
    <!--CARROSSEL-->
    <div class="carousel-item">
      
        <article class="car">    
            <div class="carrossel">
                <div class="container" id="imagens">
                  <img src="../assets/Carrossel 0.1.png" alt="">
                  <img src="../assets/Carrossel 0.2.png" alt="">
                  <img src="../assets/Carrossel 0.3.png" alt=""> 
                </div>
            </div>
        </article>
  

    

  <!-- SOBRE NÓS -->
  <article class="sobre">
    <h1 id="titulo1"><b> Sobre Nós </b></h1>
    <section class="caixatexto">
      <div> 
        <h2><b> 1. </b></h2>
        <p><b> Quem somos? </b><p>
        <p> Estudantes do Ensino Médio, integrado ao curso    técnico de desenvolvimento de sistemas, do IFSP Bragança Paulista. </p>
      </div>
    </section>
    
    <section class="caixatexto">
      <div>
        <h2><b> 2. </b></h2>
        <p><b> Qual é o problema? </b><p>
        <p>A pandemia afetou a rotina de todos e trouxe como consequência transtornos mentais que prejudicam a rotina de muitos.</p>
      </div>
      
    </section>
    
    <section class="caixatexto"> 
      <div>
        <h2><b> 3. </b></h2>
        <p><b> Como podemos ajudar? </b></p>
        <p> Com nosso app suas tarefas são organizadas de maneira simples e fácil. Além de termos conteúdos de dicas para   
         você! </p>
      </div>
      
    </section>
  </article>

        <article class="faleconosco">
        <!-- IMAGEM -->
        <section class="paragrafo-fale-c">
        <img id="celular" src="../assets/celular.png"/>
        </section>

        <!-- BLOCO -->
        <section class="paragrafo-fale-c">
            <div>
            <h1 id="titulo3">Nos mande uma mensagem !</h1>
            <h4>Escreva sua opinião, sentimento, feedback e muito mais.</h4>
            </div>

            <!-- CAIXA TEXTO -->
            <form class="form" method="POST" action="recebe-feedback.php" name="feedback" onsubmit="return validar()">
                <div class="bloco">
                    <input type="text" value=""  name="nome" placeholder="Nome"  class="mensagem"/>
                    <input type="email" value="" name="email" placeholder="E-mail" class="mensagem"/>
                   
                    <textarea rows="10" cols="40" maxlength="500" placeholder="Escreva aqui" class="caixa-texto" name="mensagem"></textarea>
                    
                <input type="submit" value="Enviar" class="enviar"/>
                </div>

            </form>
            
        </section>

        </article>

         <!-- RODAPÉ -->
  <footer>
      <div class="rodape">
        <img id="google" src="../assets/googlePlay.jpg" />
     </div>
   
      <div  class="rodape">
        <p>SEROTONINA </p>
      </div>
  
   
    <div class="rodape">
      <img class="icone" src="../assets/insta.png"/>
      <img class="icone" src="../assets/tt.png"/>
    </div>
    
  
    <div  id="rodape-direitos">
      <p> © 2022 - Todos os direitos reservados. Desenvolvedores Equipe Serotonina</p>
    </div>
  
  </footer>

        <script src="script-feedback.js" ></script>
</body>
</html>
   