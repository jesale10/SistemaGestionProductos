<!doctype html>
<html lang="en">

<head>
  <title>Inicio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Personal CSS -->
  <link rel="stylesheet" href="../css/crear-pedido.css">

  <!-- Page Icon -->
  <link rel="shortcut icon" href="img/logo.png">

</head>

<body>

  <section class="sidebar">
    <div class="d-flex flex-column flex-shrink-1 p-2 bg-light sidebar">
      <a href="#" class="text-center">
        <img id="logo" src="../img/logo.png">
      </a>
      <ul class="nav nav-pills flex-column mt-2 h5">
        <li class="nav-item mb-2">
          <a href="../index.php" class="nav-link link-dark" aria-current="page">
            <i class="bi bi-house"></i>
            Inicio
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="crear-pedido.php" class="nav-link active">
          <i class="bi bi-cart-plus"></i>
            Crear Pedido
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="generar-factura.php" class="nav-link link-dark">
          <i class="bi bi-calendar2-check"></i>
            Generar Factura
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="facturas.php" class="nav-link link-dark">
          <i class="bi bi-calendar3"></i>
            Facturas
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="productos.php" class="nav-link link-dark">
          <i class="bi bi-bag"></i>
            Productos
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="agregar-productos.php" class="nav-link link-dark">
          <i class="bi bi-bag-plus"></i>
            Agregar Productos
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="quitar-productos.php" class="nav-link link-dark">
          <i class="bi bi-bag-dash"></i>
            Quitar Productos
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="pedidos.php" class="nav-link link-dark">
          <i class="bi bi-clipboard"></i>
            Pedidos
          </a>
        </li>
        <li class="nav-item mb-2">
          <a href="entregar-pedidos.php" class="nav-link link-dark">
          <i class="bi bi-clipboard-check"></i>
            Entregar Pedidos
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="main">
    <p class="display-1">
        Página para crear los pedidos
    </p>
  </section>

  <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
  <script>
    var triggerEl = document.querySelector('#navId a')
    bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
  </script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>


</html>