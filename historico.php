<?php require_once 'header.php'; ?>


<div class="container">
    <?php require_once 'menu.php'; ?>
    <br>

    <div class="row">
        <br>
        <button class="waves-effect waves-light btn">
        <i class="material-icons left">search</i>
        Buscar
        </button>

        <div class="col s12">
            <?php require_once 'listadoVisitantesHistorico.php'; ?>
        </div>
    </div>
    
</div>

<?php require_once 'footer.php'; ?>