<?php namespace App\Models;

use CodeIgniter\Model;

class clienteModel extends Model{

    protected $table      = 'cliente';
    protected $primaryKey = 'email';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['email', 'nombre', 'telefono'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}