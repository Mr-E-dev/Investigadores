<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudReservas extends Model{
    //tabla
    protected $table = 'reservas';
    //allowed fields to manage
    protected $allowedFields = ['IdReserva','DNI','IdEquipo','FechaInicio','FechaFin'];
}