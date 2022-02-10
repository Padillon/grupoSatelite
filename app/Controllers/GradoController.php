<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\GradoModel;

class GradoController extends Controller
{

    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
    protected $request;
    

    public function index(){
        $gradoModel = new GradoModel();
        $datos = $gradoModel->getGrados();
        $data = array(
            'datos' => $datos,
        );
        echo view('template/header');
        echo view('/grado/gradoView',$data);
        echo view('template/footer');
    }

     public function guardar(){
        
         $nombre = $this->request->getVar('g_nombre');
         $data = array(
             'grd_nombre' => $nombre,
         );
         $gradoModel = new GradoModel();
         $gradoModel->saveGrados($data);

         return redirect()->to(base_url() .'/public/GradoController');

     }

     public function getGrado($id){
        $gradoModel = new GradoModel();
        $datos = $gradoModel->getGrado($id);
        $data = array(
            'datos' => $datos,
        );
        echo view('template/header');
        echo view('/grado/edit',$data);
        echo view('template/footer');

     }


     public function update(){
        $id = $this->request->getVar('id');
        $nombre = $this->request->getVar('g_nombre');
        $data = array(
            'grd_nombre' => $nombre,
        );
        $gradoModel = new GradoModel();
        $gradoModel->updateGrado($id,$data);

        return redirect()->to(base_url() .'/public/GradoController');

     }

     public function delete($id){
        $gradoModel = new GradoModel();
        $datos = $gradoModel->delete($id);
        return redirect()->to(base_url() .'/public/GradoController');
     }
}