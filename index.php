<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tu Sitio Web</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Estilos personalizados -->
  <style>
    /*pie de pagina */
    footer {
        background-color: #2d3e50;
        color: #fff;
        padding: 20px;
        font-size: 16px;
}

    .container {
        max-width: 1200px;
        margin: 0 auto;
}

    .col-sm-6 {
        flex-basis: 50%;
        padding: 10px;
}

    .footer-text {
        margin-bottom: 10px;
        line-height: 1.5;
}
  </style>
</head>

<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#acerca-de">Acerca de</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sección de Inicio -->
  <section id="inicio" class="py-5 text-center">
    <div class="container">
      <h1>Bienvenido a tu sitio web</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget nisi dignissim, cursus lectus at,
        consequat lorem.</p>
    </div>
  </section>

  <!-- Sección de Servicios -->
  <section id="servicios" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center">Nuestros Servicios</h2>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <h4 class="card-title">Servicio 1</h4>
              <p class="card-text">Descripción del servicio 1.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <h4 class="card-title">Servicio 2</h4>
              <p class="card-text">Descripción del servicio 2.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <h4 class="card-title">Servicio 3</h4>
              <p class="card-text">Descripción del servicio 3.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Acerca de -->
  <section id="acerca-de" class="py-5">
    <div class="container">
      <h2 class="text-center">Acerca de Nosotros</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget nisi dignissim, cursus lectus at,
        consequat lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed
        scelerisque facilisis erat, a tincidunt risus lacinia ac. Morbi tempor nisl eu commodo commodo. Suspendisse
        eget
        eros in mi posuere sollicitudin.</p>
    </div>
  </section>

  <!-- Scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!-- llamar al pie de pagina -->
  <?php include 'footer.php'; ?>
</body>

</html>