<?php
session_start();
require_once 'header.php';

?>

<div class="container">

    <?php require_once 'menu.php'; ?>

    <br>
    <form action="server/agregar.php" method="POST">

        <div class="row">

            <div class="input-field col s3">
                <i class="material-icons prefix">account_circle</i>
                <label for="nombre"></label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombres">
            </div>

            <div class="input-field col s3">
                <i class="material-icons prefix">account_circle</i>
                <label for="apellidos"></label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
            </div>

            <div class="input-field col s3">
                <i class="material-icons prefix">apartment</i>
                <label for="departamento"></label>
                <input type="text" name="departamento" id="departamento" placeholder="Departamento">
            </div>

            <div class="input-field col s3">
                <i class="material-icons prefix">credit_card</i>
                <label for="tarjeta"></label>
                <input type="text" name="tarjeta" id="tarjeta" placeholder="Tarjeta">
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">comment</i>
                <label for="motivo"></label>
                <input type="text" name="motivo" id="motivo" placeholder="Motivo">
            </div>


            <div class=" input-field col s3">
                <button class="waves-effect waves-light btn">
                    <i class="material-icons left">save</i>
                    Registrar
                </button>

            </div>



        </div>
    </form>


    <div class="row">
        <div class="col s12">
            <?php require_once 'listadoVisitantesDiarios.php'; ?>
        </div>
    </div>

</div>

<br><br>


<?php require_once 'footer.php';
?>