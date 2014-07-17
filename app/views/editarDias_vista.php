<head>
	<meta charset="utf-8">
	<title>Editar dias</title>

</head>

<script language="javascript">
 window.onload=login;
 
 function login(){
 
    if(prompt("ingresa la contraseña")!='1234')
	{
		document.getElementById('container').style.visibility="hidden";
		alert('contraseña incorrecta');
		login();
	}
	else
	{
		document.getElementById('container').style.visibility="visible";
	}
 }
 function validar(){
	 with(document.form1)
	 {
		 if(fechaBuscar.value!=''&&
		    unidadBuscar.value!=''&&
			rutaBuscar.value!=''&&
			conductorBuscar.value!=''){
		      submit();		
		 }
	 } 
 }
 function calcular(id){
		
		with(document.form2){
		utilidadBeditar.value=((parseFloat(lecturaFinalEditar.value)-parseFloat(lecturaInicialEditar.value))-parseFloat(estudiantesEditar.value))*6;
        utilidadNeditar.value=parseFloat(utilidadBeditar.value)-(parseFloat(dieselEditar.value)+parseFloat(sueldoEditar.value)+parseFloat(otrosGeditar.value));
		}
}

function borrar(id){
	document.getElementById(id).value='';
}
 
 function enviarEdicion(){
	 if(document.form2.otrosGeditar.value>0){
	     if(document.form2.especificacionEditar.value!=''){
			 document.form2.submit();
	     }
		 else{
			 alert('debes ingresar una especificacion para otros gastos');
		 }
	 }
	 else{
		 document.form2.submit();
	 }
    
 }
</script>


