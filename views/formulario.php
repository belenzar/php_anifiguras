<div class="container text-center">
    <h1>¡Contactate con nosotros!</h1>
</div>

<div class="formulario row justify-content-center m5">
    <form action="index.php?sec=datos_form" method="POST">
        <div class="row mb-3">
            <label for="nombre" class="col-form-label-lg">Nombre</label>
            <input type="text" class="form-control form-control-lg" id="nombre" name="nombre">
        </div>

        <div class="row mb-3">
            <label for="apellido" class="col-form-label-lg">Apellido</label>
            <input type="text" class="form-control form-control-lg" id="apellido" name="apellido">
        </div>

        <div class="row mb-3">
            <label for="email" class="col-form-label-lg">E-Mail</label>
            <input type="text" class="form-control form-control-lg" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="texto" class="col-form-label-lg">Dejanos tu comentario</label>
            <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
        </div>
        <button type="submit" value="enviar">Enviar</button>
    </form>
</div>