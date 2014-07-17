<head>
	<meta charset="utf-8">
	<title>Borrar conductores</title>

<script language="javascript">
function validar()
{
	
  with(document.form1){
	if(document.getElementById('uno').checked){
		
		if(conductorBorrar.value=='')
		   {
		     alert('Te faltaron campos a ingresar');
		   }
		   else{
			   
			   submit();
		   }
	}
	else{
		
		if(confirm('¿Seguro que quieres borrar todos los conductores?'))
		{
		   submit();
		}
	}
  }
  
}

function activarUno()
{
		document.getElementById('todos').checked="";
        document.getElementById('conductorBorrar').style.visibility="visible";		
}
function activarTodos()
{
		document.getElementById('uno').checked="";
		document.getElementById('conductorBorrar').style.visibility="hidden";
}
</script>
</head>

<div id="container">
	<h1>Borrar conductor</h1>
    <form name="form1" method="post">
     <input checked="checked" onchange="activarTodos();" id="todos"name="todos" type="radio"/>Borrar todos los conductores <br />
     
      <input  onchange="activarUno();" id="uno" name="uno" type="radio"/>Borrar conductor seleccionado
    <select style=" visibility:hidden; overflow:scroll;" id="conductorBorrar"  name="conductorBorrar" ><option value="0"></option>
       <? foreach($this->consultar_modelo->conductores()->result() as $fila){?>
           <option  value="<?=$fila->numero?>">
		  <?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>
          </option>
	   <? }?>
       </select>
       <br />
     <input name="borrar" type="button" value="Borrar" onclick="validar();" />
     </form>
     <? if(isset($_POST['conductorBorrar'])){
		 if($_POST['conductorBorrar']>0)
	    $this->borrar_modelo->borrarConductor();
		else
		$this->borrar_modelo->borrarConductores();
		
	 }?>
</div>
</body>
</html>