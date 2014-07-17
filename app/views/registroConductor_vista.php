<head>
	<meta charset="utf-8">
	<title>Registro de conductores</title>

</head>

<script language="javascript">
function validar()
{
	if(document.form1.nombre.value==''){
		document.getElementById('alerta').style.visibility="visible";
		
	}
	else{
		document.getElementById('alerta').style.visibility="hidden";
	  if(document.form1.apellidoP.value==''){
		  
		  document.getElementById('alerta2').style.visibility="visible";
	  }
	  else{
		  document.getElementById('alerta2').style.visibility="hidden";
		  if(document.form1.apellidoM.value==''){
		  
		  document.getElementById('alerta3').style.visibility="visible";
	     }
		 else{
		 
		document.form1.submit();
		<? if(isset($_POST['nombre'])){
		$this->db->trans_start();
	    $this->agregar_modelo->agregarConductor();
		$this->db->trans_complete();
		} 
		
		if($this->db->trans_status()===FALSE){?>
	    alert('Ocurrio un error al agregar al conductor');
		<? } ?>
		 }
	  }
	}
	
}
</script>


<div id="container">
	<h1>Registro de conductor</h1>
    <form id="form1" name="form1" method="post">
    <table>
      <tr>
       <td><label>Nombre(s)</label></td>
       <td><input id="nombre" name="nombre"></td>
       <td><label id="alerta" style="visibility:hidden; color:#F00">Debes ingresar este campo</label></td>
      </tr> 
      <tr>
       <td><label>Apellido paterno</label></td>
       <td><input name="apellidoP"></td>
       <td><label id="alerta2" style="visibility:hidden; color:#F00">Debes ingresar este campo</label></td>
      </tr>
      <tr>
       <td><label>Apellido materno</label></td>
       <td><input name="apellidoM"></td>
        <td><label id="alerta3" style="visibility:hidden; color:#F00">Debes ingresar este campo</label></td>
      <tr>
        <td></td>
        <td><button onClick="validar();" type="button">Registrar</button></td>
      </tr>
    </table>
    </form>
     
</div>
</body>
</html>