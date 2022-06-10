<html lang="en">
  <head>
    <title>Diamond Care</title>
    <link rel="shortcut icon" type="image/png " href="imagens\Logos\favicon_sem_fndo.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styleloja.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

  </head>
  <body> 
    <?php include 'header.php' ?>

    <!-- CARROUSEL -->
    <div id="carouselSite" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">

      <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens\Loja\Carrousel\semana-shampoo.jpg" class="img-fluid d-block">
    
            <div class="carousel-caption">
              <h1>SEMANA DO SHAMPOO </h1>
              <h3>Descontos em todos os Shampoos</h3>
              <p>
                De 1 a 7 de Janeiro <br />
                Até 50% de desconto nas melhores marcas<br />
              </p>
                <a><button class="btn1">Ver campanha</button></a>
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens\Loja\Carrousel\novo-produto.jpg" class="img-fluid d-block">

            <div class="carousel-caption">
              <h1>NOVO PRODUTO</h1>
              <h3>Verniz para as unhas </h3>
              <p>
                Benecos | Nail Polish<br />
              </p>
                <a><button class="btn1">Ver campanha</button></a>
            </div>
          </div>
          
          <div class="carousel-item">
            <img src="imagens\Loja\Carrousel\entregas-gratis.jpg" class="img-fluid d-block">

            <div class="carousel-caption">
              <h1>ENTREGAS GRÁTIS</h1>
              <h3>Para compras superiores a 50€ </h3>
              <p>
                Válido apenas em Portugal Continental <br />
              </p>
                <a><button class="btn1">Ver produtos</button></a>
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

     <!-- Our Brands -->
     <section class="our-brands-section">
      <h2>Nossas Marcas</h2>
      <p>Estas são as marcas que são nossas parceiras, <br>
       que nos fornecem os melhores produtos para nós cuidarmos das sua beleza</p>
       
      <div class="brands-container">
        <img src="imagens\Loja\Marcas\dove.png"/>
        <img src="imagens\Loja\Marcas\LOreal.png"/>
        <img src="imagens\Loja\Marcas\chanel.png"/>
        <img src="imagens\Loja\Marcas\Clinique.png"/>
      </div>
    </section>

    <!--
    <div class="logo-slider">

      <div class="item"><a href="#"><img src="imagens\Loja\Marcas\dove.png"></a></div>
      <div class="item"><a href="#"><img src="imagens\Loja\Marcas\Clinique.png"></a></div>
      <div class="item"><a href="#"><img src="imagens\Loja\Marcas\chanel.png"></a></div>
      <div class="item"><a href="#"><img src="imagens\Loja\Marcas\LOreal.png"></a></div>

    </div>

    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
      $('.single-item').slick({

      });
    </script> -->

    <!-- RODAPÉ -->
    <?php include 'footer.php' ?> 

    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
  </body>
</html>