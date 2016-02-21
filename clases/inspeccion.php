<?php
include_once 'bd.php';
class inspeccion {

	protected $table = "inspeccion";
	private $razon;
	private $ente;
	private $tiporif;
	private $rif;
	private $funcionario;
	private $observacion;
	
	public function registrarInspeccion($razon,$ente,$tiporif,$rif,$funcionario,$observacion){
		$rif_def=$tiporif.$rif;
		
		
		$sql=new bd();
		
		$result=$sql->doInsert($this->table, array (
				"razon_social" => $razon,
				"tipo_ente" => $ente,
				"rif" => $rif_def,
				"funcionario"=> $funcionario,
				"observacion" => $observacion 
		));
		
		return $result;
	}
	
}