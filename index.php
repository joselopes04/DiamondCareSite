<!doctype html>
<html lang="en">

<head>
  <title>Diamond Care</title>
  <link rel="shortcut icon" type="image/png " href="imagens\Logos\favicon_sem_fndo.png">

  <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
  <script>  
  $(function(){ 
    $("#header").load("header.html");  
    $("#footer").load("footer.html");  
  }); 
  </script>  

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

  <?php include 'header.html' ?>
  
  <script language="javascript" type="text/javascript" 
  src="header.html"></script>

  <div id="header"></div> 

  <!-- CARROUSEL -->
  <div id="carouselSite" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500">

    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
      <li data-target="#carouselSite" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens\Carrossel\Cabeleireiro-unsplash.jpg" class="img-fluid d-block">
        <div class="main-carousel">
          <div class="carousel-caption">
            <h1>Bem vindo à <br> Diamond Care</h1>
            <p>O seu salão de beleza em Belém</p>
            <button class="btn1" data-toggle="modal" data-target="#ModalFeedback">Feedback</button>
            <a href="sobre_nos.php"><button class="btn2">Contacte-nos</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagens\Carrossel\Makeup-unsplash.jpg" class="img-fluid d-block">
        <div class="main-carousel">
          <div class="carousel-caption">
            <h1>Bem vindo à <br> Diamond Care</h1>
            <p>O seu salão de beleza em Belém</p>
            <button class="btn1" data-toggle="modal" data-target="#ModalFeedback">Feedback</button>
            <a href="sobre_nos.php"><button class="btn2">Contacte-nos</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagens\Carrossel\Maquilhagem-unsplash.jpg" class="img-fluid d-block">
        <div class="main-carousel">
          <div class="carousel-caption">
            <h1>Bem vindo à <br> Diamond Care</h1>
            <p>O seu salão de beleza em Belém</p>
            <button class="btn1" data-toggle="modal" data-target="#ModalFeedback">Feedback</button>
            <a href="sobre_nos.php"><button class="btn2">Contacte-nos</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagens\Carrossel\Massagem-unsplash.jpg" class="img-fluid d-block">
        <div class="main-carousel">
          <div class="carousel-caption">
            <h1>Bem vindo à <br> Diamond Care</h1>
            <p>O seu salão de beleza em Belém</p>
            <button class="btn1" data-toggle="modal" data-target="#ModalFeedback">Feedback</button>
            <a href="sobre_nos.php "><button class="btn2">Contacte-nos</button></a>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Próximo</span>
    </a>

  </div>

  <h2 class="titulo-servicos">Serviços</h2>

  <div class="row mb-4 justify-content-sm-center ">

    <!-- CARDS -->
    <div class="col-sm-6 col-md-4" id="cabeleireiro">
      <div class="card mb-5">
        <img class="card-img-top" src="imagens\Cards\Cabelo-unsplash.jpg">
        <div class="card-body">
          <h4 class="card-title">Cabeleireiro</h4>
          <h6 class="card-subtitle mb-2">
            Nós temos o mais completo serviço de cabeleireiro, com os melhores profissionais.
          </h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Corte Feminino e Masculino</li>
          <li class="list-group-item">Corte Criança</li>
          <li class="list-group-item">Coloração e Descoloração</li>
          <li class="list-group-item">Nuances</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Saiba Mais</a>
          <a href="#" class="card-link">Agendamento</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4" id="beleza">
      <div class="card mb-5">
        <img class="card-img-top" src="imagens\Cards\Unhas-unsplash.jpg">
        <div class="card-body">
          <h4 class="card-title">Beleza</h4>
          <h6 class="card-subtitle mb-2">
            Contamos com serviços complementares de beleza para que se sinta ainda melhor.
          </h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Manicure e Pedicure</li>
          <li class="list-group-item">Limpeza de Pele</li>
          <li class="list-group-item">Depilações</li>
          <li class="list-group-item">Unhas de Gel</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Saiba Mais</a>
          <a href="#" class="card-link">Agendamento</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4" id="massagens">
      <div class="card mb-5">
        <img class="card-img-top" src="imagens\Cards\Pedras-unsplash.jpg">
        <div class="card-body">
          <h4 class="card-title">Massagens</h4>
          <h6 class="card-subtitle mb-2">
            A Massagem é aconselhada, pelos seus efeitos de relaxamento e alívio do stress.
          </h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Massagem Sueca</li>
          <li class="list-group-item">Massagem Aromaterapia</li>
          <li class="list-group-item">Massagem com Pedras Quentes</li>
          <li class="list-group-item">Shiatsu</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Saiba Mais</a>
          <a href="#" class="card-link">Agendamento</a>
        </div>
      </div>
    </div>

  </div>

  <!-- MODALS -->
  <!-- Feedback -->
  <div class="modal fade" id="ModalFeedback" tabindex="-1" aria-labelledby="ModalFeedback" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalFeedback">Dê-nos o seu Feedback</h5>
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
              <input type="tel" class="form-input" placeholder="Telemóvel" id="InputPhone1"
                pattern="[9]{1}[126]{1}[0-9]{7}">
            </div>
            <div class="mb-3">
              <textarea class="text-area" placeholder="O que achou do serviço prestado?" maxlength="500" cols="56"
                rows="5"></textarea>
            </div>
            <div class="mb-3">
              <textarea class="text-area" placeholder="Sugestões" maxlength="500" cols="56" rows="5"></textarea>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="Check1">
              <label class="form-check-label" for="Check1"><a href="#" class="link">Termos e Condições</a></label>
            </div>
            <div class="form-end">
              <button type="submit" class="btn-feedback">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- RODAPÉ -->
  <?php include 'footer.html' ?>

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
</body>

</html>