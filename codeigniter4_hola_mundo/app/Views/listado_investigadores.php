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
            <th colspan="2">Acciones</th>
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
                <td><a href="<?php 
                        echo site_url('controllerinvestigadores/edit/').$row->DNI;
                    ?>" title="Editar <?= $row->DNI?>"><img src="<?php echo base_url()?>public/img/icons/edit.png" id="icon"></a></td>
                <td><a href="javascript:window.FormDel.dni.value='<?=$row->DNI ?>';window.FormDel.nombre.value='
                <?=$row->NomInvestigador?>';window.diaIlogoFormDel.showModal();"title='Borrar<?=$row->DNI?>'><img src="<?php echo base_url()?>public/img/icons/delete.png" id="icon"></a></td>
            </tr> 
        <?php endforeach; ?>
        <?php } ?>
    </tbody>
</table>
</center>
<dialog id="diaIlogoFormDel">
    <h1>¿BORRAR INVESTIGADOR?</h1>
        <form action="<?=site_url('controllerinvestigadores/del')?>" id="FormDel" method="post">
            <table>
                <tr>
                    <td>DNI</td>
                    <td><input type="text" name="dni" readonly/></td>
                </tr>
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" name="nombre" readonly/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="javascript:window.FormDel.submit();">Borrar</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:window.diaIlogoFormDel.close();">Cancelar</a>
                    </td>
                </tr>
            </table>    
        </form>
</dialog>