<center>
<h1>LISTADO DE EQUIPOS</h1>
<br><br>
<table>
    <thead>
        <tr>
            <th>ID EQUIPO</th>
            <th>ID FACULTAD</th>
            <th>DESCRIPCION</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($list) > 0){ ?>
        <?php $i = 1; ?>
        <?php foreach($list as $row): ?>
            <tr>
                <th><?=$row->IdEquipo ?></th>
                <td><?=$row->Idfacultad?></td>
                <td><?=$row->Descripcion?></td>
                <td><a href="<?php 
                        echo site_url('controllerequipo/edit/').$row->IdEquipo;
                    ?>" title="Editar <?= $row->IdEquipo?>"><img src="<?php echo base_url()?>public/img/icons/edit.png" id="icon"></a></td>
                <td><a href="javascript:window.FormDel.IdEquipo.value='<?=$row->IdEquipo ?>';window.FormDel.Idfacultad.value='
                <?=$row->Idfacultad?>';window.diaIlogoFormDel.showModal();"title='Borrar<?=$row->IdEquipo?>'><img src="<?php echo base_url()?>public/img/icons/delete.png" id="icon"></a></td>
            </tr> 
        <?php endforeach; ?>
        <?php } ?>
    </tbody>
</table>
</center>
<dialog id="diaIlogoFormDel">
    <h1>¿BORRAR Equipo?</h1>
        <form action="<?=site_url('controllerequipo/del')?>" id="FormDel" method="post">
            <table>
                <tr>
                    <td>Id Equipo</td>
                    <td><input type="text" name="IdEquipo" readonly/></td>
                </tr>
                <tr>
                    <td>Facultad</td>
                    <td><input type="text" name="Idfacultad" readonly/></td>
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