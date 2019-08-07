<?php
class M_objetivos extends CI_Model {


	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);

	}

    public function actualizar_objetivos($data,$id)
	{
		$this->db->where('iIdProblema', $id);
		$this->db->update('objetivos', $data);

		if ($this->db->affected_rows() > 0)
			{
		  return TRUE;
			}
		else
			{
		  return FALSE;
			}
    }
	
    public function consultarobjetivos($iIdPrograma){
        $this->db->select('* , objetivos.iActivo as activo' );
        $this->db->from('objetivos');
		$this->db->join('problema','problema.iIdProblema=objetivos.iIdProblema', 'INNER');
        $this->db->where('iIdPrograma',$iIdPrograma);

        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $datos[] = [
                'iIdObjetivo'       => $row->iIdObjetivo ,
                'vNombreObjetivo'       => $row->vNombreObjetivo ,
				'iActivo' => $row->activo,
				'iIdProblema' =>$row->iIdProblema,
                'tEstructuraObjetivo' => $row->tEstructuraObjetivo

            ];
        }
        return $datos;
    }

}