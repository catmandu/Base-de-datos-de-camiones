<?
class Agregar_modelo extends CI_Model
{
	  function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	 function agregarUnidad()
    {
	   $datos= array(
        'numero' => $this->input->post('numeroUnidad') ,
        'concecionario' => $this->input->post('concecionario'));
	   $this->db->insert('unidad',$datos);
    }
	
	function agregarConductor()
    {
		$numero_id=$this->db->count_all('conductores');
		
	   $datos= array(
	    'numero' => $numero_id+1,
        'nombre' => $this->input->post('nombre') ,
        'apellidoPaterno' => $this->input->post('apellidoP'),
		'apellidoMaterno' => $this->input->post('apellidoM') );
	   $this->db->insert('conductores',$datos);
    }
	
	function agregarDia()
	{
		 $datos= array(
	    'fecha' =>  $this->input->post('fecha') ,
        'unidad' => $this->input->post('unidad') ,
        'ruta' => $this->input->post('ruta'),
		'conductor' => $this->input->post('conductor') ,
		'salida' =>  $this->input->post('salida') ,
		'f' =>  $this->input->post('f') ,
        'mv' => $this->input->post('mv'));
		
		 $this->db->insert('dias',$datos);
	}
	function agregarUtilidad()
	{
		 $datos= array(
        'lectura_inicial' => $this->input->post('lecturaInicial') ,
        'lectura_final' => $this->input->post('lecturaFinal'),
		'estudiantes' => $this->input->post('estudiantes'),
		'diesel' =>  $this->input->post('diesel') ,
        'otros_gastos' => $this->input->post('otrosG') ,
        'especificacion' => $this->input->post('especificacion'),
		'sueldo' => $this->input->post('sueldo') ,
		'UB' =>  $this->input->post('utilidadB') ,
        'UN' => $this->input->post('utilidadN'));
		
		$condicion = array('fecha' => $this->input->post('fechaUtilidad'), 'unidad' => $this->input->post('unidadUtilidad'),'conductor' => $this->input->post('conductorUtilidad'),'lectura_inicial'=>NULL);
		
		$this->db->where($condicion);
		$this->db->update('dias',$datos);
	}
	
	function actualizarDiaUtilidad()
	{
		 $datos= array(
		'fecha' =>  $this->input->post('fechaEditar') ,
        'unidad' => $this->input->post('unidadEditar') ,
        'ruta' => $this->input->post('rutaEditar'),
		'conductor' => $this->input->post('conductorEditar') ,
		'salida' =>  $this->input->post('salidaEditar') ,
		'f' =>  $this->input->post('fEditar') ,
        'mv' => $this->input->post('mvEditar'),
        'lectura_inicial' => $this->input->post('lecturaInicialEditar') ,
        'lectura_final' => $this->input->post('lecturaFinalEditar'),
		'estudiantes' => $this->input->post('estudiantesEditar'),
		'diesel' =>  $this->input->post('dieselEditar') ,
        'otros_gastos' => $this->input->post('otrosGeditar'),
        'especificacion' => $this->input->post('especificacionEditar'),
		'sueldo' => $this->input->post('sueldoEditar') ,
		'UB' =>  $this->input->post('utilidadBeditar') ,
        'UN' => $this->input->post('utilidadNeditar'));
		
		$condicion = array('fecha' => $this->input->post('fechaEditar1'), 'unidad' => $this->input->post('unidadEditar1'),'ruta' => $this->input->post('rutaEditar1'),'conductor' => $this->input->post('conductorEditar1'));
		
		$this->db->where($condicion);
		$this->db->update('dias',$datos);
	}
}
?>