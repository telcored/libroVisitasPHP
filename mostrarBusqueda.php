<?php
session_start();
require_once 'header.php';
require_once 'server/Visitas.php';


$visitas = new Visitas();
$items = $visitas->busqueda($_POST['buscarDato']);


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
  


        <table class="striped">

<br>


<thead>

    <tr>

        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Departamento</th>
        <th>Tarjeta</th>
        <th>Fecha</th>
        <th>Motivo</th>


    </tr>
</thead>


<tbody>

    <?php foreach ($items as $item): ?>
        <tr>
            <td> <?php echo $item['nombre']; ?> </td>
            <td> <?php echo $item['apellidos']; ?> </td>
            <td> <?php echo $item['departamento']; ?> </td>
            <td> <?php echo $item['tarjeta']; ?> </td>
            <td> <?php echo $item['fecha']; ?> </td>
            <td> <?php echo $item['motivo']; ?> </td>
        </tr>

    <?php endforeach; ?>

</tbody>
</table>

</div>

<br><br>


<?php require_once 'footer.php';?>


<br>

