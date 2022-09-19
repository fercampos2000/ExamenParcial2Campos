<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelapi extends CI_Model {
    
        public function guardar($datos) {
         return $this->db->insert('parcial2campos', $datos);   
        }
 

    public function getEstudiante() {  
        $this->db->select("*");
        $this->db->from("parcial2campos");
        $results = $this->db->get();
        return $results->result();
    }

    public function getEstudiantes($id) {  
        $this->db->select("u.Id, u.nombre, u.correo, u.contrasena, u.condigo, u.carrera, u.year, u.correlativo");
        $this->db->from("parcial2campos u");
        $this->db->where("u.Id", $id);
        $result = $this->db->get();
        return $result->row();
    }

    public function codExistente($cod) {  
        $this->db->select("u.codigo");
        $this->db->from("parcial2campos u");
        $this->db->where("u.codigo", $cod);
        $results = $this->db->get()->row();
        return $results;
    }

    public function correlatExistente($correlat) {  
        $this->db->select("u.correlativo");
        $this->db->from("parcial2campos u");
        $this->db->where("u.correlativo", $correlat);
        $result = $this->db->get()->row();
        return $result;
    }


        /** Implement function get_by_id for get row with id our user table */
    public function get_by_id($id)
    {        
        $q = $this->db->get_where("parcial2campos", ['Id' => $id]);
        return $q;
    }

    public function update($id, $datos)
    {     
        $this->db->where('Id', $id);
        return $this->db->update("parcial2campos", $datos);        
    }

    public function delete($id)
    {     
        $this->db->where('Id', $id);
        return $this->db->delete("parcial2campos");        
    }
    

    /** Implement function get_all for get all rows  our user table */
    public function get_all()
    {
        //$this->db->limit($start, $page_size);
        $q = $this->db->get('parcial2campos');
        return $q;        
    }



    public function edit($id, $data)
    {        
        $this->db->where('Id', $id);
        return $this->db->update('parcial2campos', $data);        
    }


}