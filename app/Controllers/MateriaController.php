<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MateriaModel;

class MateriaController extends Controller
{

    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
    protected $request;
    

    public function index(){
        $materiaModel = new MateriaModel();
        $datos = $materiaModel->getMaterias();
        $data = array(
            'datos' => $datos,
        );
        echo view('template/header');
        echo view('/materia/materiaView',$data);
        echo view('template/footer');
    }

     public function guardar(){
        
         $nombre = $this->request->getVar('m_nombre');
         $data = array(
             'mat_nombre' => $nombre,
         );
         $materiaModel = new MateriaModel();
         $materiaModel->saveMaterias($data);

         return redirect()->to(base_url() .'/public/MateriaController');

     }

     public function getMateria($id){
        $materiaModel = new MateriaModel();
        $datos = $materiaModel->getMateria($id);
        $data = array(
            'datos' => $datos,
        );
        echo view('template/header');
        echo view('/materia/edit',$data);
        echo view('template/footer');

     }


     public function update(){
        $id = $this->request->getVar('id');
        $nombre = $this->request->getVar('m_nombre');
        $data = array(
            'mat_nombre' => $nombre,
        );
        $materiaModel = new MateriaModel();
        $materiaModel->updateMateria($id,$data);

        return redirect()->to(base_url() .'/public/MateriaController');

     }

     public function delete($id){
        $materiaModel = new MateriaModel();
        $datos = $materiaModel->delete($id);
        return redirect()->to(base_url() .'/public/MateriaController');
     }
}