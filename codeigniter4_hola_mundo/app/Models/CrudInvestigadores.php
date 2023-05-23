<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudInvestigadores extends Model{
    //tabla
    protected $table = 'investigadores';
    //allowed fields to manage
    protected $allowedFields = ['DNI','NomInvestigador','ApellInvestigador','IdFacultad'];
}