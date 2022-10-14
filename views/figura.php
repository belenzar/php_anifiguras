<?PHP
 
 $objetoFigura = new Figura();
 $id = $_GET['id'] ?? FALSE;
 $figure = $objetoFigura->figuraId($id);
 
?>

<div class="container">
<?PHP if (isset($figure)) { ?>
    <h1 class="text-center">Figura <?= $figure->nombre;?></h1>
    <div class="card m-auto" style="max-width: 30rem;">
        <img src="img/<?= $figure->imagen; ?>" class="card-img-top m-auto" alt="Figura de <?= $figure->nombre; ?>">
        <div class="card-body">
            <h2 class="card-title text-center"><?= $figure->serie; ?></h2>
            <p class="card-text text-left"><?= $figure->caracteristicas;?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><span> Año del animé: </span><?= $figure->fecha;?></li>
            <li class="list-group-item"><span> Nombre: </span><?= $figure->nombre;?></li>
            <li class="list-group-item"><span> Apellido: </span><?= $figure->apellido;?></li>
            <li class="list-group-item"><span> Edad: </span><?= $figure->edad;?></li>
            <li class="list-group-item"><span> Especie: </span><?= $figure->especie;?></li>
        </ul>
        <div class="card-body price text-center">
            <p>$ <?= $figure->precio;?></p>
            <a href="index.php?sec=figura&id=<?= $figure->id; ?> " class="btn">Comprar</a>
        </div>
    </div>
    <?PHP }else{ ?>
    <div class="col">
        <p class="text-center existente">No se encontró la figura buscada.</p>
    </div>
    <?PHP } ?>
</div>