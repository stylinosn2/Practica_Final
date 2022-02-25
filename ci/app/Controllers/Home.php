<?php

namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bienvenida()
    {
        return view ('vBienveida');
    }
    public function curriculum()
    {
        return view ('vCurriculum');
    }
    public function registro()
    {
        return view ('vRegistro');
    }
    public function insertarForm()

    {
        $mUsuarios = new mUsuarios();
        $usuarioNuevo =[
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "telefono" => $_POST['telefono'],
            "domicilio" => $_POST['domicilio'],
            "usuario" => $_POST['email'],
            "password" => $_POST['password']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->
        db->insertID();

        return view("vSucess", $datoId);
    }
    
}
