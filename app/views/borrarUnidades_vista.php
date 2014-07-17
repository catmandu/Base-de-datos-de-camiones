<head>
	<meta charset="utf-8">
	<title>Borrar unidades</title>

<script language="javascript">
function validar()
{
	
  with(document.form1){
	if(document.getElementById('uno').checked){
		
		if(unidadBorrar.value=='')
		   {
		     alert('Te faltaron campos a ingresar');
		   }
		   else{
			   
			   submit();
		   }
	}
	else{
		
		if(confirm('¿Seguro que quieres borrar todas las unidades?'))
		{
		   submit();
		}
	}
  }
  
}

function activarUno()
{
		document.getElementById('todos').checked="";
        document.getElementById('unidadBorrar').style.visibility="visible";		
}
function activarTodos()
{
		document.getElementById('uno').checked="";
		document.getElementById('unidadBorrar').style.visibility="hidden";
}
</script>
</head>

<div id="container">
	<h1>Borrar unidad</h1>
    <form name="form1" method="post">
     <input checked="checked" onchange="activarTodos();" id="todos"name="todos" type="radio"/>Borrar todas las unidades<br />
     
      <input  onchange="activarUno();" id="uno" name="uno" type="radio"/>Borrar unidad seleccionada
    <select style=" visibility:hidden; overflow:scroll;" id="unidadBorrar"  name="unidadBorrar" ><option value="0"></option>
       <? foreach($this->consultar_modelo->unidades()->result() as $fila){?>
           <option  value="<?=$fila->numero?>">
		  <?=$fila->numero?>
          </option>
	   <? }?>
       </select>
       <br />
     <input name="borrar" type="button" value="Borrar" onclick="validar();" />
     </form>
     <? if(isset($_POST['unidadBorrar'])){
		 if($_POST['unidadBorrar']>0){$this->borrar_modelo->borrarUnidad();}
		 else{$this->borrar_modelo->borrarUnidades();}
	 }?>
</div>
</body>
</html>