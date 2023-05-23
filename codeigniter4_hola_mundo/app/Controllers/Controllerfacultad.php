<?php
namespace App\Controllers;
use App\Models\CrudFacultad;

class Controllerfacultad extends BaseController{
    //sesion
    protected $session;
    //data
    protected $data;
    //model
    protected $crud_facultad;
    //initialize objects
    protected $crud_facultades;
    public function __construct(){
        $this->crud_facultad = new CrudFacultad();
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }
    public function list(){
        $this->data['page_title'] = "LISTA FACULTAD";
        $this->data['list'] =
            $this->crud_facultad->orderBy('IdFacultad ASC')->select('*')->get()->getResult();
            echo view('portada/cabecera');
            echo view('listado_facultad', $this->data);
            echo view('portada/pie');
    }
    public function add()
    {
        $this->crud_facultad = new CrudFacultad();
        $this->data['listado_facultades'] = $this->crud_facultad->orderBy('IdFacultad ASC')->select('*')->get()->getResult();
        $this->data['request']=$this->request;
        echo view('portada/cabecera');
        echo view('add_facultad', $this->data);
         echo view('portada/pie');
    }
    public function save(){
        $this->data['request'] = $this->request;
        $post = ['NomFacultad'=> $this->request->getPost('NomFacultad')];
        $save= $this->crud_facultad->insert($post);
        return redirect()->to(site_url('/controllerfacultad/list'));
    }
    public function del(){
        $this->data['request'] = $this->request;
        $facul = $this->request->getPost('IdFacultad');
        $res = $this->crud_facultad->where('IdFacultad',$facul)->delete();
        return redirect()->to(site_url('/controllerfacultad/list'));
    }
    public function edit($facul=''){
        $qry = $this->crud_facultad->orderBy('IdFacultad ASC')->select('*')->where(['IdFacultad'=>$facul]);
        $this->data['facul'] = $qry->first();

        $this->crud_facultades = new CrudFacultad();
        $this->data['lista_facultades'] = $this->crud_facultades->orderBy('Nomfacultad ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('portada/cabecera');
        echo view('edit_facultad', $this->data);
        echo view('portada/pie');
    }
    public function update(){
        $this->data['request'] = $this->request;
        $facul = $this->request->getPost('IdFacultad');
        $post=['NomFacultad'=>$this->request->getPost('NomFacultad')];
        $save= $this->crud_facultad->where('IdFacultad',$facul)->set($post)->update();
        return redirect()->to(site_url('/controllerfacultad/list'));
    }
}
?>