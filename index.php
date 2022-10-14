<?PHP
 
 require_once "classes/Figura.php";

 $valid = [
    "home" => [
      "titulo" => "Inicio"
    ], 
    "catalogo_completo" => [
        "titulo" => "Catálogo completo"
      ], 
    "figuras" => [
      "titulo" => "Figuras en venta"
    ], 
    "figura" => [
      "titulo" => "Detalle del personaje"
    ], 
    "formulario" => [
      "titulo" => "Formulario"
    ],
    "datos" => [
      "titulo" => "Datos del Alumno"
    ],
    "datos_form" => [
      "titulo" => "Formulario enviado"
    ]
  ];

 $seccion = $_GET['sec'] ?? "home";


 if(!array_key_exists($seccion, $valid)){
  $views = "404";
  $titulo = "Página no encontrada";
 } else {
  $views = $seccion;
  $titulo = $valid[$seccion]['titulo'];
 }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Anifiguras - <?= $titulo ;?></title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <h1 class="logo navbar-brand" style="font-size:0px">Anifiguras</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-sm-end" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php?sec=home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=catalogo_completo">Catálogo Completo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Figuras por animé
                            </a>
                            <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="index.php?sec=figuras&ani=evangelion">Evangelion</a>
                                </li>
                                <li><a class="dropdown-item" href="index.php?sec=figuras&ani=demon_slayer">Demon
                                        Slayer</a></li>
                                <li><a class="dropdown-item" href="index.php?sec=figuras&ani=cowboy_bebop">Cowboy
                                        Bebop</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=formulario">¡Contactate con nosotros!</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">

        <?PHP 
        require file_exists("views/$views.php") ? "views/$views.php" : "views/404.php";
        ?>

    </main>
    <footer class="text-center">
        <p>E-Commerce PHP</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>