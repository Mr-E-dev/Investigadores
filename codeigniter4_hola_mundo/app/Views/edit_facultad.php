<h1>CAMBIAR FACULTADS</h1>
<form action="<?= site_url('controllerfacultad/update') ?>" method="POST" id="formAdd">
<table>
    <tr><td> <label for="" >Id FACULTAD</label></td>
        <td> <input type="text" name="IdFacultad" readonli value="<?=$facul['IdFacultad'] ?>" size="10"></td></tr>
    <tr><td> <label for="" >Nombre Facultad</label></td>
        <td> <input type="text" name="NomFacultad" require size="10" value="<?=$facul['NomFacultad'] ?>"></td></tr>
    <tr><td colspan="2"><input type="submit" value="GUARDAR">
            <input type="reset" value="Reset"></td></tr>
</table>
</form>