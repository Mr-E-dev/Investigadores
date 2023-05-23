<?php

namespace App\Controllers;

class controller_portada extends BaseController
{
    public function index()
    {
        return view('portada/cabecera.php').
               view('portada/cuerpo.php').
               view('portada/pie.php');

    }
    public function aboutus()
    {
        return view('portada/cabecera.php').
               view('portada/aboutus.php').
               view('portada/pie.php');

    }

}

?>