<div id="container" style="visibility:hidden;">
  <h1>Editar dias</h1>
      <form name="form1" method="post">
      <select style="overflow:scroll" name="fechaBuscar"onchange="validar();"><option selected="selected" value="<?= $this->input->post('fechaBuscar')?>"><?= $this->input->post('fechaBuscar')?></option>
       <? foreach($this->consultar_modelo->fecha()->result() as $fila){?>
          <option value="<?=$fila->fecha?>"><?=$fila->fecha?></option>
	   <? }?>
       </select> 
     <select style="overflow:scroll" name="unidadBuscar"onchange="validar();"><option selected="selected" value="<?= $this->input->post('funidadBuscar')?>"><?= $this->input->post('unidadBuscar')?></option>
       <? foreach($this->consultar_modelo->unidades()->result() as $fila){?>
          <option value="<?=$fila->numero?>"><?=$fila->numero?></option>
	   <? }?>
       </select>
       
      <select style="overflow:scroll" name="rutaBuscar" onchange="validar();"><option selected="selected" value="<?= $this->input->post('rutaBuscar')?>"><?= $this->input->post('rutaBuscar')?></option>
       <? foreach($this->consultar_modelo->ruta()->result() as $fila){?>
           <option value="<?=$fila->ruta?>">
		  <?=$fila->ruta?>
          </option>
	   <? }?>   
    </select> 
       
    <select style="overflow:scroll;" name="conductorBuscar" onchange="validar();"><option selected="selected" value="<?= $this->input->post('conductorBuscar')?>"><?= $this->input->post('conductorBuscar')?></option>
       <? foreach($this->consultar_modelo->conductores()->result() as $fila){?>
           <option value="<?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>">
		  <?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>
          </option>
	   <? }?>
       </select> 
       </form>
    <?
    if(isset($_POST['fechaEditar']))
     {
		 $this->agregar_modelo->actualizarDiaUtilidad();
		 
	 }
   if(isset($_POST['fechaBuscar']))
   {
	
	    $consulta=$this->consultar_modelo->buscarDiaEditar();
	  ?>
   <form name="form2" method="post">
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
       <td><input type="date" name="fechaEditar" value="<?=$fila->fecha?>"/></td>
       <td> <select name="unidadEditar">
           <option value="<?=$fila->unidad?>" selected="selected"><?=$fila->unidad?></option>
           <? foreach($this->consultar_modelo->unidades()->result() as $fila2){?>
           <option value="<?=$fila2->numero?>"><?=$fila2->numero?></option>
           <? }?>
         </select></td>
       <td><select name="rutaEditar">
             <option value="<?=$fila->ruta?>" selected="selected"><?=$fila->ruta?></option>
             <option>1</option>
             <option>3</option>
             <option>4</option>
             <option>5</option>
             <option>6</option>
             <option>6A</option>
             <option>7</option>
             <option>8</option>
             <option>9</option>
             <option>9A</option>
             <option>10</option>
             <option>11</option>
             <option>13</option>
             <option>13A</option>
             <option>14</option>
             <option>17</option>
             <option>19</option>
             <option>20</option>
             <option>21</option>
             <option>22</option>
             <option>24</option>
             <option>24A</option>
             <option>27</option>
             <option>27A</option>
             <option>28</option>
             <option>29</option>
             <option>CA-ISAC</option>
           </select></td>
       <td><select name="conductorEditar">
           <option value="<?=$fila->conductor?>" selected="selected"><?=$fila->conductor?></option>
           <? foreach($this->consultar_modelo->conductores()->result() as $fila2){?>
           <option value="<?=$fila2->nombre.' '.$fila2->apellidoPaterno.' '.$fila2->apellidoMaterno?>">
            <?=$fila2->nombre.' '.$fila2->apellidoPaterno.' '.$fila2->apellidoMaterno?>
            </option>
           <? }?>
         </select></td>
       <td><select name="salidaEditar" >
         <option value="<?=$fila->salida?>" selected="selected"><?=$fila->salida?></option>
         <option>100%</option>
         <option>80%</option>
         <option>50%</option>
       </select></td>
        <td><select name="fEditar">
             <option value="<?=$fila->f?>" selected="selected"><?=$fila->f?></option>
            <option>-nada-</option>
             <option>1a</option>
             <option>2a</option>
             <option>3a</option>
             <option>4a</option>
             <option>5a</option>
             <option>6a</option>
             <option>7a</option>
             <option>8a</option>
             <option>9a</option>
             <option>10a</option>
             <option>11a</option>
             <option>12a</option>
             <option>13a</option>
             <option>14a</option>
         </select></td>
       <td><select name="mvEditar">
            <option value="<?=$fila->mv?>" selected="selected"><?=$fila->mv?></option>
             <option>-nada-</option>
             <option>1aM</option>
             <option>2aM</option>
             <option>3aM</option>
             <option>4aM</option>
             <option>5aM</option>
             <option>6aM</option>
             <option>7aM</option>
             <option>8aM</option>
             <option>9aM</option>
             <option>10aM</option>
             <option>11aM</option>
             <option>12aM</option>
             <option>1aV</option>
             <option>2aV</option>
             <option>3aV</option>
             <option>4aV</option>
             <option>5aV</option>
             <option>6aV</option>
             <option>7aV</option>
             <option>8aV</option>
             <option>9aV</option>
             <option>10aV</option>
             <option>11aV</option>
             <option>12aV</option>
         </select></td>
       <td><input onchange="calcular(id);" onfocus="borrar(id);" name="lecturaInicialEditar" id="lecturaInicialEditar"value="<?=$fila->lectura_inicial?>"/></td>
       <td><input onchange="calcular(id);" onfocus="borrar(id);" name="lecturaFinalEditar" id="lecturaFinalEditar" value="<?=$fila->lectura_final?>"/></td>
       <td><input onchange="calcular(id);" onfocus="borrar(id);" name="estudiantesEditar" id="estudiantesEditar" value="<?=$fila->estudiantes?>"/></td>
       <td><input onchange="calcular(id);" onfocus="borrar(id);" name="dieselEditar" id="dieselEditar" value="<?=$fila->diesel?>"/></td>
       <td><input onchange="calcular(id);" onfocus="borrar(id);" name="sueldoEditar" id="sueldoEditar" value="<?=$fila->sueldo?>"/></td>
       <td><input onchange="calcular(id);" onfocus="borrar(id);" name="otrosGeditar" id="otrosGeditar" value="<?=$fila->otros_gastos?>"/></td>
       <td><input name="especificacionEditar" value="<?=$fila->especificacion?>"/></td>
       <td><input readonly="readonly" name="utilidadBeditar" value="<?=$fila->ub?>"/></td>
       <td><input readonly="readonly" name="utilidadNeditar" value="<?=$fila->un?>"/></td>
       </tr>
       <div style="visibility:hidden;">
       <input name="fechaEditar1" value="<?=$fila->fecha?>"/>
       <input name="unidadEditar1" value="<?=$fila->unidad?>"/>
       <input name="rutaEditar1" value="<?=$fila->ruta?>"/>
       <input name="conductorEditar1" value="<?=$fila->conductor?>"/>
   </div>
       <? }?>
      
   </table>
   <br />
   <input type="button" value="Editar" onclick="enviarEdicion();" />
   </form>
   
     <? }?>
</div>
</body>
</html>