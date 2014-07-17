<head>
	<meta charset="utf-8">
	<title>Unidades</title>

</head>

<div id="container">
	<h1>Unidades</h1>
   <table width="50%" border="1" align="center">
     <th>Numero</th>
      <th>Concecionario</th>
       <? foreach($this->consultar_modelo->unidades()->result() as $fila){?>
       <tr>
       <td><?=$fila->numero?></td>
       <td><?=$fila->concecionario?></td>
       </tr>
       <? }?>
   </table>
   
</div>
</body>
</html>