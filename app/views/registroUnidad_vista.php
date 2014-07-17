<head>
	<meta charset="utf-8">
	<title>Registro de unidades</title>

</head>

<script language="javascript">
function validar()
{
with(document.form1){
	if(numeroUnidad.value==''){
		document.getElementById('alerta').style.visibility="visible";
	}
	else{
		if(isNaN(numeroUnidad.value))
		{
			alert('Solo puedes ingresar numeros en "numero de unidad"');
		}
		else{
		document.getElementById('alerta').style.visibility="hidden";
	  if(concecionario.value==''){
		  
		  document.getElementById('alerta2').style.visibility="visible";
	  }
	  else{
		  
        submit();
		<? if(isset($_POST['numeroUnidad'])){
		$this->db->trans_start();
	    $this->agregar_modelo->agregarUnidad();
		$this->db->trans_complete();
	   }?>
	   <? if($this->db->trans_status()===FALSE){?>
	    alert('Ocurrio un error al agregar la unidad');
		<? }?>
	  }
     }
	}
  }   
}
</script>


<div id="container">
	<h1>Registro de unidad</h1>
    <form id="form1" name="form1" method="post">
    <table>
      <tr>
       <td><label>Ingresa el numero de unidad </label></td>
       <td><input id="numeroUnidad" name="numeroUnidad"></td>
       <td><label id="alerta" style="visibility:hidden; color:#F00">Debes ingresar este campo</label></td>
      </tr> 
      <tr>
       <td><label>Ingresa el concecionario </label></td>
       <td><input name="concecionario"></td>
       <td><label id="alerta2" style="visibility:hidden; color:#F00">Debes ingresar este campo</label></td>
      </tr>
      <tr>
        <td></td>
        <td><button onClick="validar();" type="button">Registrar</button></td>
      </tr>
    </table>
    </form>
     
</div>
</body>
</html>