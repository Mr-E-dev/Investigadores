<center>
<h1>LISTADO DE RESERVAS</h1>
<br><br>
<table>
    <thead>
        <tr>
            <th>IdReserva</th>
            <th>DNI</th>
            <th>IdEquipo</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($list) > 0){ ?>
        <?php $i = 1; ?>
        <?php foreach($list as $row): ?>
            <tr>
                <th><?=$row->IdReserva?></th>
                <th><?=$row->DNI?></th>
                <td><?=$row->IdEquipo?></td>
                <td><?=$row->FechaInicio?></td>
                <td><?=$row->FechaFin?></td>
            </tr> 
        <?php endforeach; ?>
        <?php } ?>
    </tbody>
</table>
</center>