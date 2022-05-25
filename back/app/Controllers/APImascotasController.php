<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APImascotasController extends ResourceController
{
    protected $modelName = 'App\Models\MascotasModel';
    protected $format    = 'json';

    public function buscarMascota(){

        return $this->respond($this->model->findAll());
    }

    public function registrarMascota(){

        //1. recibir datos de la mascota
        $nombre=$this->request->getPost('nombre');
        $status=$this->request->getPost('status');
        $categoria=$this->request->getPost('categoria');
        $tag=$this->request->getPost('tag');
        $photoUrl=$this->request->getPost('photoUrl');

        //2. arreglo
        $datosEnvio=array(
            "nombre"=>$nombre,
            "status"=>$status,
            "categoria"=>$categoria,
            "tag"=>$tag,
            "photoUrl"=>$photoUrl
        );

        //3. validacion

        if($this->validate('mascotas')){
            $consulta = $this->model->insert($datosEnvio);

            /* $mensaje=array('estado'=>true,'mensaje'=>"se ha agregado la mascota exitosamente"); */

            return $this->respond($consulta);

        }else{

            $validation =  \Config\Services::validation();
            return $this->respond($validation->getErrors(),400);
        }

        
    }


    public function editarMascota($id){

        /* $datosPeticion=$this->request->getJSON(); */

        $nombre = $this->request->getVar('nombre');
        $status = $this->request->getVar('status');
        $categoria = $this->request->getVar('categoria');

        $datosEnvio = array(

            "nombre" => $nombre,
            "status" => $status,
            "categoria" => $categoria

        );
        $consulta = $this->model->update($id,$datosEnvio);

        $mensaje=array('estado'=>true,'mensaje'=>"se ha editado la mascota exitosamente");

        return $this->respond($consulta);
/*         if($this->validate('mascotasPUT')){


        }else{

            $validation =  \Config\Services::validation();
        } */
    }


    public function eliminarMascota($id){

        $consulta = $this->model->where('id', $id)->delete();

        return $this->respond($consulta);
           
    }

    public function infoMascota($id){

        $consulta = $this->model->where('id', $id)->findAll();

        return $this->respond($consulta);
    }
}