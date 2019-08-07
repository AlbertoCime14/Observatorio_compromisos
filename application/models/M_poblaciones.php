<?php

class M_poblaciones extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);

    }

    public function agregar_poblacion($data)
    {
        $this->db->insert('cuantificacionpoblacion', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function listar_definiciones()
    {
        //falta mandarle el id del programa que no sea de manera estatica
        //$iIdProgrma = 20;
        $this->db->select('*');
        $this->db->from('definicionpoblacion');
        //$this->db->where("(iIdPrograma=$iIdProgrma AND iActivo=1)");
        $this->db->order_by("iIdDefinicion", "ASC");
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdDefinicion' => $row->iIdDefinicion,
                'vNombre' => $row->vNombre

            ];
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

    public function recuperar_grupo_Edad()
    {

        $this->db->select('*');
        $this->db->from('grupoedad');
        $this->db->order_by("vClasificacion", "ASC");
        //$this->db->where("iActivo", 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdGrupoEdad' => $row->iIdGrupoEdad,
                'vClasificacion' => $row->vClasificacion,
            ];
        }
        return $datos;
    }

    public function actualizar_poblacion($id_cuantificacion, $datos)
    {
        $this->db->where('iIdCuantificacion', $id_cuantificacion);
        $this->db->update('cuantificacionpoblacion', $datos);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function eliminar_poblacion($iIdCuantificacion,$data)
    {
        $this->db->where('iIdCuantificacion', $iIdCuantificacion);
        $this->db->update('cuantificacionpoblacion',$data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function cuantificacion_poblacion($iIdPrograma)
    {
        $this->db->select('*');
        $this->db->from('cuantificacionpoblacion');
        $this->db->join('definicionpoblacion', 'cuantificacionpoblacion.iIdDefinicion=definicionpoblacion.iIdDefinicion', 'INNER');
        $this->db->order_by("definicionpoblacion.iIdDefinicion", "asc");
        $this->db->where("(iIdPrograma=$iIdPrograma AND iActivo=1)");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $datos[] = [
                    'iIdCuantificacion' => $row->iIdCuantificacion,
                    'tDescripcion' => $row->tDescripcion,
                    'iHombres' => $row->iHombres,
                    'iMujeres' => $row->iMujeres,
                    'iHablantesIndigenas' => $row->iHablantesIndigenas,
                    'tEspecificacionGrupo' => $row->tEspecificacionGrupo,
                    'iIdGrupoEdad' => $row->iIdGrupoEdad,
                    'iIdDefinicion' => $row->iIdDefinicion,
                    'vNombre' => $row->vNombre,
                    'iIdPrograma' => $row->iIdPrograma


                ];
            }
        } else {
            $datos = array();
        }


        return $datos;
    }
}
