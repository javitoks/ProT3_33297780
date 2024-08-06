<?php

namespace App\Controllers;

use App\Models\usuarioModel;
use CodeIgniter\Controller;

class LoginController extends BaseController
{

    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo'] = 'login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuarioModel();

        /*Trae los datos del usuario*/
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['pass'];
                $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/LoginController');
            }

            /*Verifica que sean correctos los datos ingresados, si lo son inicia la sesion*/

            $verify_pass = password_verify($password, $pass);

            /*Determina los requisitos de verificacion de la contraseña*/

            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE

                ];
                /*Si se cumple la verificacion, inicia la sesion*/

                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido/a!!');
                return redirect()->to('/panel');
            }else {
                session()->setFlashdata('msg', 'Password Erronea');
                return redirect()->to('/login');  
            } 
        }else {
                $session->setFlashdata('msg', 'No existe el email o es incorrecto');
                return redirect()->to('/login');
            }
        }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
