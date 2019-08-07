<?php
	class M_Criterios extends CI_Model {
		
		
		function __construct()
		{
			parent::__construct();
			$this->db = $this->load->database('default',TRUE);
			
		}
		
		public function agregar_criteriosfocalizacioncomplemento($data){
			$this->db->insert('criteriosfocalizacioncomplemento', $data);	
			if ($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
				public function eliminar_criteriosfocalizacioncomplemento($iIdCriterio){
			$this->db->where('iIdCriterio', $iIdCriterio);
$this->db->delete('criteriosfocalizacioncomplemento');
			if ($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		public function modificar_criteriosfocalizacioncomplemento($iIdCriterio,$data){
			
			$this->db->where('iIdCriterio', $iIdCriterio);
			$this->db->update('criteriosfocalizacioncomplemento', $data);	
			if ($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		public function listar_criteriofocalizacion($iIdPrograma){
			$this->db->select('*' );
			$this->db->from('criteriosfocalizacioncomplemento');
			$this->db->join('criteriofocalizacion','criteriofocalizacion.iIdCriterioFoc=criteriosfocalizacioncomplemento.iIdCriterioFoc', 'INNER');
			$this->db->order_by("criteriosfocalizacioncomplemento.iIdCriterioFoc", "asc");
			$this->db->where('iIdPrograma',$iIdPrograma);
			
			$query = $this->db->get();
			
			foreach ($query->result() as $row) {
				$datos[] = [
				'iIdCriterio' =>$row->iIdCriterio,
				'vDescripcion' =>$row->vDescripcion,
				'vJustificacion' =>$row->vJustificacion,
				'vMedioVerificacion' =>$row->vMedioVerificacion,
				'tLiga' =>$row->tLiga,
				'tArchivo' =>$row->tArchivo,
				'tOtroCriterio' => $row->tOtroCriterio,
				'iIdCriterioFoc' => $row->iIdCriterioFoc,
				'vNombre' => $row->vNombre
				
				
				];
			}
			return $datos;
		}
		public function listar_criterios(){
			$this->db->select('*' );
			$this->db->from('criteriofocalizacion');
			$query = $this->db->get();
			
			foreach ($query->result() as $row) {
				$datos[] = [
				'iIdCriterioFoc' => $row->iIdCriterioFoc,
				'vNombre' => $row->vNombre
				
				
				];
			}
			return $datos;
		}
		
		
	}	