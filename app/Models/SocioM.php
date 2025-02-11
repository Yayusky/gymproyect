<?php

namespace App\Models;

use CodeIgniter\Model;

class SocioM extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'socio';
    protected $primaryKey       = 'idSocio';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idSocio','nombre','apellidoP','apellidoM','sexo','peso','estatura','fechaNacimiento','telefonoM','telefonoC','correo','padecimientos','alias','cta',];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function usuario()
    {
        $db=db_connect();
        $sql ="select nombre,idSocio
        from Socio "
        ;
        
        $query=$db->query($sql);

        return $query->getResult();
    }
}
