<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robot" content="index,follows">
    <meta name="description" content="hola mundo con base de datos, hola + crud">
    <title>Hola con CRUD</title>
    <link rel="icon" href="<?=BASE_URL ? rtrim(BASE_URL,'/'): ''?>/imagenes/logo.ico">
    <link rel="stylesheet" href="<?=BASE_URL ? rtrim(BASE_URL,'/'): ''?>/assets/css/style.css">
</head>

<body>

  <header class="container">
    <h1>
        <a href="<?= BASE_URL ? rtrim(BASE_URL,'/'): ''?>/">👋​Hola Mundo -MVC + PHP + MYSQL </a>
    </h1>
    <nav>
        <a href="<?= BASE_URL ? rtrim(BASE_URL,'/'): ''?>/mensaje">Mensaje</a>
        <a href="<?= BASE_URL ? rtrim(BASE_URL,'/'): ''?>/mensaje">Mensaje</a>
    </nav>
  </header>

  <main class="container">
    <?php include $viewFile;?>
  </main>

  <footer class="container footer">
    <small>
      hecho con corazon en PHP MVC
    </small>
  </footer>

</body>
</html>
