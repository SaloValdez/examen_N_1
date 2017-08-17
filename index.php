<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  img {

      height: 80px;
      width: 190px;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
img:hover {
  height: 100px;
  width: 170px;
}
  </style>
  <body>
    <br>
      <center>  <a href="reporte_datos.php"><img src="img/pdf.png"  height="50px" width="100px" alt=""></a>  </center>
    <br>

    <br>

    <center><h3>REGISTRO DE NOTAS</h3></center>
    <form name="modifica" method="POST" action="insertar_datos.php" >
		<table align="center">

			<tr>
				<td height="60"><b>NOMBRE</b></div></td>
		 <td><input type="txt" name="nombre"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
			</tr>
		<tr>
			 <td height="52"><b>APELLIDO</b></td>
			 <td><input type="txt"name="apellido"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
		 </tr>
     <tr>
 			 <td height="52"><b>NOTA1</b></td>
 			 <td><input type="txt"name="nota1"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>
     <tr>
 			 <td height="52"><b>NOTA2</b></td>
 			 <td><input type="txt"name="nota2"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>
     <tr>
        <td height="52"><b>NOTA3</b></td>
        <td><input type="txt"name="nota3"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
      <tr>
        <td height="52"><b>NOTA4</b></td>
        <td><input type="txt"name="nota4"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>

	 <tr>
		 <tr>
		 <td height="48" colspan="2"><center><input class="boton" type="submit" name="guardar" value="Guardar"/></center></td>
		 </tr>
		</table>
		</form>










  </body>
</html>
