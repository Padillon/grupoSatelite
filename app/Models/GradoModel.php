<?php 

namespace App\Models;
use CodeIgniter\Model;

class GradoModel extends Model{

    protected $table = 'grd_grado';
    protected $primaryKey = 'grd_id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['grd_nombre'];


    public function getGrados(){

        return $this->findAll();  
    }

    public function getGrado($id){

        return $this->find($id);  
    }

    public function saveGrados($data){

        return $this->insert($data);  
    }

    public function updateGrado($id, $data){

        return $this->update($id, $data);  
    }

    public function deleteGrado($id){

        return $this->delete($id);  
    }


}