<head>
	<meta charset="utf-8">
	<title>Conductores</title>

</head>

<div id="container">
	<h1>Conductores</h1>
   <table width="50%" border="1" align="center">
     <th>Numero</th>
      <th>Nombre(s)</th>
       <th>Apellido paterno</th>
        <th>Apellido materno</th>
       <? foreach($this->consultar_modelo->conductores()->result() as $fila){?>
       <tr>
       <td><?=$fila->numero?></td>
       <td><?=$fila->nombre?></td>
       <td><?=$fila->apellidoPaterno?></td>
        <td><?=$fila->apellidoMaterno?></td>
       </tr>
       <? }?>
   </table>
     
</div>
</body>
</html>