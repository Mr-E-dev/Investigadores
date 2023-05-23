<h1>EDITAR EQUIPO</h1>
<form action="<?= site_url('controllerequipo/update') ?>" method="POST" id="formAdd">
<table>
    <tr><td> <label for="" >IdEquipo</label></td>
        <td> <input type="text" name="IdEquipo" readonli value="<?=$equipo['IdEquipo'] ?>" size="10"></td></tr>
    <tr><td> <label for="" >Descripcion</label></td>
        <td> <input type="text" name="Descripcion" require size="10" value="<?=$equipo['Descripcion'] ?>"></td></tr>
    <tr><td> <label for="" >Facultad</label></td>
        <td> <select name="facultad" require><option value="" disabled selected> <-- Elige --> </option>
        <?php foreach($lista_facultades as $facultad) {?>
        <?php
            $sele=($equipo['Idfacultad']==$facultad->IdFacultad)?"selected":"";
        ?>
        <option value="<?=$facultad->IdFacultad?>"<?=$sele?>>
        <?=$facultad->NomFacultad?>
        </option>
        <?php } ?>
        </select>
        </td></tr>
    <tr><td colspan="2"><input type="submit" value="GUARDAR">
            <input type="reset" value="Reset"></td></tr>
</table>
</form>