<?php
namespace App\Controllers;
use App\Models\CrudReservas;

class Controllerreservas extends BaseController{
    //sesion
    protected $session;
    //data
    protected $data;
    //model
    protected $crud_reservas;
    //initialize objects
    public function __construct(){
        $this->crud_reservas = new CrudReservas();
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }
    public function list(){
        $this->data['page_title'] = "LISTA RESERVAS";
        $this->data['list'] =
            $this->crud_reservas->orderBy('IdReserva ASC')->select('*')->get()->getResult();
            echo view('portada/cabecera');
            echo view('listado_reservas', $this->data);
            echo view('portada/pie');
    }
}
?>