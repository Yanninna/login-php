<!DOCTYPE html>
<html>
<head>
 <title>Ejemplo de JavaScript</title>
 <meta charset="UTF-8">
 
</head>
<script language="JavaScript">
<!--
alert("Bienvenido a la Autoevaluación  \n\nSeleccione las respuestas que creas correctas, teniendo en "+
      "\ncuenta las siguientes consideraciones \n\n1. Los aciertos tienen el valor de un punto"+
	  " \n\n2. Las respuestas no contestadas ni suman ni restan puntos.") 
//-->
 
var resp = new Array;
var faite = new Array;
var score = 0;
 
resp[1] = "a";
resp[2] = "b";
resp[3] = "c";
resp[4] = "b";
resp[5] = "c";
resp[6] = "c";
resp[7] = "b";
resp[8] = "c";
resp[9] = "b";
resp[10] = "a";
 
function Engine(question, repose)
{
   if (repose != resp[question])
	 {
             if (!faite[question])
			        {faite[question] = -1;}
                }
        else {
 
                if (!faite[question]) {
                        faite[question] = -1;
                        score++;
                        alert("¡Correcto! Tu puntuación es : " + score );
                        }
 
                }
}
 
function Nivel () {
 
        if (score >= 9 && score < 10) {
                alert(score + "/10 " + "Muy bien, prueba a superarlo");
                }
        if (score >= 7 && score < 8) {
                alert(score + "/10 " + "Bien, pero puedes hacerlo mejor");
                }
        if (score >= 5 && score < 6) {
                alert(score + "/10 " + "Aprobado por los pelos. No te fíes");
                }
        if (score >= 3 && score < 4) {
                alert(score + "/10 " + "Insuficiente. Has de estudiar más");
                }
        if (score < 2) {
                alert("Su puntuación es: "+ score
				+"\nLa puntuación máxima que podía obtener es 10"
				+"\nTiene que revisar nuevamente sus lecciones"
				+"\nSu porcentaje de aciertos es menos del 10%");
                }
}
 
</script>
</head>
 
<body bgcolor="#FFFFFF" text="#000000">
<table width="785" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#336699" height="2">
  <tr>
    <td width="50" rowspan="2"><img src="imagenfinal/spa.jpg" width="50" height="50"></td>
    <td width="515" class="TopicTitle"><font face="Verdana, Arial, Helvetica, sans-serif" color="#336699"><b>Test Autoevaluativo de Licencias de conducir de Jose C. Paz </b></font></td>
  </tr>
  <tr>
    <td width="515" bgcolor="#336699"> </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td> </td>
    <td class="TopicSubtitle"><font face="Verdana, Arial, Helvetica, sans-serif" color="#336699">¡Te Deseamos Suerte! </font></td>
  </tr>
  <tr>
    <td height="521"> </td>
    <td height="521">
      <div align="center">
<div align="left">
<FORM NAME="formulario" ACTION="">
            <p>1.
              ¿Cual es el carril obligatorio de circulacion ?</font></p>
            <p> 
              <input name=1 onClick="Engine(1, this.value)" type=radio value=a>
              a. La derecha.</font></p>
            <p> 
              <input name=1 onClick="Engine(1, this.value)" type=radio value=b>
              b. La Izquierda.</p>
            <p> 
              <input name=1 onClick="Engine(1, this.value)" type=radio value=c>
              c. Los dos anteriores.</p>
            <p>
              <br>
              2. ¿Que documentacion debe llevar el conductor?</p>
            <p> 
              <input name=2 onClick="Engine(2, this.value)" type=radio value=a>
              a. Dni y Licencia.</p>
            <p> 
              <input name=2 onClick="Engine(2, this.value)" type=radio value=b>
              b. Dni, Licencia, vtv, seguro.</p>
            <p> 
              <input name=2 onClick="Engine(2, this.value)" type=radio value=c>
              c. Dni, licencia, seguro,rueda de auxilio.</p>
            <p> </p><br>
            <p>3.
              ¿En que lugares no se puede adelantar un vehiculo?</p>
            <p> 
              <input name=3 onClick="Engine(3, this.value)" type=radio value=a>
              a. En puentes, tuneles,bocacalles,curvas y lineas rojas.</p>
            <p> 
              <input name=3 onClick="Engine(3, this.value)" type=radio value=b>
              b.  En puentes, tuneles,bocacalles,curvas y semaforos en rojo.</p>
            <p>
              <input name=3 onClick="Engine(3, this.value)" type=radio value=c>
              c. En puentes, tuneles,bocacalles,curvas y .</p>
            <p> </p>
            <p>4.
              ¿Cuanto tiempo tengo para notoficar mi cambio de domicilio<br> en el registro de conducir?</p>
            <p>
              <input name=4 onClick="Engine(4, this.value)" type=radio value=a>
              a. 30 Dias.</p>
            <p> 
              <input name=4 onClick="Engine(4, this.value)" type=radio value=b>
              b. 40 Dias .</p>
            <p> 
              <input name=4 onClick="Engine(4, this.value)" type=radio value=c>
              c. 90 Dias.</p>
            <p>5.
              ¿Se puede pasar con barreras bajas? </p>
              <p><input name=5 onClick="Engine(5, this.value)" type=radio value=a> 
              a. Si, si estan bajando </p>
              <p><input name=5 onClick="Engine(5, this.value)" type=radio value=b> 
              b. Puede ser </p>
             <p> <input name=5 onClick="Engine(5, this.value)" type=radio value=c>
              c. No  </p>
                 <p>6.
              ¿quien tiene derecho de paso en todo momento? </p>
            <p> 
              <input name=6 onClick="Engine(6, this.value)" type=radio value=a>
              a. Los vehiculos.</p>
            <p> 
              <input name=6 onClick="Engine(6, this.value)" type=radio value=b>
              b. Las motots.</p>
            <p> 
              <input name=6 onClick="Engine(6, this.value)" type=radio value=c>
              c. El peaton.</p>
            <p></p>
            <p>
              <input name=Resulta onClick=Nivel() type=button value=Resultados>
              <input type="button" name="repose" value="Respuestas Correctas"
	             onClick="alert('reposes Correctas \n\n 1A  6A  11B\n\n 2B  7B  12A\n\n 3B  8A  13B\n\n 4C  9A  14C\n\n 5B 10C  15C')">
              <input type="reset" value="Borrar resultados" name="reset">
            </p>
            <a href="page.php">REHACER EXAMEN</a><br>
            </p>
            </FORM>
  </div>
      </div>
    </td>

  </tr>
</table>
</body>
<div class='edith'>
autor rigoni yanina
</div>
</html>