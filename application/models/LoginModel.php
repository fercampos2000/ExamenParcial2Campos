<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

public function __construct() {	
	parent::__construct();
} 
    public function ConsultarDates($correouser,$contrauser)
    {

       
        
        if($correouser == null || $contrauser == null)
        {
            return null;
        }else
        {
            if($contrauser != null)
            {
                global $psw;
                $psw = md5($contrauser);

                    $this->db->select("*");
                    $this->db->from("parcial2campos");
                    $this->db->where("correo = '".$correouser."' and contrasena = '".$psw."' ");
            
                    
                    $resultado = $this->db->get()->row();
                
                    if ($resultado) {
            
                    echo '
                    <div id="ok" text-align="center" width="300px" class="alert alert-success" role="alert">
                    <h5>Datos correctos, bienvenido</h5>
                    </div>';
            
                        return true;
                    } else {
            
                    echo '<div width:300px id="error" class="alert alert-danger ocultar" s role="alert">
                        Los datos ingresados no son correctos!
                    </div>
                    ';
                        return false;
                    }
            }
        }
      
    
    }

    public function CambiandoContra($correouser,$contrauser)
    {
        if($correouser == null || $contrauser == null)
        {
            return null;
        }else
        {
            if($contrauser != null)
            {
                global $psw;
                $psw = md5($contrauser);
            
                    $this->db->select("*");
                    $this->db->from("parcial2campos");
                    $this->db->where("correo = '".$correouser."'");
                    $result = $this->db->get()->row();
            
                    if($result)
                    {
                    // $resultados = $this->db->query("UPDATE tb_codigos  SET contrasena = '".$contrauser."' WHERE IdCodigo = (select IdCodigo FROM tb_codigos where Correo = '".$correouser."' )");
                        $resultados = $this->db->query("UPDATE parcial2campos  SET contrasena = '".$psw."' WHERE correo = '".$correouser."';");
                        if($resultados) {
                        
                        echo '
                        <div id="ok" width="30px" class="alert alert-success" role="alert">
                        <h5>EL CAMBIO DE CONTRASEÑA SE REALIZO CON ÉXITO</h5>
                        </div>';
                        return $resultados;  
                    }      
                    
                    else {
                        echo '
                        <div id="ok" width="30px" class="alert alert-success" role="alert">
                        <h5>CAMBIO DE CONTRASEÑA FALLIDA</h5>
                        </div>';
                        return null;
                    }
                    }
                    else
                    {
                        echo '
                        <div id="ok" width="30px" class="alert alert-danger" role="alert">
                        <h5>NO EXISTE NINGÚN USUARIO CON ESA DIRECCIÓN DE CORREO ELECTRONICO</h5>
                        </div>';
                        return null;
                    } 
            }              
        }

      
    }
}
