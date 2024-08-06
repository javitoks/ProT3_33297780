<?php

namespace App\Controllers;
use App\Models\usuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends Controller{

    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create() {
        $dato['titulo']='Registro';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function listar() {
        $listado = new usuarioModel();
        $datos = $listado -> listarUsuarios();
        $data = [
            "datos" => $datos
        ];
        $dato['titulo']='Listado Usuarios';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/listar',$data);
        echo view('front/footer_view');
    }

    public function crearUsuario(){
        $dato['titulo']='Crear Usuarios';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/crear');
        echo view('front/footer_view');
    }

    public function obtenerUsuario($idUsuario){
        $data = ['id_usuario' => $idUsuario];
        $listado = new usuarioModel();
        $respuesta = $listado->obtenerUsuario($data);

        $datos = ['datos' => $respuesta];
        
        $dato['titulo']='Listado Usuarios';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/editar', $datos);
        echo view('front/footer_view');
    }

    public function editarUsuario(){
        
        $listado = new usuarioModel();
        $data = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'usuario' => $_POST['usuario'],
            'email' => $_POST['email'],
            'baja' => $_POST['baja']
        ];
        $idUsuario = $_POST['id_usuario'];
        $listado->editarUsuario($data, $idUsuario);
        return redirect('listado');

    }

    public function eliminarUsuario($idUsuario){    
        $listado = new usuarioModel();
        $data = ['id_usuario' => $idUsuario];
        $listado->eliminarUsuario($data);
        return redirect('listado');
    }

    public function formValidation(){
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]',
            'confirmar_pass' => 'required|min_length[3]|max_length[10]|matches[pass]',
        ],
    );
        $formModel = new usuarioModel();
        if (!$input){
            $data['titulo']='Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        }
        else {
            $formModel->save([
                'nombre'=> $this->request->getVar('nombre'),
                'apellido'=> $this->request->getVar('apellido'),
                'usuario'=> $this->request->getVar('usuario'),
                'email'=> $this->request->getVar('email'),
                'pass'=> password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),    
            ]);
            session()->setFlashdata('success', 'Usuario registrado con exito');
            return $this->response->redirect('login');
            }
        }
    }