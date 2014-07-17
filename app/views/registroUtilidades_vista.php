<head>
	<meta charset="utf-8">
	<title>Registro de utilidades</title>

</head>
<script language="javascript" src="<?=base_url('/js/horarios.js/');?>"></script>
<script language="javascript">
function validar()
{	
  with(document.form1)
  {	if(fechaUtilidad.value=='-selecciona-'||
		    unidadUtilidad.value=='-selecciona-'||
			 conductorUtilidad.value=='-selecciona-')
	   {
		        alert('debes ingresar fecha, unidad y conductor');	 
	   }
	   else
	   {
		 if(otrosG.value>0&&especificacion.value==''){
		   alert('Debes ingresar una especificacion para "otros gastos"');
		}
		else
		{
		
		  if(lecturaInicial.value==''||lecturaFinal.value==''||estudiantes.value==''||diesel.value==''||sueldo.value=='')
		  {
           alert('hay campos sin ningun valor asignado, solo puedes dejar el campo de "otros gastos" en blanco');		 
		  } 
		  else{
			submit();
	       <? if(isset($_POST['lecturaInicial']))
		   {  
		       if($this->consultar_modelo->buscarDiaUtilidad()->num_rows()<0){
				   ?>
	               alert('Dia no registrado');
		           <?
			   }
			   else{
		          $this->db->trans_start();
	              $this->agregar_modelo->agregarUtilidad();
		          $this->db->trans_complete();
				  
				   if($this->db->trans_status()===FALSE)
				   {?>
	               alert('Ocurrio un error al agregar el registro');
		           <? }#llave del if de status
			   }#llave del else de num_rows
		    }#llave del if post?> 		  
	           
		  }
	    }
	  }
	}
}


function calcular(id){
		if(id=='otrosG'){
			if(document.getElementById(id).value<=0|| isNaN(document.getElementById(id).value)){
			   document.getElementById('esL').style.visibility="hidden";
			   document.form1.especificacion.style.visibility="hidden";
			}
			else{
				document.getElementById('esL').style.visibility="visible";
			   document.form1.especificacion.style.visibility="visible";
			}
		}
		with(document.form1){
		utilidadB.value=((parseFloat(lecturaFinal.value)-parseFloat(lecturaInicial.value))-parseFloat(estudiantes.value))*6;
        utilidadN.value=parseFloat(utilidadB.value)-(parseFloat(diesel.value)+parseFloat(sueldo.value)+parseFloat(otrosG.value));
		}
}

function borrar(id){
	document.getElementById(id).value='';
}
</script>
<? if($this->db->count_all('dias')<1){?>
<script language="javascript">
alert('No hay ningun dia registrado, registre al menos uno antes de continuar');
</script>

<? }else {?>
      <br />
<div id="container" >
	<h1>Registro de utilidad</h1>
    <form id="form1" name="form1" method="post">
    <select style="overflow:scroll" name="fechaUtilidad" onchange="enviarConsulta();"><option value="-selecciona-">-selecciona-</option>
       <? foreach($this->consultar_modelo->fecha()->result() as $fila){?>
          <option value="<?=$fila->fecha?>"><?=$fila->fecha?></option>
	   <? }?>
       </select>
       
        <select style="overflow:scroll" name="unidadUtilidad"  onchange="enviarConsulta();"><option value="-selecciona-">-selecciona-</option>
       <? foreach($this->consultar_modelo->unidades()->result() as $fila){?>
          <option value="<?=$fila->numero?>"><?=$fila->numero?></option>
	   <? }?>
       </select> 
       
    <select style="overflow:scroll; "  name="conductorUtilidad" onchange="enviarConsulta();" ><option value="-selecciona-">-selecciona-</option>
       <? foreach($this->consultar_modelo->conductores()->result() as $fila){?>
           <option value="<?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>">
		  <?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>
          </option>
	   <? }?>
       </select> <br /> <br />
    <table >
      <tr>
       <td width="83"><label>Lectura inicial</label></td>
       <td width="144"><input value="0"  onchange="calcular(id);" onfocus="borrar(id);" id="lecturaInicial" name="lecturaInicial"/></td>
        <td width="86"></td>
      </tr> 
      <tr>
       <td><label>Lectura final</label></td>
       <td><input value="0" onchange="calcular(id);" onfocus="borrar(id);" id="lecturaFinal" name="lecturaFinal"/></td>
        <td></td>
      </tr>
      <tr>
       <td><label>Estudiantes</label></td>
       <td><input value="0" onchange="calcular(id);" onfocus="borrar(id);" id="estudiantes" name="estudiantes"/></td>
        <td></td>
      </tr>
        <tr>
        <td><label>Diesel</label></td>
       <td><input value="0"  onchange="calcular(id);" onfocus="borrar(id);" id="diesel" name="diesel"/></td>
        <td></td>
      </tr>
        <tr>
       <td><label>Sueldo</label></td>
       <td><input value="0" onchange="calcular(id);" onfocus="borrar(id);" id="sueldo" name="sueldo" /></td>
        <td></td>
      </tr>
        <tr>
       <td><label>Otros gastos</label></td>
       <td><input value="0" onchange="calcular(id);" onfocus="borrar(id);" id="otrosG" name="otrosG" /></td>
         <td><label style="visibility:hidden" id="esL">Especificacion</label></td>
       <td width="161"><textarea style="visibility:hidden" name="especificacion"></textarea></td>
      </tr>
        <tr>
       <td><label>UB</label></td>
       <td><input readonly="readonly" value="0" id="utilidadB" name="utilidadB"></td>
      </tr>
       <tr>
       <td><label>UN</label></td>
       <td><input readonly="readonly"  value="0" id="utilidadN" name="utilidadN"></td>
      </tr>
      <tr>
        <td></td>
        <td><button onClick="validar();" type="button">Registrar</button></td>
      </tr>
    </table>
    </form>
</div>
<? }?>
</body>
</html>