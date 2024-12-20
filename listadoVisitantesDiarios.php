<?php

require_once 'server/Visitas.php';
$visitas = new Visitas();
$items = $visitas->mostrarDia();


?>
<br>

<table class="striped">

    <caption>
        <div class="col s3"></div>
        <h5 class="card-panel   col s6">Visitas hoy:   <?= date('d-m-y'); ?></h5>
        <div class="col s3"></div>
    </caption>


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