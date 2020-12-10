<?php namespace App\Models;

use CodeIgniter\Model;

class infoModel extends Model{

    protected $table      = 'informacion';
    protected $primaryKey = 'idInformacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['emailStudio', 'telefonoStudio', 'whatsapp', 'direccion', 'editor', 'fotografo', 'diseniador'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}