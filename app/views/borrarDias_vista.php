<head>
	<meta charset="utf-8">
	<title>Borrar dias</title>

</head>

<script language="javascript">


function validar()
{
	
  with(document.form1){
	
	if(document.getElementById('uno').checked){
		
		if(fechaBorrar.value==''||
		   unidadBorrar.value==''||
		   rutaBorrar.value==''||
		   conductorBorrar.value=='')
		   {
		     alert('Te faltaron campos a ingresar');
		   }
		   else{
			   submit();
		   }
	}
	else{
		if(confirm('¿Seguro que quieres borrar todos los registros?'))
		{
		   submit();
		}
	}
  }
}

function activarUno()
{
		document.getElementById('todos').checked="";
        document.getElementById('campos').style.visibility="visible";		
}
function activarTodos()
{
		document.getElementById('uno').checked="";
		document.getElementById('campos').style.visibility="hidden";
}
</script>

<div id="container">
	<h1>Borrar dias</h1>
    <form name="form1" method="post">
     <input checked="checked" onchange="activarTodos();" id="todos"name="todos" type="radio"/>Borrar todos los registros <br />
     
      <input  onchange="activarUno();" id="uno" name="uno" type="radio"/>Borrar campo seleccionado
      <div id="campos" style="visibility:hidden;">
       <select style="overflow:scroll" name="fechaBorrar"  onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->fecha()->result() as $fila){?>
          <option value="<?=$fila->fecha?>"><?=$fila->fecha?></option>
	   <? }?>

       </select>
       
        <select style="overflow:scroll" name="unidadBorrar"  onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->unidades()->result() as $fila){?>
          <option value="<?=$fila->numero?>"><?=$fila->numero?></option>
	   <? }?>
       </select> 
       <select style="overflow:scroll" name="rutaBorrar"  onchange="enviar(id);"><option></option>
      <? foreach($this->consultar_modelo->ruta()->result() as $fila){?>
           <option value="<?=$fila->ruta?>">
		  <?=$fila->ruta?>
          </option>
	   <? }?>        
    </select> 
       
    <select style="overflow:scroll; "  name="conductorBorrar" ><option></option>
       <? foreach($this->consultar_modelo->conductores()->result() as $fila){?>
           <option value="<?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>">
		  <?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>
          </option>
	   <? }?>
       </select>
      </div>
      <br />
      <input onclick="validar();" id="borrar" value="Borrar" type="button" /> 
      
     </form>
     
     <? if(isset($_POST['fechaBorrar'])){
         if($_POST['fechaBorrar']!=''&&$_POST['unidadBorrar']!=''&&$_POST['rutaBorrar']!=''&&$_POST['conductorBorrar']!='')
		 $this->borrar_modelo->borrarDia();
		 else
		 $this->borrar_modelo->borrarDias();
      }?>

</div>
</body>
</html>
