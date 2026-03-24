<?php
//declaração de atributos (mesma coisa que variáveis)
$imagem = "midias/8-f10669e303815db3d317692007924029-1024-1024.webp";
$titulo = "MacBook Air 15'";
$resumo = "MacBook Air 15' - M4 - 24GB - 2TB SSD - Meia-noite";
$valor = 25.316;
$quantidade = 5;
$i = 1;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Lojinha</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php require('menu.php');?>
    </header>

    <main class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="carrossel/c1.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carrossel/c2.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carrossel/c3.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carrossel/c4.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carrossel/c5.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carrossel/c6.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carrossel/c7.webp" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="row">
            <?php while($i<=10){ ?>
            <div class="col mt-2"> 
              <div class="card" style="width: 18rem;">
                <img src="<?php echo $imagem; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $titulo; ?></h5>
                  <p class="card-text"><?php echo $resumo; ?></p>
                  <p class="text-danger">Valor: <b>R$ <?php echo $valor; ?></b></p>
                  <p class="text-primary">Estoque: <?php echo $quantidade; ?></p>
                  <a href="#" class="btn btn-primary">Ver Produto</a>
                </div>
              </div>
            </div>
            <?php $i++; }//$i=$i+1 ?>
          </div>
          
    </main>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>