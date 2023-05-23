<center>
<h1>LISTADO FACULTADES</h1>
<br><br>
<table>
    <thead>
        <tr>
            <th>ID FACULTAD</th>
            <th>NOMBRE FACULTAD</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($list) > 0){ ?>
        <?php $i = 1; ?>
        <?php foreach($list as $row): ?>
            <tr>
                <td><?=$row->IdFacultad?></td>
                <td><?=$row->NomFacultad?></td>
                <td><a href="<?php 
                        echo site_url('controllerfacultad/edit/').$row->IdFacultad;
                    ?>" title="Editar <?= $row->IdFacultad?>"><img src="<?php echo base_url()?>public/img/icons/edit.png" id="icon"></a></td>
                <td><a href="javascript:window.FormDel.IdFacultad.value='<?=$row->IdFacultad ?>';window.FormDel.NomFacultad.value='<?=$row->NomFacultad?>';
                window.diaIlogoFormDel.showModal();" title='Borrar  <?=$row->IdFacultad?>'><img src="<?php echo base_url()?>public/img/icons/delete.png" id="icon"></a></td>
            </tr> 
        <?php endforeach; ?>
        <?php } ?>
    </tbody>
</table>
</center>
<dialog id="diaIlogoFormDel">
    <h1>¿BORRAR FACULTAD?</h1>
        <form action="<?=site_url('controllerfacultad/del')?>" id="FormDel" method="post">
            <table>
                <tr>
                    <td>ID FACULTAD</td>
                    <td><input type="text" name="IdFacultad" readonly/></td>
                </tr>
                <tr>
                    <td>NOMBRE FACULTAD</td>
                    <td><input type="text" name="NomFacultad" readonly/></td>
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