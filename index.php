<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title> EcoCasa </title>
  <link rel="icon" href="./images/iconlogo.svg" />

  <link rel="stylesheet" href="./css/index.css">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

  <!-- Menu de navegação -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow" id="menu">
    <div class="container">
      <a class="navbar-brand" href="./index.php">
        <img src="./images/logopage.png" width="50%" title="Logo Eco Casa">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link text-dark" href="./login.php">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="./cadastro.php">Cadastre-se</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- infomativo -->

  <div class="row align-center" style="background-color: #244789; margin-top: 30px; width: 100%;">


    <div class="col medium-4 small-12 large-4">
      <div class="col-inner">



        <h2 style="text-align: center;"><span style="color: rgb(255, 255, 255); font-size: 200%;"><span
              class="count-up active">70</span>%</span></h2>
        <p style="text-align: center;"><span style="color: rgb(255, 255, 255);">dos trabalhadores perderam os seus
            empregos por conta da Pandemia</span></p>

      </div>
    </div>



    <div class="col medium-4 small-12 large-4">
      <div class="col-inner">



        <h2 style="text-align: center;"><span style="color: rgb(255, 255, 255); font-size: 200%;"><span
              class="count-up active">R$1.045,00</span></span></h2>
        <p style="text-align: center;"><span style="color: rgb(255, 255, 255);">muitos vivem com menos de um salário<br>
            minimo</span></p>

      </div>
    </div>



    <div class="col medium-4 small-12 large-4">
      <div class="col-inner">
        <h2 style="text-align: center;"><span style="color: rgb(255, 255, 255); font-size: 200%;"><span
              class="count-up active">1100</span> Familias</span></h2>
        <p style="text-align: center;"><span style="color: rgb(255, 255, 255);">é o número de familias que vivem nesse
            ocupação<br>eem estado de pobreza</span></p>

      </div>
    </div>
    <style scope="scope">

    </style>
  </div>


  <!-- carousel imagens -->

  <div class="container" id="carousel">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>

      <div class="carousel-inner">
        <center>

          <div class="carousel-item active" id="imgcarousel">
            <img class="d-block" src="./images/imgcarousel1.jpg" alt="Primeiro Slide">
          </div>

          <div class="carousel-item" id="imgcarousel">
            <img class="d-block" src="./images/imgcarousel2.jpg" alt="Segundo Slide">
          </div>

          <div class="carousel-item" id="imgcarousel">
            <img class="d-block" src="./images/imgcarousel3.jpg" alt="Terceiro Slide">
          </div>

          <div class="carousel-item" id="imgcarousel">
            <img class="d-block" src="./images/imgcarousel4.jpeg" alt="Quarto Slide">
          </div>

          <div class="carousel-item" id="imgcarousel">
            <img class="d-block" src="./images/imgcarousel5.jpeg" alt="Quinto Slide">
          </div>

        </center>

      </div>
    </div>
  </div>


  <!-- Cards informativos -->

  <div class="row container m-auto">
    <div class="card col-12 transparent" style="background-color: #244789; color:white;">

      <div class="card-body">

        <h5 class="card-title">Ocupação Anchieta</h5>

        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
          content.
          This content is a little bit longer.</p>
      </div>
    </div>

    <div class="card col-12 transparent" style="background-color: #244789; color:white;">
      <div class="card-body">

        <h5 class="card-title">Ocupar: <br /> </h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dicta explicabo adipisci maiores labore,
          neque ipsa, ducimus similique mollitia est veniam autem aperiam quasi nemo, quibusdam et suscipit earum.
          Alias?</p>

        <h5 class="card-title">Invadir: <br /> </h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem deleniti sunt a enim repellendus
          veritatis asperiores in ullam exercitationem temporibus, sed eius, blanditiis eveniet officiis itaque maiores
          accusantium quam dolorum.</p>

      </div>

    </div>

    <div class="card col-12 transparent" style="background-color: #244789; color:white;">
      <div class="card-body">

        <h5 class="card-title">Ocupar: preencher um espaço vazio <br>
          Invadir: é entrar em algum lugar que já esteja habitado ou utilizado.</h5>
      </div>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>