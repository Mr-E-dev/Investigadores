<?php
namespace App\Controllers;
use App\Models\CrudInvestigadores;
use App\Models\CrudFacultad;
//use App\Models\CrudEquipo;
//use App\Models\CrudReservas;
class ControllerInvestigadores extends BaseController{
    //sesion
    protected $session;
    //data
    protected $data;
    //model
    protected $crud_inves;
    //initialize objects
    protected $crud_facultades;

    public function __construct(){
        $this->crud_inves = new CrudInvestigadores();
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }
    public function list(){
        $this->data['page_title'] = "LISTA INVESTIGADORES";
        $this->data['list'] =
            $this->crud_inves->orderBy('DNI ASC')->select('*')->get()->getResult();
            echo view('portada/cabecera');
            echo view('listado_investigadores', $this->data);
            echo view('portada/pie');
    }
    public function index()
    {
        return  view('portada/cabecera.php').
                view('portada/listado_investigadores').
                view('portada/pie');

    }
    public function add()
    {
        $this->crud_facultades = new CrudFacultad();
        $this->data['listado_facultades'] = $this->crud_facultades->orderBy('NomFacultad ASC')->select('*')->get()->getResult();
        $this->data['request']=$this->request;
        echo view('portada/cabecera');
        echo view('add_investigadores', $this->data);
         echo view('portada/pie');
    }
    public function equipo(){
        $this->data['page_title'] = "LISTA EQUIPO";
        $this->data['equipo'] =
            $this->crud_inves->orderBy('IdEquipo ASC')->select('*')->get()->getResult();
            echo view('portada/cabecera');
            echo view('listado_equipo', $this->data);
            echo view('portada/pie');
    }
    public function save(){
        $this->data['request'] = $this->request;
        $post = ['DNI'=> $this->request->getPost('dni'),'NomInvestigador'=>$this->request->getPost('nombre'),'ApellInvestigador'=>$this->request->getPost('apellidos'),'IdFacultad'=>$this->request->getPost('facultad')];
        $save= $this->crud_inves->insert($post);
        return redirect()->to(site_url('/controllerinvestigadores/list'));
    }
    public function del(){
        $this->data['request'] = $this->request;
        $dni = $this->request->getPost('dni');
        $res = $this->crud_inves->where('DNI',$dni)->delete();
        return redirect()->to(site_url('/controllerinvestigadores/list'));
    }
    public function edit($dni=''){
        $qry = $this->crud_inves->orderBy('DNI ASC')->select('*')->where(['DNI'=>$dni]);
        $this->data['inves'] = $qry->first();

        $this->crud_facultades = new CrudFacultad();
        $this->data['lista_facultades'] = $this->crud_facultades->orderBy('Nomfacultad ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('portada/cabecera');
        echo view('edit_investigadores', $this->data);
        echo view('portada/pie');
    }
    public function update(){
        $this->data['request'] = $this->request;
        $dni = $this->request->getPost('dni');
        $post=['NomInvestigador'=>$this->request->getPost('nombre'),'ApellInvestigador'=>$this->request->getPost('apellidos'),'IdFacultad'=>$this->request->getPost('facultad')];
        $save= $this->crud_inves->where('DNI',$dni)->set($post)->update();
        return redirect()->to(site_url('/controllerinvestigadores/list'));
    }
}
?>
