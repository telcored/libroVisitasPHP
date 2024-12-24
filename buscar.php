<?php
session_start();
require_once 'header.php';

?>

<div class="container">

    <?php require_once 'menu.php'; ?>

    <br>
    <form action="mostrarBusqueda.php" method="POST">
        <br><br><br>
        <div class="row">

       

            <div class="input-field col s8">
                <i class="material-icons prefix">comment</i>
                <label for="buscarDato"></label>
                <input type="text" name="buscarDato" id="buscarDato" placeholder="Ingresa Algún Nombre, Apellido, Departamento,Tarjeta o Motivo">
            </div>


            <div class=" input-field col s2">
                <button class="waves-effect waves-light btn">
                    <i class="material-icons left">search</i>
                    Buscar
                </button>

            </div>

        </div>
  


    <div class="row">

    <div class="col s12">
            <?php 
            
            
            if (isset($_POST['buscarDato'])){

                require_once 'mostrarBusqueda.php'; 

            }
            
           
            ?>
        </div>
      
    </div>

</div>

<br><br>


<?php require_once 'footer.php';
?>