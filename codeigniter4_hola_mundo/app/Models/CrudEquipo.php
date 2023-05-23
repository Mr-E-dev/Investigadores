<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudEquipo extends Model{
    //tabla
    protected $table = 'equipo';
    //allowed fields to manage
    protected $allowedFields = ['IdEquipo','Idfacultad','Descripcion'];
}