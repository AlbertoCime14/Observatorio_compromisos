<?php

class M_compromisos extends CI_Model
{

	private $table = 'Entregable';
	private $idF = 'iIdEntregable';

	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}

	//Muestra todos los entregables
	public function listar_compromisos4()
	{
		$this->db->select('cp.iIdCompromiso,cp.vCompromiso,cp.iNumero,cp.iIdDependencia');
		$this->db->from('CompromisoPag cp');
		$this->db->order_by('cp.dUltimaAct', 'DESC');
		$this->db->limit(4);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [
					'iIdCompromiso' => $row->iIdCompromiso,
					'vCompromiso' => $row->vCompromiso,
					'iNumero' => $row->iNumero,
					'iIdDependencia' => $row->iIdDependencia


				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_compromisos10()
	{
		$this->db->select('cp.iIdCompromiso,cp.vCompromiso,cp.vDescripcion,cp.iIdDependencia');
		$this->db->from('CompromisoPag cp');
		$this->db->order_by('cp.dUltimaAct', 'DESC');
		$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [
					'iIdCompromiso' => $row->iIdCompromiso,
					'vCompromiso' => $row->vCompromiso,
					'vDescripcion' => $row->vDescripcion,
					'iIdDependencia' => $row->iIdDependencia


				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_compromisos()
	{
		$orden_by = 'cp.dUltimaAct AND cp.iIdCompromiso';
		$this->db->select('cp.iIdCompromiso,cp.vCompromiso,cp.iNumero,dPorcentajeAvance,cp.iIdDependencia');
		$this->db->from('CompromisoPag cp');
		$this->db->order_by('cp.iIdCompromiso', 'ASC');
		$this->db->where('iEstatus', 6);
		//$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [
					'iIdCompromiso' => $row->iIdCompromiso,
					'vCompromiso' => $row->vCompromiso,
					'iNumero' => $row->iNumero,
					'dPorcentajeAvance' => $row->dPorcentajeAvance,
					'iIdDependencia' => $row->iIdDependencia


				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_compromisosP()
	{
		$orden_by = 'cp.dUltimaAct AND cp.iIdCompromiso';
		$this->db->select('cp.iIdCompromiso,cp.vCompromiso,cp.iNumero,dPorcentajeAvance,cp.iIdDependencia');
		$this->db->from('CompromisoPag cp');
		$this->db->order_by('cp.iIdCompromiso', 'ASC');
		$this->db->where('iEstatus', 5);
		//$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [
					'iIdCompromiso' => $row->iIdCompromiso,
					'vCompromiso' => $row->vCompromiso,
					'iNumero' => $row->iNumero,
					'dPorcentajeAvance' => $row->dPorcentajeAvance,
					'iIdDependencia' => $row->iIdDependencia


				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_compromisosI()
	{
		$orden_by = 'cp.dUltimaAct AND cp.iIdCompromiso';
		$this->db->select('cp.iIdCompromiso,cp.vCompromiso,cp.iNumero,dPorcentajeAvance,cp.iIdDependencia');
		$this->db->from('CompromisoPag cp');
		$this->db->order_by('cp.iIdCompromiso', 'ASC');
		$this->db->where('iEstatus', 4);
		//$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [
					'iIdCompromiso' => $row->iIdCompromiso,
					'vCompromiso' => $row->vCompromiso,
					'iNumero' => $row->iNumero,
					'dPorcentajeAvance' => $row->dPorcentajeAvance,
					'iIdDependencia' => $row->iIdDependencia


				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_descripcion_compromiso($key)
	{
		$this->db->select('cp.vCompromiso,cp.iNumero');
		$this->db->from('CompromisoPag cp');
		//$this->db->order_by('cp.iIdCompromiso', 'ASC');
		$this->db->where('cp.iIdCompromiso', $key);
		//$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [

					'vCompromiso' => $row->vCompromiso,
					'iNumero' => $row->iNumero,


				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_responsable($key)
	{
		$this->db->select('De.vDependencia');
		$this->db->from('Dependencia De');
		//$this->db->order_by('cp.iIdCompromiso', 'ASC');
		$this->db->where('De.iIdDependencia', $key);
		//$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [

					'vDependencia' => $row->vDependencia
				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_participantes($key)
	{
		$this->db->select('de.vDependencia');
		$this->db->from('CompromisoCorresponsablePag cc');
		$this->db->join('Dependencia de', 'cc.iIdDependencia = de.iIdDependencia', 'JOIN');

		//$this->db->order_by('cp.iIdCompromiso', 'ASC');
		$this->db->where('cc.iIdCompromiso', $key);
		//$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [

					'vDependencia' => $row->vDependencia
				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function listar_componentes($key)
	{
		$this->db->select('cp.iIdComponente,cp.vComponente,cp.nAvance,cp.vDescripcion');
		$this->db->from('ComponentePag cp');
		$this->db->order_by('cp.iOrden', 'DESC');
		$this->db->where('iIdCompromiso', $key);
		//$this->db->limit(10);


		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$datos[] = [
					'iIdComponente' => $row->iIdComponente,
					'vComponente' => $row->vComponente,
					'nAvance' => $row->nAvance,
					'vDescripcion' => $row->vDescripcion
				];
			}
		} else {
			$datos = array();
		}


		return $datos;
	}

	public function buscar($buscar, $inicio = FALSE, $cantidadregistro = FALSE)
	{
		//$this->db->ilike("vCompromiso", $buscar);
		$this->db->where("iEstatus='6' and \"vCompromiso\" ilike '%$buscar%'");
		if ($inicio !== FALSE && $cantidadregistro !== FALSE) {
			$this->db->limit($cantidadregistro, $inicio);
		}
		$consulta = $this->db->get("CompromisoPag");
		return $consulta->result();
	}
	public function buscar_number($buscar, $inicio = FALSE, $cantidadregistro = FALSE)
	{
		//$this->db->ilike("vCompromiso", $buscar);
		$text="::text";
		$this->db->where("iEstatus='6' and \"iNumero\" like '%$buscar%'");
		if ($inicio !== FALSE && $cantidadregistro !== FALSE) {
			$this->db->limit($cantidadregistro, $inicio);
		}
		$consulta = $this->db->get("CompromisoPag");
		return $consulta->result();
	}

	//Muestra la ponderacion mas alta del DetalleEntregable
	public function mostrar_detalleentregable($id_detalleactividad)
	{

		$this->db->select();
		$this->db->from('DetalleEntregable de');
		$this->db->join('DetalleActividad da', 'de.iIdDetalleActividad = da.iIdDetalleActividad', 'JOIN');
		$this->db->where('de.iActivo', 1);
		$this->db->where('de.iIdDetalleActividad', $id_detalleactividad);
		$this->db->order_by('iPonderacion', 'DESC');
		$this->db->limit(1);

		$query = $this->db->get()->row();

		return $query;

	}


	//Muestra la ponderacion de los entregables
	public function mostrar_ponderaciones($id_detact, $identregableactual = '')
	{

		$this->db->select();
		$this->db->from('DetalleEntregable de');
		$this->db->join('Entregable e', 'de.iIdEntregable = e.iIdEntregable', 'JOIN');
		$this->db->join('UnidadMedida um', 'e.iIdUnidadMedida = um.iIdUnidadMedida', 'JOIN');
		$this->db->where('de.iActivo', 1);
		$this->db->where('de.iIdDetalleActividad', $id_detact);

		if ($identregableactual != '') {
			$this->db->where('de.iIdDetalleEntregable !=', $identregableactual);
		}

		$query = $this->db->get();

		$resultado = $query->result();
		return $resultado;
	}


	//Muestra las metas de los entregables por municipios
	public function mostrar_metas_municipios($id_mun, $id_detent)
	{

		$this->db->select('dem.*');
		$this->db->from('DetalleEntregableMetaMunicipio dem');
		$this->db->join('Municipio m', 'dem.iIdMunicipio = m.iIdMunicipio', 'JOIN');
		$this->db->join('DetalleEntregable de', 'de.iIdDetalleEntregable = dem.iIdDetalleEntregable', 'JOIN');
		$this->db->where('dem.iIdMunicipio', $id_mun);
		$this->db->where('dem.iIdDetalleEntregable', $id_detent);

		$query = $this->db->get()->row();

		return $query;

	}

	//Muestra los entregables alineados a un componente de compromiso
	public function mostrar_entregablecomponente($id_ent)
	{

		$this->db->select();
		$this->db->from('EntregableComponente ec');
		$this->db->where('ec.iIdEntregable', $id_ent);

		$query = $this->db->get()->row();

		return $query;
	}

	//mostrar todos los entregables y los componentes
	public function mostrar_entregablecompromiso()
	{

		$this->db->select();
		$this->db->from('Entregable e');
		$this->db->join('EntregableComponente ec', 'ec.iIdEntregable = e.iIdEntregable', 'LEFT OUTER');
		$this->db->join('Componente c', 'ec.iIdComponente = c.iIdComponente', 'LEFT OUTER');
		$this->db->join('Compromiso cp', 'c.iIdCompromiso = cp.iIdCompromiso', 'LEFT OUTER');
		$this->db->where('e.iActivo', 1);

		$query = $this->db->get();

		$resultado = $query->result();
		return $resultado;

	}

	//Mostrar compromisos y componentes
	public function mostrar_componentescompromiso($id_ent)
	{

		$this->db->select('ec.iIdEntregable,c2.vCompromiso,c2.iIdCompromiso,c.vComponente,c.iIdComponente');
		$this->db->from('Componente c');
		$this->db->join('EntregableComponente ec', 'c.iIdComponente = ec.iIdComponente', 'JOIN');
		$this->db->join('Compromiso c2', 'c.iIdCompromiso = c2.iIdCompromiso', 'JOIN');
		$this->db->where('ec.iIdEntregable', $id_ent);

		$query = $this->db->get()->row();

		return $query;
	}


}

?>
