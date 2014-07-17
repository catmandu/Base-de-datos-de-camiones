<head>
	<meta charset="utf-8">
	<title>Registro de dias</title>

</head>
<script language="javascript" src="<?=base_url('/js/horarios.js/');?>"></script>
<script language="javascript">

function validar()
{	
	with(document.form1){
		
		  if(fecha.value=='')
		  {
           alert('hay campos sin ningun valor asignado, solo puedes dejar el campo de "otros gastos" en blanco');		 
		  } 
		  else{
			submit();
	       <? if(isset($_POST['fecha']))
		   {  
		          $this->db->trans_start();
	              $this->agregar_modelo->agregarDia();
		          $this->db->trans_complete();
				  
				   if($this->db->trans_status()===FALSE)
				   {?>
	               alert('Ocurrio un error al agregar el registro');
		           <? }#llave del if de status
		    }#llave del if post?> 		  
		  }
	}
}
</script>
<? if($this->db->count_all('unidad')<1){?>
<script language="javascript">
alert('No hay ninguna unidad, registre al menos una antes de continuar');

</script>

<? } else {
	
	 if($this->db->count_all('conductores')<1){?>
<script language="javascript">
alert('No hay ningun conductor registrado, registre al menos uno antes de continuar');

</script>
<? }else {?>

<div id="container">
	<h1>Registro de dia</h1>
    <form id="form1" name="form1" method="post">
    <table width="268" >
      <tr>
       <td width="65"><label>Fecha</label></td>
       <td width="152"><input type="date"   id="fecha" name="fecha"/></td>
      </tr> 
      <tr>
       <td><label>Unidad</label></td>
       <td>
         <select name="unidad">
           <? foreach($this->consultar_modelo->unidades()->result() as $fila){?>
           <option value="<?=$fila->numero?>"><?=$fila->numero?></option>
           <? }?>
          </select>
       </td>
      </tr>
      <tr>
       <td><label>Ruta</label></td>
       <td><select name="ruta" onchange="asignarHorarios();">
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
      </tr>
        <tr>
        <td><label>Conductor</label></td>
       <td> 
         <select name="conductor">
           <? foreach($this->consultar_modelo->conductores()->result() as $fila){?>
           <option value="<?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>">
            <?=$fila->nombre.' '.$fila->apellidoPaterno.' '.$fila->apellidoMaterno?>
            </option>
           <? }?>
          </select>
       </td>
      </tr>
        <tr>
       <td><label>Salida</label></td>
       <td><select name="salida" onchange="asignarHorarios();">
         <option>100%</option>
         <option>80%</option>
         <option>50%</option>
       </select></td>
      </tr>
        <tr>
       <td><label>F</label></td>
       <td><select name="f">
             <option selected="selected">-nada-</option>
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
      </tr>
        <tr>
       <td><label>M/V</label></td>
       <td><select name="mv" >
             <option selected="selected">-nada-</option>
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
      </tr>
       <tr>
       <td></td>
       <td></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="registro" type="button" onclick="validar();" value="Registrar" /></td>
      </tr>
    </table>
    </form>
     
</div>
<? }}?>
</body>
</html>