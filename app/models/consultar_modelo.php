<?
class Consultar_modelo extends CI_Model
{
	  function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function unidades()
	{
		return $this->db->query('select distinct numero,concecionario from unidad order by numero desc');
	}
	
	  function conductores(){
		 return $this->db->query('select distinct numero,nombre,apellidoPaterno,apellidoMaterno from conductores order by nombre,apellidoPaterno,apellidoMaterno asc');
	 }
	 
	 function dias(){
	     return $this->db->get('dias');
	 }
	  function fecha(){
	     
		 return $this->db->query('select distinct fecha from dias order by fecha asc');
	 }
	  function f(){
	     
		 return $this->db->query('select distinct f from dias order by f asc');
	 }
	 
	   function mv(){
	     
		 return $this->db->query('select distinct mv from dias order by mv asc');
	 }
	 function ruta(){
	     
		 return $this->db->query('select distinct ruta from dias order by ruta desc');
	 }
	 
	 function buscarDiaFecha(){
	     return $this->db->get_where('dias',array('fecha' => $this->input->post('fechaConsulta')));
	 }
	 function buscarDiaF(){
	     return $this->db->get_where('dias',array('f' => $this->input->post('fConsulta')));
	 }
	 function buscarDiaMV(){
	     return $this->db->get_where('dias',array('mv' => $this->input->post('mvConsulta')));
	 }
	 
	 function buscarDiaUnidad(){
	     return $this->db->get_where('dias',array('unidad' => $this->input->post('unidadConsulta')));
	 }
	 
	  function buscarDiaRuta(){
		  $this->db->distinct();
	     return $this->db->get_where('dias',array('ruta' => $this->input->post('rutaConsulta')));
	 }
	 
	  function buscarDiaConductor(){
	     return $this->db->get_where('dias',array('conductor' => $this->input->post('conductorConsulta')));
	 }
	  function buscarDiaSalida(){
	     return $this->db->get_where('dias',array('salida' => $this->input->post('salidaConsulta')));
	 }
	 function buscarDiaUtilidad(){
	     return $this->db->get_where('dias',array('fecha' => $this->input->post('fechaUtilidad'),'unidad' => $this->input->post('unidadUtilidad'),'conductor' => $this->input->post('conductorUtilidad')));
	 }
	  function buscarDiaEditar(){
	     return $this->db->get_where('dias',array('fecha' => $this->input->post('fechaBuscar'),'unidad' => $this->input->post('unidadBuscar'),'conductor' => $this->input->post('conductorBuscar'),'ruta' => $this->input->post('rutaBuscar')));
	 }
	 
	 /*function buscarDiaHorario(){
	     return $this->db->get_where('dias',array('unidad' => $this->input->post('unidadConsulta')));
	 }*/
}
?>