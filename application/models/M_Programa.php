<?php
class M_Programa extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);

    }

    public function agregar_programa($data)
    {
        $this->db->insert('programas', $data);
        $this->insertar_problema($this->db->insert_id());

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function insertar_problema($iIdPrograma)
    {
        $base64 = 'eyAiY2xhc3MiOiAiR3JhcGhMaW5rc01vZGVsIiwKICAibm9kZURhdGFBcnJheSI6IFsgCnsiY2F0ZWdvcnkiOiJTb3VyY2UiLCAia2V5IjotMSwgImxvYyI6IjQxNiAxMTIuMjM4NTc2MjUwODQ2MDUiLCAidGV4dCI6IlByb2JsZW1hIGNlbnRyYWwifSwKeyJrZXkiOi0yLCAibG9jIjoiMjI5LjEzOTUxNjE5OTQ3OTgzIDAifSwKeyJjYXRlZ29yeSI6IkRlc2lyZWRFdmVudCIsICJrZXkiOi00LCAibG9jIjoiMjkwLjExMTQyNjAzNzk3MjM2IDE5My4yMzg1NzYyNTA4NDYxIn0sCnsiY2F0ZWdvcnkiOiJEZXNpcmVkRXZlbnQiLCAia2V5IjotNSwgImxvYyI6IjY5Mi41NzgwOTMyMTMyNjU3IDIwNC4yMzg1NzYyNTA4NDYxIn0sCnsidGV4dCI6IkNvbnNlY3VlbmNpYSIsICJsb2MiOiI0MjkuNjA2MTgzMzc0NzcyOCAwIiwgImtleSI6LTd9LAp7InRleHQiOiJDb25zZWN1ZW5jaWEiLCAibG9jIjoiNjMwLjA3Mjg1MDU1MDA2NTggMCIsICJrZXkiOi04fQogXSwKICAibGlua0RhdGFBcnJheSI6IFsgCnsiZnJvbSI6LTEsICJ0byI6LTcsICJwb2ludHMiOls0ODguODg2NzA5NjE4NTE3NTYsMTEyLjI2Nzk4ODY4NzA1NzUyLDQ3OS4yODEzNjEzMjA1MDkyMyw4NS41MTUwOTg3NDQ2Mjc4Miw0NzkuMTExMDI0MTAyNDk1NCw1OC42OTAwMTQ0Mzk2NDkwMSw0ODkuMDA0MzMwNzI3NTcxMiwzMS43NjMzMzM0MTU5ODUxMV19LAp7ImZyb20iOi0xLCAidG8iOi04LCAicG9pbnRzIjpbNTE3LjYzMTkzNDk1MywxMTIuNDE3Njc2MDcxMjYwNjcsNTY2LjI2NzExMjM2OTgzNTEsNzEuNzE0NTU0Nzc4NTE1OTMsNjEzLjAwMjk4MTQ1OTU4ODIsNDQuODA1OTY4MDM3ODA4ODQsNjUwLjExNTM5MzkwODA4MjYsMzEuNzYzMzMzNDE1OTg1MTFdfSwKeyJmcm9tIjotMSwgInRvIjotNSwgInBvaW50cyI6WzU3MS44MzYyMTI0MjMyNzE0LDE0OC4yODYwOTQyOTU3MjU3LDU5OC4wNzY0MzgzMzE2OTg2LDE1NC4yNzQyNTkyODU5NTM1Miw2NDguNDIwODI1Njk5Mzc3OSwxNzQuMjE1MjI2NDYzNTM5NDQsNjk3LjgwNTUxMTI3OTA1ODksMjA0LjQ3NzMzMjQxNzg0NzU4XX0sCnsiZnJvbSI6LTEsICJ0byI6LTQsICJwb2ludHMiOls0NzEuMDI4NzM3MTExNDE2MjYsMTQ5LjMyNTE1MDE4MzA0OTM3LDQzMS4yNzkyNzQ0MzI3NzI4LDE3OS4xOTgzMzkxNzU2NjUzOCwzOTguNjg2NzIwODg1MTQsMTk0LjcwOTc2NTY5NjQ2NDM2LDM2MC42MjEwOTc5NzAwMDE3NiwyMDMuNjI1NjY1MjIzNDA0M119LAp7ImZyb20iOi0xLCAidG8iOi0yLCAicG9pbnRzIjpbNDQ0LjczMjg0OTgyMzEwNjg1LDExMi41NjkxMjQzMTkyMDU0OSw0MDguMzc1NDMxMTkwODc2NSw5OS40NzI0MDM5OTQ5MzYxNiwzNjEuMjk3MDMxODU2MTQxNyw3Mi41NjMzNjI2NTM3OTIwMywzMTMuMTI0MzYyNzE1NDE3MjUsMzEuNzYzMzMzNDE1OTg1MTFdfQogXX0';
        $data = array(
            'vNombreProblema' => 'Problema central',
            'tEstructuraProblema' => $base64,
            'iActivo' => 1,
            'iIdPrograma' => $iIdPrograma,
        );
        $this->db->insert('problema', $data);
        $this->insertar_objetivos($this->db->insert_id());
    }

    public function insertar_objetivos($iIdProblema)
    {
        $data = array(
            'iActivo' => 0,
            'iIdProblema' => $iIdProblema,
        );
        $this->db->insert('objetivos', $data);

    }
    public function listar_programas()
    {
        $iIdUsuario = 2;
        $this->db->select('*');
        $this->db->from('programas');
        $this->db->where("(iIdUsuario=$iIdUsuario AND iActivo=1)");
        $this->db->order_by("iIdPrograma", "desc");
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdPrograma' => $row->iIdPrograma,
                'vNombre' => $row->vNombre,
                'iIdTipoPrograma' => $row->iIdTipoPrograma,
                'tDescripcion' => $row->tDescripcion,
                'dFechaCaptura' => $row->dFechaCaptura,

            ];
        }
        return $datos;
    }
    public function listar_programas_previos_combo()
    {
          $fecha_actual = date("Y");
        $dFechaCaptura = date("Y", strtotime($fecha_actual . "- 1 year"));
        $this->db->select('*');
        $this->db->from('programas p');
         $this->db->where("(YEAR(dFechaCaptura)=$dFechaCaptura AND p.iActivo=1)");
        $this->db->order_by("p.iIdPrograma", "desc");
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdPrograma' => $row->iIdPrograma,
                'vNombre' => $row->vNombre
            ];
        }
        return $datos;
    }
    public function listar_programas_previos($id_programa)
    {
       
        $this->db->select('*,p.vNombre as vNombreP, tp.vNombre as nombretipo');
        $this->db->from('programas p');
         $this->db->where("(p.iActivo=1 AND p.iIdPrograma=$id_programa)");
         $this->db->join('tipoprograma tp', 'p.iIdTipoPrograma = tp.iIdTipoPrograma');
         $this->db->join('problema pro', 'pro.iIdPrograma = p.iIdPrograma');
         $this->db->join('objetivos obj', 'pro.iIdProblema = obj.iIdProblema');
        $this->db->order_by("p.iIdPrograma", "desc");
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdPrograma' => $row->iIdPrograma,
                'vNombre' => $row->vNombreP,
                'iIdTipoPrograma' => $row->iIdTipoPrograma,
                'tDescripcion' => $row->tDescripcion,
                'dFechaCaptura' => $row->dFechaCaptura,
                'tNombretipopp' =>$row->nombretipo, 
                'vNombreObjetivo' =>$row->vNombreObjetivo
            ];
        }
        return $datos;
    }
    public function listar_programas_previos_tabla($id_programa)
    {
       
        $this->db->select('* , cp.tPoblacionObjetivo as poblacion, cp.iAplica as aplica');
        $this->db->from('confprogramasprevios cp');
         $this->db->join("programas p", "cp.iIdProgramaPrevio=p.iIdPrograma");
        $this->db->order_by("cp.iIdConfiguracion", "desc");
        $this->db->where("(cp.iIdPrograma=$id_programa[iIdPrograma] AND cp.iActivo=1)");
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdConfiguracion' => $row->iIdConfiguracion,
                'iIdProgramaPrevio' => $row->iIdProgramaPrevio,
                'tPoblacionObjetivo' => $row->poblacion,
                'iAplica' => $row->aplica,
                'tArchivo' => $row->tArchivo,
                'tLiga' =>$row->tLiga, 
                'tResultadoEvaluacion' =>$row->tResultadoEvaluacion,
                'vNombre' =>$row->vNombre
            ];
        }
       return $datos;
    }
    public function listar_bienes_servicios($iIdPrograma)
    {
        $this->db->select('*');
        $this->db->from('bienesservicios bs');
         $this->db->where("(bs.iActivo=1 AND bs.iIdPrograma=$iIdPrograma)");
        $this->db->order_by("bs.vNombreServicio", "asc");
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'vNombreServicio' => $row->vNombreServicio,
             ];
        }
        return $datos;
       
    }
    public function listar_tipoprograma()
    {

        $this->db->select('*');
        $this->db->from('tipoprograma');
        $this->db->order_by("vNombre", "ASC");
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdTipoPrograma' => $row->iIdTipoPrograma,
                'vNombre' => $row->vNombre,
            ];
        }
        return $datos;
    }
    public function actualizar_status_objetivo($iIdPrograma, $data)
    {
        $this->db->where('iIdPrograma', $iIdPrograma);
        $this->db->update('programas', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
    public function eliminar_programa_estatal_previo($iIdConfiguracion, $data)
    {
        $this->db->where($iIdConfiguracion);
        $this->db->update('confprogramasprevios', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

}
