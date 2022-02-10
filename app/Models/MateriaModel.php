<?php 

namespace App\Models;
use CodeIgniter\Model;

class MateriaModel extends Model{

    protected $table = 'mat_materia';
    protected $primaryKey = 'mat_id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['mat_nombre'];


    public function getMaterias(){

        return $this->findAll();  
    }

    public function getMateria($id){

        return $this->find($id);  
    }

    public function saveMaterias($data){

        return $this->insert($data);  
    }

    public function updateMateria($id, $data){

        return $this->update($id, $data);  
    }

    public function deleteMateria($id){

        return $this->delete($id);  
    }


}