<?php
namespace App\Controllers;
use App\Models\CrudEquipo;
use App\Models\CrudFacultad;

class ControllerEquipo extends BaseController{
    //sesion
    protected $session;
    //data
    protected $data;
    //model
    protected $crud_equipo;
    //initialize objects
    protected $crud_facultades;
    public function __construct(){
        $this->crud_equipo = new CrudEquipo();
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }
    public function list(){
        $this->data['page_title'] = "LISTA Equipo";
        $this->data['list'] =
            $this->crud_equipo->orderBy('IdEquipo ASC')->select('*')->get()->getResult();
            echo view('portada/cabecera');
            echo view('listado_equipo', $this->data);
            echo view('portada/pie');
    }
    public function add()
    {
        $this->crud_equipo = new CrudFacultad();
        $this->data['listado_facultades'] = $this->crud_equipo->orderBy('IdFacultad ASC')->select('*')->get()->getResult();
        $this->data['request']=$this->request;
        echo view('portada/cabecera');
        echo view('add_equipo', $this->data);
         echo view('portada/pie');
    }
    public function save(){
        $this->data['request'] = $this->request;
        $post = ['IdEquipo'=> $this->request->getPost('IdEquipo'),'Idfacultad'=>$this->request->getPost('Idfacultad'),'Descripcion'=>$this->request->getPost('Descripcion')];
        $save= $this->crud_equipo->insert($post);
        return redirect()->to(site_url('/controllerequipo/list'));
    }
    public function del(){
        $this->data['request'] = $this->request;
        $IdEquipo = $this->request->getPost('IdEquipo');
        $res = $this->crud_equipo->where('IdEquipo',$IdEquipo)->delete();
        return redirect()->to(site_url('/controllerequipo/list'));
    }
    public function edit($IdEquipo=''){
        $qry = $this->crud_equipo->orderBy('IdEquipo ASC')->select('*')->where(['IdEquipo'=>$IdEquipo]);
        $this->data['equipo'] = $qry->first();

        $this->crud_facultades = new CrudFacultad();
        $this->data['lista_facultades'] = $this->crud_facultades->orderBy('Nomfacultad ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('portada/cabecera');
        echo view('edit_equipo', $this->data);
        echo view('portada/pie');
    }
    public function update(){
        $this->data['request'] = $this->request;
        $IdEquipo = $this->request->getPost('IdEquipo');
        $post=['Idfacultad'=>$this->request->getPost('facultad'),'Descripcion'=>$this->request->getPost('Descripcion')];
        $save= $this->crud_equipo->where('IdEquipo',$IdEquipo)->set($post)->update();
        return redirect()->to(site_url('/controllerequipo/list'));
    }
}
?>