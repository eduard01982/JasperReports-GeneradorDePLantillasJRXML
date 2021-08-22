
<h2>GENERADOR DE PLANTILLAS JASPERREPORTS</h2>
<hr>
<form action="paso1.php" method="post">

<b>Titulo</b><br>
<input name="titulo" value="Listado de ..">
<br>
<b>Leyenda</b><br> 
<input type="checkbox" name="leyendarangodefechas"> Parametrizado por rango de fechas. 'Desde el xx/xx/xxxx hasta el yy/yy/yyyy.'<br>
<input type="checkbox" name="leyendacampos"> Parametrizado por campos. 'Con Campo = XXXXX.'
<br>
<b>Sentencia SQL</b>
Poner parametros de la forma $P{nombre_de_campo}, y rangos de fecha con $P{FECHA_DESDE} y $P{FECHA_HASTA} (Todo sin comillas)<br>
<textarea name="sql" rows="10" cols="100">SELECT * FROM dbo."TABLA" WHERE FECHA >= $P{FECHA_DESDE} AND FECHA <= $P{FECHA_HASTA} ORDER BY  $P{nombre_del_campo}</textarea>
<BR><br>
<table>
    <tr><th colspan=3></th><th>Parametro de tipo no fecha</th></tr>
    <tr><th>Campo 01</th><td><input name="campo1" value=""></td><td><select name="tipo1"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro1"></td></tr>
    <tr><th>Campo 02</th><td><input name="campo2" value=""></td><td><select name="tipo2"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro2"></td></tr>
    <tr><th>Campo 03</th><td><input name="campo3" value=""></td><td><select name="tipo3"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro3"></td></tr>
    <tr><th>Campo 04</th><td><input name="campo4" value=""></td><td><select name="tipo4"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro4"></td></tr>
    <tr><th>Campo 05</th><td><input name="campo5" value=""></td><td><select name="tipo5"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro5"></td></tr>
    <tr><th>Campo 06</th><td><input name="campo6" value=""></td><td><select name="tipo6"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro6"></td></tr>
    <tr><th>Campo 07</th><td><input name="campo7" value=""></td><td><select name="tipo7"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro7"></td></tr>
    <tr><th>Campo 08</th><td><input name="campo8" value=""></td><td><select name="tipo8"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro8"></td></tr>
    <tr><th>Campo 09</th><td><input name="campo9" value=""></td><td><select name="tipo9"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro9"></td></tr>
    <tr><th>Campo 10</th><td><input name="campo10" value=""></td><td><select name="tipo10"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro10"></td></tr>
    <tr><th>Campo 11</th><td><input name="campo11" value=""></td><td><select name="tipo11"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro11"></td></tr>
    <tr><th>Campo 12</th><td><input name="campo12" value=""></td><td><select name="tipo12"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro12"></td></tr>
    <tr><th>Campo 13</th><td><input name="campo13" value=""></td><td><select name="tipo13"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro13"></td></tr>
    <tr><th>Campo 14</th><td><input name="campo14" value=""></td><td><select name="tipo14"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro14"></td></tr>
    <tr><th>Campo 15</th><td><input name="campo15" value=""></td><td><select name="tipo15"><option value="textoonumero">Texto o Numerico</option><option value="fecha">Fecha</option><option value="hora">Hora</option><option value="fechayhora">Fecha y Hora</option><option value="moneda">Moneda</option></select></td><td><input type="checkbox" name="parametro15"></td></tr>
</table>

<br><br>
<button type="submit">Siguiente</button>
</form>
