<h1>AAGREGAR FACULTAD</h1>
<form action="<?= site_url('controllerfacultad/save') ?>" method="POST" id="formAdd">
<table>
    <tr><td> <label for="" >Nombre Facultad</label></td>
        <td> <input type="text" name="NomFacultad" required size="10"></td></tr>
    <tr><td colspan="2"><input type="submit" value="GUARDAR">
            <input type="reset" value="BORRAR"></td></tr>
</table>
</form>