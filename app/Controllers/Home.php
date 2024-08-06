<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Limones Don Tani';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');  
    }
    public function quienes_somos()
    {   
        $data['titulo']='¿Quienes somos?';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');  
    }
    public function acerca_de()
    {
        $data['titulo']='Acerca de nosotros';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');  
    }
    public function contactanos()
    {
        $data['titulo']='Contactanos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/contacto');
        echo view('front/footer_view');  
    }
    public function registro()
    {
        $data['titulo']='Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/registro');
        echo view('front/footer_view');  
    }
    public function login()
    {
        $data['titulo']='Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');  
    }
}
