<?php
	class M_Diagnostico extends CI_Model {
		
		
		function __construct()
		{
			parent::__construct();
			$this->db = $this->load->database('default',TRUE);
			
		}
		
		public function agregar_programa_estatal_previo($data){
			$this->db->insert('confprogramasprevios', $data);	
			return $this->db->insert_id();
		}

		public function agregar_lugarimplementacion($data){
			$this->db->insert('lugarimplementacion', $data);
			if ($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}	
		}

		public function listar_lugarimplementacion($id_programa){
			$this->db->select('*');
			$this->db->from('lugarimplementacion lim');
			$this->db->where($id_programa);
			$query = $this->db->get();
			
			foreach ($query->result() as $row) {
				$datos[] = [
				'iIdImplementacion' =>$row->iIdImplementacion,
				'iIdConfiguracion' => $row->iIdConfiguracion,
				'iIdmunicipio' => $row->iIdmunicipio

				];
			}
			return $datos;
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
		public function listar_municipios()
		{
			$this->db->select('*' );
			$this->db->from('municipio m');
			$this->db->order_by("m.vMunicipio", "asc");
			$query = $this->db->get();
			
			foreach ($query->result() as $row) {
				$datos[] = [
				'iIdMunicipio' => $row->iIdMunicipio,
				'vMunicipio' => $row->vMunicipio
				
				
				];
			}
			return $datos;
		}	
		
	}	