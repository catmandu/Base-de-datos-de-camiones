<!DOCTYPE html>
<html lang="en">

	<style type="text/css">

		body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	th{
		background-color:#F90;
		color:#000;
	}

     td{
		 text-align:center;
		 
	 }
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		border-bottom:none;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
    <body>
    <table  border="1" width="800px">
      <tr>
      <td><a href="<?=site_url("/bd/registrarUnidad/");?>" >Registrar unidad  </a></td> 
      <td><a href="<?=site_url("/bd/registrarConductor/");?>" >  Registrar conductor</a></td>
      <td><a href="<?=site_url("/bd/registrarDia/");?>" >  Registrar d&iacute;a</a></td>
       <td><a href="<?=site_url("/bd/registrarUtilidades/");?>" >  Registrar utilidades</a></td>
      <td><a href="<?=site_url("/bd/menuConsultas/");?>" >  Consultar datos</a></td>
      <td><a href="<?=site_url("/bd/editarDias/");?>" >Editar dias</a></td>
      <td><a href="<?=site_url("/bd/menuBorrar/");?>" >  Borrar datos</a></td>
      </tr>
    </table>