
<html>
  <head>
    <meta charset="utf-8" />
    <title>LR COXINHAS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ce3d6b4815.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

  </head>

  <body>

   <header>
    <nav class="navbar">
      <a class="navbar-brand" href="#" id="nome">
         LR COXINHAS
      </a>

      <a class="navbar-brand" href="#">
        <img src="../img/logo3.png" width="30" height="30" class="d-inline-block align-top" alt="coxinha" id="logo">
      </a>
    </nav>
   </header>

    <section id="login"> <!-- Inicio da sessão de login -->
     <div class="container-fluido" >  <!-- Container --> 
      <div class="row"> <!-- Inicio ROW -->
        <div class="d-flex col-md-6">
          <div class="card-login">
           <div class="card" id="cartao-login">
            <div class="card-header" style="color: #F9B122; text-align:center; background-color: #09201B; border-radius: 20px; margin-top:20px; margin-left: 5px; margin-right: 5px; margin-bottom:10px">
              Login, rápido! Antes que esfrie.
            </div>
            <div class="card-body" >
              <h3 clas="display-4" style="text-align:center ;">Vamos fazer um pedido? </h3>
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <label for="email">Digite o e-mail, aguardo...!</label>
                  <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group" style="margin-bottom: 120px ;">
                  <label for="senha">Digite a senha, vê se nao erra!</label>
                  <input name="senha" id="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>

                  <div class="text-warning"> Putz! Usúario ou senha inválido(s)</div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>

                  <div class="text-warning"> Onde pensa que vai? Faça login antes de acessar páginas protegiadas!</div>

                <?php } ?>

                <button class="btn btn-lg btn-warning btn-block" type="submit">Entrar</button>
              </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
            <img src="../img/salgados.png" alt="vários salgados diferentes num prato">
        </div>

          
      </div> <!-- Fim Row -->
     </div> <!-- Fim Container -->
    </section>  <!-- Fim da sessão de login -->


    <!----------------- Seção ------------------------>


    <section id="coxinhas" class="caixa"> <!-- Inicio da sessão de Coxinhas -->
     <div class="container-fluido" >  <!-- Container --> 
      <div class="row"> <!-- Inicio ROW -->
       <div class="col-md-4">
        <img src="../img/coxinha-calabresa.jpg" class="img-fluid">
        <p class="lead">Coxinha de calabresa. Irmão, isso é dos deuses.</p>
       </div>

       <div class="col-md-4">
        <img src="../img/coxinha-frango-catupiry.jpg" class="img-fluid">
        <p class="lead">Coxinha de frango e catupiry. Cara, nada melhor.</p>
       </div>

       <div class="col-md-4">
        <img src="../img/mistos.jpg" class="img-fluid">
        <p class="lead">A váriedade é grande, não porquê reclamar. Aproveite!</p>
       </div>
      </div> <!-- Fim Row -->
     </div> <!-- Fim Container -->
    </section>  <!-- Fim da sessão de Coxinhas -->

    <footer  id="rodape"> <!-- Inicio rodapé-->
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                        <a href="#" class="btn btn-outline-dark ml-2">
                            <i class="fa-brands fa-facebook"></i>
                        </a>

                        <a href="#"  class="btn btn-outline-dark ml-2">
                            <i class="fa-brands fa-twitter"></i>
                        </a>

                        <a href="#"  class="btn btn-outline-dark ml-2">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#"  class="btn btn-outline-dark ml-2">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
            </div>
        </div>
    </footer> <!-- Fim Rodapé -->

   

    
    




     <!-- JavaScript (Opcional) -->
     <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </body>
</html>