<?
class Borrar_modelo extends CI_Model
{
	  function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	 function borrarDia(){
	     $this->db->delete('dias',array('fecha' => $this->input->post('fechaBorrar'),'unidad' => $this->input->post('unidadBorrar'),'ruta' => $this->input->post('rutaBorrar'),'conductor' => $this->input->post('conductorBorrar')));
	 }
	 
	 function borrarDias(){
	     $this->db->empty_table('dias');
	 }
	 
	  function borrarConductor(){
	     $this->db->delete('conductores',array('numero' => $this->input->post('conductorBorrar')));
	 }
	 
	 function borrarConductores(){
	     $this->db->empty_table('conductores');
	 }
	 
	  function borrarUnidad(){
	     $this->db->delete('unidad',array('numero' => $this->input->post('unidadBorrar')));
	 }
	 
	 function borrarUnidades(){
	     $this->db->empty_table('unidad');
	 }
	 
}
?>