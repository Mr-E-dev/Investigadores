<center>
<h1>LISTADO DE INVESTIGADORES </h1>
<br><br>
<table>
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Id Facultad</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($list) > 0){ ?>
        <?php $i = 1; ?>
        <?php foreach($list as $row): ?>
            <tr>
                <th><?=$row->DNI ?></th>
                <td><?=$row->NomInvestigador?></td>
                <td><?=$row->ApellInvestigador?></td>
                <td><?=$row->IdFacultad?></td>
            </tr> 
        <?php endforeach; ?>
        <?php } ?>
    </tbody>
</table>
</center>