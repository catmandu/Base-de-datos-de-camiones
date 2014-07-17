<head>
	<meta charset="utf-8">
	<title>Dias</title>

</head>

<script language="javascript">
 
 function activarDesactivar(id){
        document.getElementById('fechaConsulta').style.visibility="hidden";
		document.getElementById('unidadConsulta').style.visibility="hidden";
	    document.getElementById('rutaConsulta').style.visibility="hidden";
	    document.getElementById('conductorConsulta').style.visibility="hidden";
		document.getElementById('salidaConsulta').style.visibility="hidden";
		document.getElementById('mvConsulta').style.visibility="hidden";
		document.getElementById('fConsulta').style.visibility="hidden";
   with(document.form1){
     radio.checked="false";    
   }
   document.getElementById(id).checked="checked";
   
   switch(id){
	   case "radioFecha":
	    document.getElementById('fechaConsulta').style.visibility="visible";
	   break;
	    case "radioUnidad":
		 document.getElementById('unidadConsulta').style.visibility="visible";
	   break;
	    case "radioRuta":
		 document.getElementById('rutaConsulta').style.visibility="visible";
	   break;
	   case "radioSalida":
		 document.getElementById('salidaConsulta').style.visibility="visible";
	   break;
	    case "radioConductor":
		 document.getElementById('conductorConsulta').style.visibility="visible";
	   break;
	   case "radioF":
		 document.getElementById('fConsulta').style.visibility="visible";
	   break;
       case "radioMV":
		 document.getElementById('mvConsulta').style.visibility="visible";
	   break;
	   }
 }
 
 function enviar(id){
	 if(document.getElementById(id).value!='')
	 document.form1.submit();
	 else
	 alert('Esta vacio');
 }
</script>

<div id="container">
    <h1>Dias</h1>
    <form name="form1" method="post">
    <input type="radio" onchange="enviar(id);" onclick="activarDesactivar(id);" name="radio" id="radioTodos" />Mostrar todos <br />
    
    <input type="radio" name="radio" id="radioFecha" onclick="activarDesactivar(id);"  on />Mostrar por fecha <select style="visibility:hidden; overflow:scroll" name="fechaConsulta" id="fechaConsulta" onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->fecha()->result() as $fila){?>
          <option value="<?=$fila->fecha?>"><?=$fila->fecha?></option>
	   <? }?>
       </select> <br />
     <input type="radio" name="radio" id="radioUnidad" onclick="activarDesactivar(id);"  />Mostrar por unidad  <select style="visibility:hidden; overflow:scroll" name="unidadConsulta" id="unidadConsulta" onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->unidades()->result() as $fila){?>
          <option value="<?=$fila->numero?>"><?=$fila->numero?></option>
	   <? }?>
       </select><br />
       
        <input type="radio" name="radio" id="radioRuta" onclick="activarDesactivar(id);"  />Mostrar por ruta <select style="visibility:hidden; overflow:scroll" name="rutaConsulta" id="rutaConsulta" onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->ruta()->result() as $fila){?>
           <option value="<?=$fila->ruta?>">
		  <?=$fila->ruta?>
          </option>
	   <? }?>   
    </select> <br />
       
    <input type="radio" name="radio" id="radioConductor" onclick="activarDesactivar(id);"  on />Mostrar por conductor <select style="visibility:hidden" name="conductorConsulta" id="conductorConsulta" onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->conductores()->result() as $fila){?>
           <option value="<?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>">
		  <?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>
          </option>
	   <? }?>
       </select> <br />
       
        <input type="radio" name="radio" id="radioSalida" onclick="activarDesactivar(id);"  />Mostrar por salida<select style="visibility:hidden; overflow:scroll" name="salidaConsulta" id="salidaConsulta" onchange="enviar(id);"><option></option>
       <option>100%</option>
       <option>80%</option>
       <option>50%</option>
       </select> <br/>
       
       <input type="radio" name="radio" id="radioF" onclick="activarDesactivar(id);"  />Mostrar por horario F
       <select  name="fConsulta" style="visibility:hidden; overflow:scroll"id="fConsulta" onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->f()->result() as $fila){?>
           <option value="<?=$fila->f?>">
		  <?=$fila->f?>
          </option>
	   <? }?>
       </select> <br />
       
        <input type="radio" name="radio" id="radioMV" onclick="activarDesactivar(id);"  />Mostrar por horario M/V
       <select  name="mvConsulta" style="visibility:hidden; overflow:scroll"id="mvConsulta" onchange="enviar(id);"><option></option>
       <? foreach($this->consultar_modelo->mv()->result() as $fila){?>
           <option value="<?=$fila->mv?>">
		  <?=$fila->mv?>
          </option>
	   <? }?>
       </select> <br /><br/>
       
       </form>
    <? $consulta=$this->consultar_modelo->dias();
   
   if(isset($_POST['fechaConsulta']))
   {
	   if($_POST['fechaConsulta']!=''){$consulta=$this->consultar_modelo->buscarDiaFecha();}
	   if($_POST['unidadConsulta']!=''){$consulta=$this->consultar_modelo->buscarDiaUnidad();}
	   if($_POST['rutaConsulta']!=''){$consulta=$this->consultar_modelo->buscarDiaRuta();}
	   if($_POST['conductorConsulta']!=''){$consulta=$this->consultar_modelo->buscarDiaConductor();}
	   if($_POST['salidaConsulta']!=''){$consulta=$this->consultar_modelo->buscarDiaSalida();}
	   if($_POST['fConsulta']!=''){$consulta=$this->consultar_modelo->buscarDiaF();}
	   if($_POST['mvConsulta']!=''){$consulta=$this->consultar_modelo->buscarDiaMV();}?>

   <table width="100%" border="1" align="center">
     <th>Fecha</th>
      <th>Unidad</th>
       <th>Ruta</th>
        <th>Conductor</th>
         <th>Salida</th>
          <th>F</th>
            <th>M/V</th>
              <th>Lectura inicial</th>
               <th>Lectura final</th>
                <th>Estudiantes</th>
                 <th>Diesel</th>
                  <th>Sueldo</th>
                   <th>Otros gastos</th>
                    <th>Especificacion</th>
                     <th>UB</th>
                      <th>UN</th>
       <? foreach($consulta->result() as $fila){?>
       <tr>
       <td><?=$fila->fecha?></td>
       <td><?=$fila->unidad?></td>
       <td><?=$fila->ruta?></td>
       <td><?=$fila->conductor?></td>
       <td><?=$fila->salida?></td>
        <td><?=$fila->f?></td>
       <td><?=$fila->mv?></td>
       <td><?=$fila->lectura_inicial?></td>
       <td><?=$fila->lectura_final?></td>
       <td><?=$fila->estudiantes?></td>
       <td><?=$fila->diesel?></td>
       <td><?=$fila->sueldo?></td>
       <td><?=$fila->otros_gastos?></td>
       <td><?=$fila->especificacion?></td>
       <td><?=$fila->ub?></td>
       <td><?=$fila->un?></td>
       </tr>
       <? }?>
   </table>
     <? }?>
</div>
</body>
</html>