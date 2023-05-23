
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>información del servidor</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/estilo.css"/>
</head>
<body>
  <center>
    <nav>
      <table class="nav">
        <tr>
          <th class="dropdown"><a id="navegador" href="<?php echo base_url();?>index.php"><?=lang('nav_lang.nav_home')?></a></th>
          <th class="dropdown">
            <a id="navegador" href="#"><?=lang('nav_lang.nav_investigators')?></a>
            <ul class="dropdown-content">
              <li><a id="navegador" href="<?php echo base_url();?>index.php/controllerinvestigadores/list#"><?=lang('nav_lang.nav_lista')?></a></li>
              <li><a id="navegador" href="<?php echo base_url();?>index.php/controllerinvestigadores/add#"><?=lang('nav_lang.nav_anadir')?></a></li>
            </ul>
          </th>
          <th class="dropdown">
            <a id="navegador" href="#"><?=lang('nav_lang.nav_teams')?></a>
            <ul class="dropdown-content">
              <li><a id="navegador" href="<?php echo base_url();?>index.php/controllerequipo/list#"><?=lang('nav_lang.nav_lista')?></a></li>
              <li><a id="navegador" href="<?php echo base_url();?>index.php/controllerequipo/add#"><?=lang('nav_lang.nav_anadir')?></a></li>
            </ul>
          </th>
          <th class="dropdown">
            <a id="navegador" href="#"><?=lang('nav_lang.nav_reservas')?></a>
            <ul class="dropdown-content">
              <li><a  id="navegador" href="<?php echo base_url();?>index.php/controllerreservas/list#"><?=lang('nav_lang.nav_lista')?></a></li>
            </ul>
          </th>
          <th class="dropdown">
            <a id="navegador" href="#"><?=lang('nav_lang.nav_facultad')?></a>
            <ul class="dropdown-content">
            <li><a  id="navegador" href="<?php echo base_url();?>index.php/controllerfacultad/list#"><?=lang('nav_lang.nav_lista')?></a></li>
              <li><a id="navegador" href="<?php echo base_url();?>index.php/controllerfacultad/add#"><?=lang('nav_lang.nav_anadir')?></a></li>
            </ul>
          </th> 
          <th class="dropdown"><a id="navegador" href="<?=site_url('controller_portada/aboutus');?>"><?=lang('nav_lang.nav_aboutus')?></a></th>
        </tr>
      </table>
    </nav>
  </center>
  <br><br><br>
</body>
</html>