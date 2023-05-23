<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudFacultad extends Model{
    //tabla
    protected $table = 'facultad';
    //allowed fields to manage
    protected $allowedFields = ['IdFacultad','NomFacultad'];
}