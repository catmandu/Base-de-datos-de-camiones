<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bd extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->load->view('header');		
		$this->load->view('registroUnidad_vista');
	}
	
	public function registrarUnidad()
	{
		$this->load->view('header');		
		$this->load->view('registroUnidad_vista');
	}
	
	public function registrarConductor()
	{
		$this->load->view('header');		
		$this->load->view('registroConductor_vista');
	}
	
	public function registrarDia()
	{
		$this->load->view('header');		
		$this->load->view('registroDia_vista');
	}
	public function registrarUtilidades()
	{
		$this->load->view('header');		
		$this->load->view('registroUtilidades_vista');
	}
	
	public function menuConsultas()
	{
		$this->load->view('header');		
		$this->load->view('menuConsultas_vista');
	}
	
	public function menuBorrar()
	{
		$this->load->view('header');		
		$this->load->view('menuBorrar_vista');
	}
	
	public function menuEditar()
	{
		$this->load->view('header');		
		$this->load->view('menuEditar_vista');
	}
	
     public function mostrarUnidades()
	 {
		 $this->load->view('header');
		 $this->load->view('mostrarUnidades_vista');
	 }
	 
	 public function mostrarConductores()
	 {
		 $this->load->view('header');
		 $this->load->view('mostrarConductores_vista');
	 }
	 
	 public function mostrarDias()
	 {
		 $this->load->view('header');
		 $this->load->view('mostrarDias_vista');
	 }
	 
	 public function editarDias()
	 {
		 $this->load->view('header');
		 $this->load->view('editarDias_vista');
	 }
	 
	  public function borrarUnidades()
	 {
		 $this->load->view('header');
		 $this->load->view('borrarUnidades_vista');
	 }
	 
	 public function borrarConductores()
	 {
		 $this->load->view('header');
		 $this->load->view('borrarConductores_vista');
	 }
	 
	 public function borrarDias()
	 {
		 $this->load->view('header');
		 $this->load->view('borrarDias_vista');
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */