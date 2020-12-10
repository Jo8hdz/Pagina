<?php namespace App\Models;

use CodeIgniter\Model;

class carruselModel extends Model{

    protected $table      = 'carrusel';
    protected $primaryKey = 'idPhoto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['ruta', 'nombre'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
   
}