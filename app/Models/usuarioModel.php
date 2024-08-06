<?php

namespace App\Models;

use CodeIgniter\Model;

class usuarioModel extends Model
{
    protected $table = 'usuarios';   //nombre de la tabla
    protected $primarykey = 'id_usuario';  //identificador de la tabla 
    //todos los campos de la tabla 
    protected $allowedFields = [
        'nombre',
        'apellido',
        'usuario',
        'email',
        'pass',
        'perfil_id',
        'baja',
        'created_at'];  

    public function listarUsuarios(){
        $listadousuarios = $this -> db->query("SELECT * FROM usuarios");
        return $listadousuarios->getResult();
}
    public function obtenerUsuario($data){
        $listadousuarios = $this -> db -> table('usuarios');
        $listadousuarios -> where($data);
        return $listadousuarios -> get() -> getResultArray();
        
    }

    public function editarUsuario($data, $idUsuario) {
        $listadousuarios = $this -> db -> table('usuarios');
        $listadousuarios-> set($data);
        $listadousuarios -> where('id_usuario', $idUsuario);
        return $listadousuarios -> update();
    }

    public function eliminarUsuario($data) {
        $listadousuarios = $this -> db -> table('usuarios');
        $listadousuarios -> where($data);
        return $listadousuarios -> delete(); 
    }

}
