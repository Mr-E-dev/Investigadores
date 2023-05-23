<h1>AGREGAR INVESTIGADORES</h1>
<form action="<?= site_url('controllerinvestigadores/save') ?>" method="POST" id="formAdd">
<table>
    <tr><td> <label for="" >DNI</label></td>
        <td> <input type="text" name="dni" required size="10"></td></tr>
    <tr><td> <label for="" >Nombre</label></td>
        <td> <input type="text" name="nombre" require size="10"></td></tr>
    <tr><td> <label for="" >Apellidos</label></td>
        <td> <input type="text" name="apellidos" require size="30"></td></tr>
    <tr><td> <label for="" >Facultad</label></td>
        <td> <select name="facultad" require><option value="" disabled selected> <-- Elige --> </option>
        <?php foreach($listado_facultades as $facultad) {?>
        <option value="<?=$facultad->IdFacultad?>">
        <?=$facultad->NomFacultad?>
        </option>
        <?php } ?>
        </select>
        </td></tr>
    <tr><td colspan="2"><input type="submit" value="GUARDAR">
            <input type="reset" value="Reset"></td></tr>
</table>
</form>