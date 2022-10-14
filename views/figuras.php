<?PHP
 $animeFigura = $_GET['ani'] ?? FALSE;
 $objetoFigura = new Figura();
 $productos = $objetoFigura->figuraAnime($animeFigura);
?>

<div class="row">
    <h1 class="text-center">Figuras en venta</h1>
    <?PHP if (count($productos)) { ?>
    <?PHP foreach ($productos as $figure){ ?>
    <div class="col-sm-4 mb-2 card-figura">
        <div class="card">
            <img src="img/<?= $figure->imagen; ?>" class="card-img-top" alt="Figura de <?= $figure->nombre; ?>">
            <div class="card-body">
                <h2 class="card-title text-center"><?= $figure->serie; ?></h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span> Año del animé: </span><?= $figure->fecha;?></li>
                    <li class="list-group-item"><span> Nombre: </span><?= $figure->nombre;?></li>
                    <li class="list-group-item"><span> Apellido: </span><?= $figure->apellido;?></li>
                    <li class="list-group-item"><span> Edad: </span><?= $figure->edad;?></li>
                    <li class="list-group-item"><span> Especie: </span><?= $figure->especie;?></li>
                </ul>
                <p class="card-text text-left"><?= $figure->caracteristicaCorta();?></p>
            </div>
            <div class="card-body price text-center">
                <p>$ <?= $figure->precio;?></p>
                <a href="index.php?sec=figura&id=<?= $figure->id; ?> " class="btn">Ver más</a>
            </div>
        </div>
    </div>
    <?PHP } ?>
    <?PHP }else{ ?>
    <div class="col">
        <p class="text-center existente">Página no existente</p>
    </div>
    <?PHP } ?>
</div>