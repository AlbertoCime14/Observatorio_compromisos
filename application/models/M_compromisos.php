<?php

class M_compromisos extends CI_Model{

	private $table = 'Entregable';
	private $idF = 'iIdEntregable';

	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}

	//Muestra todos los entregables
	public function listar_compromisos4()
	{
		$this->db->select();
		$this->db->from('Entregable e');
		$this->db->join('UnidadMedida um','e.iIdUnidadMedida = um.iIdUnidadMedida','JOIN');
		$this->db->join('Periodicidad p','e.iIdPeriodicidad = p.iIdPeriodicidad','JOIN');
		$this->db->join('SujetoAfectado sa','e.iIdSujetoAfectado = sa.iIdSujetoAfectado','JOIN');
		$this->db->join('DetalleEntregable de','e.iIdEntregable = de.iIdEntregable','JOIN');
		$this->db->join('DetalleActividad da','de.iIdDetalleActividad = da.iIdDetalleActividad','JOIN');
		$this->db->where('e.iActivo', 1);
		$this->db->where('da.iIdDetalleActividad');

		$query =  $this->db->get();

		$resultado = $query->result();
		return $resultado;
	}



	//Muestra la ponderacion mas alta del DetalleEntregable
	public function mostrar_detalleentregable($id_detalleactividad){

		$this->db->select();
		$this->db->from('DetalleEntregable de');
		$this->db->join('DetalleActividad da','de.iIdDetalleActividad = da.iIdDetalleActividad','JOIN');
		$this->db->where('de.iActivo', 1);
		$this->db->where('de.iIdDetalleActividad', $id_detalleactividad);
		$this->db->order_by('iPonderacion', 'DESC');
		$this->db->limit(1);

		$query =  $this->db->get()->row();

		return $query;

	}






	//Muestra la ponderacion de los entregables
	public function mostrar_ponderaciones($id_detact,$identregableactual=''){

		$this->db->select();
		$this->db->from('DetalleEntregable de');
		$this->db->join('Entregable e','de.iIdEntregable = e.iIdEntregable','JOIN');
		$this->db->join('UnidadMedida um','e.iIdUnidadMedida = um.iIdUnidadMedida','JOIN');
		$this->db->where('de.iActivo', 1);
		$this->db->where('de.iIdDetalleActividad', $id_detact);

		if($identregableactual != ''){
			$this->db->where('de.iIdDetalleEntregable !=', $identregableactual);
		}

		$query =  $this->db->get();

		$resultado = $query->result();
		return $resultado;
	}



	//Muestra las metas de los entregables por municipios
	public function mostrar_metas_municipios($id_mun,$id_detent){

		$this->db->select('dem.*');
		$this->db->from('DetalleEntregableMetaMunicipio dem');
		$this->db->join('Municipio m','dem.iIdMunicipio = m.iIdMunicipio','JOIN');
		$this->db->join('DetalleEntregable de','de.iIdDetalleEntregable = dem.iIdDetalleEntregable','JOIN');
		$this->db->where('dem.iIdMunicipio',$id_mun);
		$this->db->where('dem.iIdDetalleEntregable',$id_detent);

		$query =  $this->db->get()->row();

		return $query;

	}

	//Muestra los entregables alineados a un componente de compromiso
	public function mostrar_entregablecomponente($id_ent){

		$this->db->select();
		$this->db->from('EntregableComponente ec');
		$this->db->where('ec.iIdEntregable',$id_ent);

		$query =  $this->db->get()->row();

		return $query;
	}

	//mostrar todos los entregables y los componentes
	public function mostrar_entregablecompromiso(){

		$this->db->select();
		$this->db->from('Entregable e');
		$this->db->join('EntregableComponente ec','ec.iIdEntregable = e.iIdEntregable','LEFT OUTER');
		$this->db->join('Componente c','ec.iIdComponente = c.iIdComponente','LEFT OUTER');
		$this->db->join('Compromiso cp','c.iIdCompromiso = cp.iIdCompromiso','LEFT OUTER');
		$this->db->where('e.iActivo',1);

		$query =  $this->db->get();

		$resultado = $query->result();
		return $resultado;

	}

	//Mostrar compromisos y componentes
	public function mostrar_componentescompromiso($id_ent){

		$this->db->select('ec.iIdEntregable,c2.vCompromiso,c2.iIdCompromiso,c.vComponente,c.iIdComponente');
		$this->db->from('Componente c');
		$this->db->join('EntregableComponente ec','c.iIdComponente = ec.iIdComponente','JOIN');
		$this->db->join('Compromiso c2','c.iIdCompromiso = c2.iIdCompromiso','JOIN');
		$this->db->where('ec.iIdEntregable',$id_ent);

		$query =  $this->db->get()->row();

		return $query;
	}






}

?>
