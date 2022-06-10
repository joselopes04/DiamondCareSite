<!doctype html>
<html lang="en">
  <head>
    <title>Diamond Care</title>
    <link rel="shortcut icon" type="image/png " href="imagens\Logos\favicon_sem_fndo.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
  </head>

<div class="menu-bar">
  <nav class="navbar navbar-expand-lg navbar-light">

    <a class="navbar-brand"  href="index.php"><img src="imagens\Logos\logo_sem_fundo.png"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <i class="fa fa-bars"></i>
      </button>

    <div class="collapse navbar-collapse" id="navbarSite">

      <!-- Lista de Items do Menu -->
      <ul class="navbar-nav mr-auto">

      <li class="nav-item">
          <a class="nav-link" href="index.php">Início</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop" href="#">Serviços</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#cards">Cabeleireiro</a>
          <a class="dropdown-item" href="#cards">Beleza</a>
          <a class="dropdown-item" href="#cards">Massagens</a>
        </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="loja.php">Loja</a>
        </li>
      </ul>

      <!-- Lista de Items do Menu da direita -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop" href="#">
            <i class="fas fa-user"></i>
          </a>

            <div class="dropdown-menu">
              <a class="dropdown-item" data-toggle="modal" data-target="#ModalLogin">Login</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#ModalRegisto">Registe-se</a>
              <!-- As opções abaixo só devem aparecer se o user tiver feito login -->
              <!-- <a class="dropdown-item" href="#">Minhas Marcações</a> 
              <a class="dropdown-item" href="#">Sair</a> -->
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>

      </ul>
    </div> 
  </nav>

  <!-- MODALS -->
    <!-- Login -->
  <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="ModalLogin" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLogin">Login</h5>
          <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <!-- Form -->
          <form class="form">
            <div class="mb-3">
              <input  type="email" class="form-input" placeholder="Email" id="InputEmail1" maxlength="100">
            </div>
            <div class="mb-1">
              <input type="password" class="form-input" placeholder="Password" id="InputPassword1">
            </div>
            <div class="mb-3">
              <a href="#" class="link">Esqueceu-se da Password</a>
            </div>
            <div class="form-end">
              <div class="mb-3">
                <button type="submit" class="btn-login">Entrar</button>
              </div>
            </div>
            <div class="form-end">
                <h6 class="form-lbl">Não têm conta ?</h6>
            </div>
            <div class="form-end">
                <a data-toggle="modal" data-target="#ModalRegisto" class="link">Registe-se aqui</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Registo -->
  <div class="modal fade" id="ModalRegisto" tabindex="-1" aria-labelledby="ModalRegisto" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalRegisto">Registe-se</h5>
            <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times"></i></button>
          </div>
          <div class="modal-body">
            <!-- Form -->
            <form class="form">
              <div class="mb-3">
                <input type="text" class="form-input" placeholder="Nome" id="InputName1" maxlength="40">
              </div>
              <div class="mb-3">
                <input type="email" class="form-input" placeholder="Email" id="InputEmail1" maxlength="100">
              </div>
              <div class="mb-3">
                <!-- Patern ainda n funciona -->
                <input type="tel" class="form-input" placeholder="Telemóvel" id="InputPhone1" pattern="[9]{1}[126]{1}[0-9]{7}">
              </div>
                <h6 class="radio">Gênero</h6>
                <label class="radio"> <input type="radio" id="Masculino" name="sexo" value="Masculino"> Masculino </label>
                <i class="fas fa-mars"></i><br> 
                <label class="radio"> <input type="radio" id="Feminino" name="sexo" value="Feminino"> Feminino </label> 
                <i class="fas fa-venus"></i>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="Check1">
                <label class="form-check-label" for="Check1"><a href="#" class="link">Termos e Condições</a></label>
              </div>
              <div class="form-end">
                <div class="mb-3">
                  <button type="submit" class="btn-login">Registar</button>
                </div>
              </div>
              <div class="form-end">
                  <h6 class="form-lbl" >Já têm conta ?</h6>
              </div>
              <div class="form-end">
                  <a href="#" class="link">Faça o login aqui</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>
</html>