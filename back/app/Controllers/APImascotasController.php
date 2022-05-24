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
            $this->model->insert($datosEnvio);

            $mensaje=array('estado'=>true,'mensaje'=>"se ha agregado la mascota exitosamente");

            return $this->respond($mensaje);

        }else{

            $validation =  \Config\Services::validation();
            return $this->respond($validation->getErrors(),400);
        }

        
    }


    public function editarMascota($id){

        $datosPeticion=$this->request->getRawInput();

        $nombre = $datosPeticion["nombre"];
        $status = $datosPeticion["status"];
        $categoria = $datosPeticion["categoria"];
        $tag = $datosPeticion["tag"];
        $photoUrl = $datosPeticion["photoUrl"];


        $datosEnvio = array(

            "status" => $status,
            "categoria" => $categoria,

        );

        if($this->validate('mascotasPUT')){
            $this->model->update($id,$datosEnvio);

            $mensaje=array('estado'=>true,'mensaje'=>"se ha editado la mascota exitosamente");

            return $this->respond($mensaje);

        }else{

            $validation =  \Config\Services::validation();
            return $this->respond($validation->getErrors(),400);
        }

        return $this->respond($datosEnvio);

        
    }
}