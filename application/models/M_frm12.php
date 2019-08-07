<?php

class M_frm12 extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    //Busqueda del nombre de la periodicidad
    public function recuperarperiodicidad()
    {
        $this->db->select('*');
        $this->db->from('periodicidad');
        $this->db->order_by("vPeriodicidad", "ASC");
        $this->db->where("iActivo", 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdPeriodicidad' => $row->iIdPeriodicidad,
                'vPeriodicidad' => $row->vPeriodicidad,
            ];
        }
        return $datos;
    }

    public function recuperartendencia()
    {
        $this->db->select('*');
        $this->db->from('tendencia');
        $this->db->order_by("vTendencia", "ASC");
        $this->db->where("iActivo", 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdTendencia' => $row->iIdTendencia,
                'vTendencia' => $row->vTendencia,
            ];
        }
        return $datos;
    }
    public function recuperarambito()
    {
        $this->db->select('*');
        $this->db->from('ambitomedicion');
        $this->db->order_by("vAmbitoMedicion", "ASC");
        $this->db->where("iActivo", 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdAmbitoMedicion' => $row->iIdAmbitoMedicion,
                'vAmbitoMedicion' => $row->vAmbitoMedicion,
            ];
        }
        return $datos;
    }
    public function recuperardesempenio()
    {
        $this->db->select('*');
        $this->db->from('dimensiondesempenio');
        $this->db->order_by("vDimensionDesempenio	", "ASC");
        $this->db->where("iActivo", 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $datos[] = [
                'iDimensionDesempenio' => $row->iDimensionDesempenio,
                'vDimensionDesempenio' => $row->vDimensionDesempenio,
            ];
        }
        return $datos;
    }
}