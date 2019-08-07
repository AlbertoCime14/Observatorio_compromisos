<?php
class M_Problemas extends CI_Model {


	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
		
	}

    public function actualizar_problema($data,$id)
	{	
		$this->db->where('iIdPrograma', $id);
		$this->db->update('problema', $data);
		$this->actualizar_status_objetivo($id);
		if ($this->db->affected_rows() > 0)
			{
		  return TRUE;
			}
		else
			{
		  return FALSE;
			}
    }
	public function actualizar_status_objetivo($id){	
		$data= array(
		'iActivo'=>0
		);
		$this->db->where('iIdProblema', $id);
		$this->db->update('objetivos', $data);
		
	}
	  public function consultarproblemas($iIdPrograma){
        $this->db->select('*');
        $this->db->from('problema');
        $this->db->where('iIdPrograma',$iIdPrograma);
		
        $query = $this->db->get();
		
        foreach ($query->result() as $row) {
           $datos[] = [
		   	'iIdProblema'       => $row->iIdProblema ,
            'vNombreProblema'       => $row->vNombreProblema ,
            'tEstructuraProblema'       => $row->tEstructuraProblema,
			'iIdPrograma' => $row->iIdPrograma
						  
            ];
        }
        return $datos;
    }
	
}