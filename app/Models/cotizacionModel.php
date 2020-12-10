<?php namespace App\Models;

use CodeIgniter\Model;

class cotizacionModel extends Model{

    protected $table      = 'cotizacion';
    protected $primaryKey = 'idCotizacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['ubicacion', 'evento', 'horario', 'fechaE', 'fechaA', 'detalles', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}