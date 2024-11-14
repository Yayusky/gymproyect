<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioM extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Usuario';
    protected $primaryKey       = 'idUsuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idUsuario','nombre','apellidoP','apellidoM','sexo','fechaNacimiento','telefonoM','telefonoC','curp','alias', 'correo','cta','tipo'];

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

    public function validar($alias,$cta)
    {
        $db=db_connect();
        $sql ="select alias, tipo
        from Usuario 
        where alias = '".$alias."' and cta ='". $cta."'";
        
        $query=$db->query($sql);

        return $query->getResult();
    }

    public function usuario()
    {
        $db=db_connect();
        $sql ="select nombre,idUsuario
        from Usuario
        where tipo= 1";
        
        $query=$db->query($sql);

        return $query->getResult();
    }
}
           