<?php

class M_ServiciosBienes extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);

    }

    public function agregar_Servicio($data)
    {
        $this->db->insert('bienesservicios', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function listar_servicios($iIdProgrma)
    {
        //falta mandarle el id del programa que no sea de manera estatica
        //$iIdProgrma = 20;
        $this->db->select('*');
        $this->db->from('bienesservicios');
        $this->db->where("(iIdPrograma=$iIdProgrma AND iActivo=1)");
        $this->db->order_by("iIdBienServicio", "ASC");
        $query = $this->db->get();
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $datos[] = [
                    'iIdBienServicio' => $row->iIdBienServicio,
                    'vNombreServicio' => $row->vNombreServicio,
                    'tDescripcion' => $row->tDescripcion,
                    'tCriteriosCalidad' => $row->tCriteriosCalidad,
                    'tCriteriosEntregas' => $row->tCriteriosEntregas,
                    'iIdUnidadMedida' => $row->iIdUnidadMedida
                ];
            }
        }else{
            $datos = array();
        }

        return $datos;
    }

    public function listar_servicio($id)
    {
        $this->db->select('*');
        $this->db->from('bienesservicios');
        $this->db->where('iIdBienServicio', $id);
        $query = $this->db->get()->row();
        $datos = array();
        foreach ($query as $campo => $value) {
            $datos[$campo] = $value;
        }


        return $datos;
    }

    public function Eliminar_servicio($iIdBienServicio, $data)
    {
        $this->db->where('iIdBienServicio', $iIdBienServicio);
        $this->db->update('bienesservicios', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    public function actualizar_problema($data, $id)
    {
        $this->db->where('iId_problema', $id);
        $this->db->update('problemas', $data);
        $this->actualizar_status_objetivo($id);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function recuperar_unidad()
    {

        $this->db->select('*');
        $this->db->from('unidadmedida');
        $this->db->order_by("vNombre", "ASC");
        $this->db->where("iActivo", 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $datos[] = [
                'iUnidadMedida' => $row->iUnidadMedida,
                'vNombre' => $row->vNombre,
            ];
        }
        return $datos;
    }

    public function actualizar_servicio($id, $datos)
    {
        $this->db->where('iIdBienServicio', $id);
        $this->db->update('bienesservicios', $datos);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}