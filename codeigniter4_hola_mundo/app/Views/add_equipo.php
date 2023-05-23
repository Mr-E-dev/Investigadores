<h1>AGREGAR EQUIPO</h1>
<form action="<?= site_url('controllerequipo/save') ?>" method="POST" id="formAdd">
<table>
    <tr><td> <label for="" >Id EQUIPO</label></td>
        <td> <input type="text" name="IdEquipo" required size="10"></td></tr>
        <tr><td> <label for="" >Facultad</label></td>
        <td> <select name="Idfacultad" require><option value="" disabled selected> <-- Elige --> </option>
        <?php foreach($listado_facultades as $facultad) {?>
        <option value="<?=$facultad->IdFacultad?>">
        <?=$facultad->NomFacultad?>
        </option>
        <?php } ?>
        </select>
        </td></tr>>
    <tr><td> <label for="" >Descripcion</label></td>
        <td> <input type="text" name="Descripcion" require size="30"></td></tr>
    <tr><td colspan="2"><input type="submit" value="GUARDAR">
            <input type="reset" value="BORRAR"></td></tr>
</table>
</form>