<?php 

namespace App\Models;
use CodeIgniter\Model;

class AlumnoModel extends Model{

    protected $table = 'alm_alumno';
    protected $primaryKey = 'alm_id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['alm_codigo,alm_nombre,alm_edad,alm_sexo,alm_id_grd,alm_observacion'];


    public function getAlumnos(){

        return $this->findAll();  
    }

    public function getAlumno($id){

        return $this->find($id);  
    }

    public function saveAlumnos($data){

        return $this->insert($data);  
    }

    public function updateAlumnos($id, $data){

        return $this->update($id, $data);  
    }

    public function deleteAlumnos($id){

        return $this->delete($id);  
    }


}