<?php

class M_otro_criterios extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);

    }

    public function agregar_criterio($data)
    {
        $this->db->insert('otroscriterios', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function listar_Criterios($id_cuantificacion)
    {

        $this->db->select('*');
        $this->db->from('otroscriterios');
        $this->db->where("(iIdCuantificacion=$id_cuantificacion AND iActivo=1)");
        $this->db->order_by("iIdCriterio", "ASC");
        $query = $this->db->get();
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $datos[] = [
                    'iIdCriterio' => $row->iIdCriterio,
                    'VnombreCriterio' => $row->VnombreCriterio,
                    'tDescripcionCriterio' => $row->tDescripcionCriterio

                ];
            }
        }else{
            $datos = array();
        }

        return $datos;
    }

    public function eliminar_criterio($id_criterio,$data)
    {
        $this->db->where('iIdCriterio', $id_criterio);
        $this->db->update('otroscriterios',$data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function Actualizarcriterio($id_Criterio, $datos)
    {
        $this->db->where('iIdCriterio', $id_Criterio);
        $this->db->update('otroscriterios', $datos);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


}
