<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AlumnoModel;
use App\Models\GradoModel;

class HomeController extends Controller
{

    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
    protected $request;
    

    public function index(){
        $gradoModel = new GradoModel();
        $datos1 = $gradoModel->getGrados();
        $alumnoModel = new AlumnoModel();
        $datos2 = $alumnoModel->getAlumnos();
        $data = array(
            'grado' => $datos1,
            'alumnos' => $datos2
        );
        echo view('template/header');
        echo view('welcome_message',$data);
        echo view('template/footer');
    }

     public function guardar(){
        
         $codigo = $this->request->getVar('codigo');
         $nombre = $this->request->getVar('nombre');
         $edad = $this->request->getVar('edad');
         $sexo = $this->request->getVar('sexo');
         $grado = $this->request->getVar('grado');
         $obs = $this->request->getVar('obs');
       
         $data = array(
             'alm_codigo'=>$codigo,
             'alm_nombre' =>$nombre,
             'alm_edad'=>$edad,
             'alm_sexo'=>$sexo,
             'alm_id_grd'=>$grado,
             'alm_observacion'=>$obs      
         );

         print_r($data);
         $alumnoModel = new AlumnoModel();
         $alumnoModel->saveAlumnos($data);

         return redirect()->to(base_url() .'welcome_message');

     }
}
