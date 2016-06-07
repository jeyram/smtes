<!doctype html>
<html lang="en">
<head>

<title>SMTES Engineering Solutions</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<!-- Load the jQuery library and the full jQuery Tools library -->
<!-- http://flowplayer.org/tools/download/index.html -->
<script src="http://cdn.jquerytools.org/1.2.4/full/jquery.tools.min.js"></script>

<!-- Add the dateinput and validator tools to the form (except for iOS devices) -->

<script>
$( function() {

  if( !navigator.userAgent.match( /(iPhone|iPod|iPad)/i ) ) { 
    $("#expiryDate").dateinput( { format: 'yyyy-mm-dd' } );
    $("#orderForm").validator();
  }

} );
</script>


<!-- For styling the dateinput field and calendar -->
<link rel="stylesheet" type="text/css" href="http://flowplayer.org/tools/demos/dateinput/css/skin1.css" />

<style>
#sketchpad{ border: 1px solid #000;}
#sketchpad{
    position: relative;
    }
    #firma{ border: 1px solid #000;}
#firma{
    position: relative;
    }

/* Add some margin to the page and set a default font */

body {
  margin: 30px;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}


/* Style the form with a coloured background (and a gradient for Gecko/WebKit browsers), along with curved corners and a drop shadow */

form {
  width: 35em;
  margin: 0 auto;
  padding: 0px 180px;
  overflow: auto;
  color: #3e4a49;
  background-color: #000000;
  background: -webkit-gradient( linear, left bottom, left top, color-stop(0,#ffffff), color-stop(1, #ffffff) );
  background: -moz-linear-gradient( center bottom, #f5eedb 0%, #faf8f1 100% );  
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;  
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
}


/* Give form elements consistent margin, padding and line height */

form ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

form ul li {
  margin: .9em 0 0 0;
  padding: 0;
}

form * {
  line-height: 1em;
}


/* Form heading */

form h1 {
  margin: 0 0 1.5em 0;
  padding: 0;
  text-align: center;
}


/* Give each fieldset a darker background, dark curved border and plenty of space */

fieldset {
  padding: 0 20px 20px;
  margin: 0 0 10px;
  border: 2px solid #593131;
  background: #eae1c0;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}


/* Give each fieldset legend a nice curvy green box with white text */

legend {
  color: #fff;
  background: #8fb98b;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 0.9em;
  font-weight: bold;
  text-align: center;
  padding: 5px;
  margin: 0;
  width: 9em;
  border: 2px solid #593131;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}


/* The field labels */

label {
  display: block;
  float: left;
  clear: left;
  text-align: right;
  width: 40%;
  padding: .4em 0 0 0;
  margin: .15em .5em 0 0;
}


/* Style the fields */

input, select, textarea {
  display: block;
  margin: 0;
  padding: .4em;
  width: 50%;
}

input, textarea, .date {
  border: 2px solid #eae1c0;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;    
  box-shadow: rgba(0,0,0,.5) 1px 1px 1px 1px inset;
  -moz-box-shadow: rgba(0,0,0,.5) 1px 1px 1px 1px inset;
  -webkit-box-shadow: rgba(0,0,0,.5) 1px 1px 1px 1px inset;
  background: #fff;
}

input {
  font-size: .9em;
}


select {
  padding: 0;
  margin-bottom: 2.5em;
  position: relative;
  top: .7em;
}

textarea {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  font-size: .9em;
  height: 5em;
}


/* Place a border around focused fields, and hide the inner shadow */

form *:focus {
  border: 2px solid #593131;
  outline: none;
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
}


/* Display correctly filled-in fields with a green background */

input:valid, textarea:valid {
  background: #efe;
}


/* Submit button */

input[type="submit"] {
  margin: 50px auto 0 auto;
  width: 12em;
  padding: 10px;
  border: 2px solid #593131;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;  
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  color: #fff;
  background: #593131;
  font-size: 1.2em;
  font-weight: bold;
  -webkit-appearance: none;
}

input[type="submit"]:hover, input[type="submit"]:active {
  cursor: pointer;
  background: #fff;
  color: #593131;
}

input[type="submit"]:active {
  background: #eee;
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8) inset;
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8) inset;
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8) inset;
}


/* Header/footer boxes */

.wideBox {
  clear: both;
  text-align: center;
  margin: 70px;
  padding: 10px;
  background: #ebedf2;
  border: 1px solid #333;
  line-height: 80%;
}

.wideBox h1 {
  font-weight: bold;
  margin: 20px;
  color: #666;
  font-size: 1.5em;
}


/* Validator error boxes */

.error {
  background-color: #fffe36;
  border: 1px solid #e1e16d;
  font-size: .8em;
  color: #000;
  padding: .3em;
  margin-left: 5px;
  border-radius: 5px; 
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
}

</style>

<!--[if IE]>
<style>

/* Work around IE fieldset background bleed bug */

fieldset {
  background: transparent;
}

</style>
<![endif]--> 


<!--[if IE 7]>
<style>

/* Work around broken IE7 box model */

form ul li {
  margin: 0;
}

label {
  padding-top: 1.3em;
}

</style>
<![endif]--> 
<script type="text/javascript">
 
window.addEventListener('load',function(){
		 
		canvas = document.getElementById('sketchpad');
		var context = canvas.getContext('2d');
	
		var drawer = {
			isDrawing: false,
			touchstart: function(coors){
				context.beginPath();
				context.moveTo(coors.x, coors.y);
				this.isDrawing = true;
			},
			touchmove: function(coors){
				if (this.isDrawing) {
			        context.lineTo(coors.x, coors.y);
			        context.stroke();
				}
			},
			touchend: function(coors){
				if (this.isDrawing) {
			        this.touchmove(coors);
			        this.isDrawing = false;
				}
			}
		};
		
		function draw(event){
			
			var coors = {
				x: event.targetTouches[0].pageX-200,
				y: event.targetTouches[0].pageY-1765
			};
			
			drawer[event.type](coors);
			
		}
		
		// attach the touchstart, touchmove, touchend event listeners.
	    canvas.addEventListener('touchstart',draw, false);
	    canvas.addEventListener('touchmove',draw, false);
	    canvas.addEventListener('touchend',draw, false);
		
		// prevent elastic scrolling
		document.body.addEventListener('touchmove',function(event){
			event.preventDefault();
		},false);	// end body.onTouchMove
		
		
		canvas2 = document.getElementById('firma');
		var context2 = canvas2.getContext('2d');
	
		var drawer2 = {
			isDrawing: false,
			touchstart: function(coors2){
				context2.beginPath();
				context2.moveTo(coors2.x2, coors2.y2);
				this.isDrawing = true;
			},
			touchmove: function(coors2){
				if (this.isDrawing) {
			        context2.lineTo(coors2.x2, coors2.y2);
			        context2.stroke();
				}
			},
			touchend: function(coors2){
				if (this.isDrawing) {
			        this.touchmove(coors);
			        this.isDrawing = false;
				}
			}
		};
		
		function draw2(event){
			
			var coors2 = {
				x2: event.targetTouches[0].pageX-550,
				y2: event.targetTouches[0].pageY-1765
			};
			
			drawer2[event.type](coors2);
			
		}
		
		// attach the touchstart, touchmove, touchend event listeners.
	    canvas2.addEventListener('touchstart',draw2, false);
	    canvas2.addEventListener('touchmove',draw2, false);
	    canvas2.addEventListener('touchend',draw2, false);
		
		// prevent elastic scrolling
		document.body.addEventListener('touchmove',function(event){
			event.preventDefault();
		},false);	// end body.onTouchMove

		
		
		
	},false);	// end window.onLoad
	



    function borraFirma() {
    canvas2.width = canvas2.width;
    }
function borraFirma1() {
    canvas.width = canvas.width;

    }
    
function padNmb(nStr, nLen){
    var sRes = String(nStr);
    var sCeros = "0000000000";
    return sCeros.substr(0, nLen - sRes.length) + sRes;
   }

   function stringToSeconds(tiempo){
    var sep1 = tiempo.indexOf(":");
    var sep2 = tiempo.lastIndexOf(":");
    var hor = tiempo.substr(0, sep1);
    var min = tiempo.substr(sep1 + 1, sep2 - sep1 - 1);
    var sec = tiempo.substr(sep2 + 1);
    return (Number(sec) + (Number(min) * 60) + (Number(hor) * 3600));
   }

   function secondsToTime(secs){
    var hor = Math.floor(secs / 3600);
    var min = Math.floor((secs - (hor * 3600)) / 60);
    var sec = secs - (hor * 3600) - (min * 60);
    return padNmb(hor, 2) + ":" + padNmb(min, 2) + ":" + padNmb(sec, 2);
   }

   function substractTimes(t1, t2){
    var secs1 = stringToSeconds(t1);
    var secs2 = stringToSeconds(t2);
    var secsDif = secs1 - secs2;
    return secondsToTime(secsDif);
   }
//fecha 1
   function calcT3(){
         document.getElementById('temp').value=substractTimes( document.getElementById('timeout').value+":00",  document.getElementById('timein').value+":00");
calcular();
           }
function calcT31(){
               document.getElementById('temph1').value = substractTimes( document.getElementById('timeouth').value+":00",  document.getElementById('timeinh').value+":00");
               calcular()
   }
   //fecha 2
   function calcT33(){
               document.getElementById('temp3').value = substractTimes( document.getElementById('timeout3').value+":00",  document.getElementById('timein3').value+":00");
               calcular()
   }
   function calcT313(){
               document.getElementById('temph3').value = substractTimes( document.getElementById('timeouth3').value+":00",  document.getElementById('timeinh3').value+":00");
               calcular()
   }
//fecha3
function calcT34(){
               document.getElementById('temp4').value = substractTimes( document.getElementById('timeout4').value+":00",  document.getElementById('timein4').value+":00");
               calcular()
   }

   function calcT314(){
               document.getElementById('temph4').value = substractTimes( document.getElementById('timeouth4').value+":00",  document.getElementById('timeinh4').value+":00");
               calcular()
   }
      
     
     function calcular(){
horas1=document.getElementById('temp').value.split(":");
horas2=document.getElementById('temph1').value.split(":");
horas3=document.getElementById('temp3').value.split(":");
horas4=document.getElementById('temph3').value.split(":");
horas5=document.getElementById('temp4').value.split(":");
horas6=document.getElementById('temph4').value.split(":");
horatotale=new Array();
for(a=0;a<3;a++){
horas1[a]=(isNaN(parseInt(horas1[a])))?0:parseInt(horas1[a])
horas2[a]=(isNaN(parseInt(horas2[a])))?0:parseInt(horas2[a])
horas3[a]=(isNaN(parseInt(horas3[a])))?0:parseInt(horas3[a])
horas4[a]=(isNaN(parseInt(horas4[a])))?0:parseInt(horas4[a])
horas5[a]=(isNaN(parseInt(horas5[a])))?0:parseInt(horas5[a])
horas6[a]=(isNaN(parseInt(horas6[a])))?0:parseInt(horas6[a])

horatotale[a]=(horas1[a]+horas2[a]+horas3[a]+horas4[a]+horas5[a]+horas6[a]); // Suma o resta según prefieras
}
horatotal=new Date()
horatotal.setHours(horatotale[0]);
horatotal.setMinutes(horatotale[1]);
horatotal.setSeconds(horatotale[2]);

document.getElementById('TotalHT').value=horatotal.getHours()+":"+horatotal.getMinutes()+":"+horatotal.getSeconds();

}

 function calcularTraver(){
 horas1=document.getElementById('TotalHT').value.split(":");
horas2=document.getElementById('traverh').value.split(":");
horas3=document.getElementById('traverh3').value.split(":");
horas4=document.getElementById('traverh4').value.split(":");

 horatotale=new Array();
for(a=0;a<3;a++){
horas1[a]=(isNaN(parseInt(horas1[a])))?0:parseInt(horas1[a])
horas2[a]=(isNaN(parseInt(horas2[a])))?0:parseInt(horas2[a])
horas3[a]=(isNaN(parseInt(horas3[a])))?0:parseInt(horas3[a])
horas4[a]=(isNaN(parseInt(horas4[a])))?0:parseInt(horas4[a])
horatotale[a]=(horas1[a]+horas2[a]+horas3[a]+horas4[a]); // Suma o resta según prefieras
}
horatotal=new Date()
horatotal.setHours(horatotale[0]);
horatotal.setMinutes(horatotale[1]);
horatotal.setSeconds(horatotale[2]);

document.getElementById('TotalTraverH').value=horatotal.getHours()+":"+horatotal.getMinutes()+":"+horatotal.getSeconds();

}

   function activar() {
         document.getElementById('timein1').disabled=false;
         document.getElementById('timeout1').disabled=false;
         document.getElementById('timein').disabled=false;
         document.getElementById('timeout').disabled=false;

        document.getElementById('timein1').value="";
        document.getElementById('timeout1').value="";
        document.getElementById('timein').value="";
        document.getElementById('timeout').value="";
        document.getElementById('TotalHT').value="";
        document.getElementById('traverh').value="";
        document.getElementById('TotalTraverH').value="";
       
 }
function salvarDatos() {
var img =canvas.toDataURL("image/png"); 
var img2 =canvas2.toDataURL("image/png"); 
    document.getElementById('tempf').value=img;  
 document.getElementById('tempf1').value=img2; 
}	
		
	</script>
</head>
<body onLoad="activar()">

<!--<div class="wideBox">
  <h1>HTML5 Web Form With (almost!) No JavaScript in Sight</h1>
</div>-->

<form id="orderForm" action="imagen.php" method="post">

  <p><img src=logo.PNG de pantalla 2012-06-22 a la(s) 22.30.59.PNG" width="164" height="76"></p>

 <!-- <fieldset>-->
    <!--<legend>License details</legend>-->

    <ul>

      <li>
        <table width="696" height="332" border="1">
          <tr>
            <td width="173"><p>
            <?php
$link = mysql_connect("mysql13.000webhost.com", "a5250908_tmp", "doom.77");
mysql_select_db("a5250908_temp", $link);

$result=mysql_query("SELECT * FROM smte ORDER BY serviceNum DESC LIMIT 1",  $link);
while($row=mysql_fetch_row($result)){
     echo" <label>Service Order no.</label>";
        $temp=(int) $row[0] + 1;
}
 echo "<input type='text' name='serviceN' value='$temp'>"; 

mysql_close($link);
?>
           </p>
           <p>
           <label>Purchase Prder</label>
              <input type="text" name="po" id="po" placeholder="purchase order " />

           </p>
            <p>
                          <label for="Date2">Date:</label>
              <input type="date" name="date1" id="date1" placeholder=" mm/dd/yy" />
            </p></td>
            <td width="157"><label for="forma2">Custoner</label>
              <select name="empresas" id="empresas">
                <option>Jabil</option>
                <option>Epiq</option>
                <option>Global Tech</option>
                <option>MC</option>
                <option>Ersa</option>
                <option>Continental</option>
                <option>Flextronics</option>
                <option>Samina</option>
                <option>Benchmark</option>
            </select></td>
          </tr>
          <tr>
            <td height="172"><p>
              <label for="numLicenses2">Machine Type:</label>
              <input type="text" name="machineType" id="machineType" placeholder="Machine Type"/>
            </p>
            <p>
              <label for="billingName2">Product Tree Number:</label>
              <input type="text" name="productTree" id="productTree" placeholder="product Number" />
            </p>
            <p>
              <label for="billingPostcode2">Serial Number:</label>
              <input type="text" name="serialNumber" id="serialNumber" placeholder="Serial Number" />
            </p></td>
            <td><p>&nbsp;</p>
              <p>
                <label for="billingAddress2">Service Required</label>
              </p>
              
              <p>
                <textarea name="serviceR" id="serviceR" required maxlength="450"></textarea>
              </p>
            <p>&nbsp; </p></td>
          </tr>
        </table>
      </li>

      <li></li>

      <li></li>
      
    </ul>

  <!--</fieldset>-->

  <!--fieldset>
    <legend>Billing details</legend>-->

  <ul>

      <li>
        <table width="695" height="65" border="1">
          <tr>
            <td>
            <p>
            <strong>Actions Taken/Recommendations/Problem Solved:</strong>
             </p>
              <p>
                <textarea name="actionTaken" id="actionTaken" required maxlength="450"></textarea>
              </p>
            <p>
              <center><label for="phone"><strong>          Parts Replaced/Suggested:</strong></label><br></center>
            </p>
            <p>
              <textarea name="partsR" id="partsR" required maxlength="350"></textarea>
            </p>
            <p>
              <center><label for="phone"><strong>         Overall Comments</strong>:</label><br></center>
            </p>
            <p>
              <textarea name="overallC" id="overallC" required maxlength="250"></textarea>
            </p></td>
          </tr>
        </table>
      </li>

      <li></li>

      <li></li>

      <li></li>

      <li></li>

    </ul>

  <!--</fieldset>-->
<table width="697" border="1">
  <tr>
    <td>Date</td>
    <td>Time in</td>
    <td>Time out</td>
  </tr>
  <tr>
    <td><input type="date" name="date2" id="date2"  required maxlength="7" /></td>
    <td><input type="time" name="timein" id="timein"  required maxlength="7" /></td>
    <td><input type="time" name="timeout" id="timeout" required maxlength="7" onblur="calcT3()" /></td>
    <input type="hidden" name="temp" id="temp" />
  </tr>
   <tr>
      <td>Traver hours</td>
      <td>Time in</td>
      <td>Time out</td>
    </tr>
    <tr>
      <td><input type="number" name="traverh" id="traverh" min="1" max="120" step="1" onblur="calcularTraver()"></td>
      <td><input type="time" name="timeinh" id="timeinh"  required maxlength="7" /></td>
      <td><input type="time" name="timeouth" id="timeouth"  required maxlength="7" onblur="calcT31()"/></td>
      <input type="hidden" name="temph1" id="temph1" />
    </tr>
    </table>
    <p>&nbsp;</p>
   <table width="697" border="1">
  <tr>
    <td>Date</td>
    <td>Time in</td>
    <td>Time out</td>
  </tr>
  <tr>
    <td><input type="date" name="date3" id="date2"  required maxlength="7" /></td>
    <td><input type="time" name="timein3" id="timein3"  required maxlength="7" /></td>
    <td><input type="time" name="timeout3" id="timeout3" required maxlength="7" onblur="calcT33()" /></td>
    <input type="hidden" name="temp3" id="temp3" />
  </tr>
   <tr>
      <td>Traver hours</td>
      <td>Time in</td>
      <td>Time out</td>
    </tr>
    <tr>
      <td><input type="number" name="traverh3" id="traverh3" min="1" max="120" step="1" onblur="calcularTraver()"></td>
      <td><input type="time" name="timeinh3" id="timeinh3"  required maxlength="7" /></td>
      <td><input type="time" name="timeouth3" id="timeouth3"  required maxlength="7" onblur="calcT313()"/></td>
      <input type="hidden" name="temph3" id="temph3" />
    </tr>
    </table>
 <p>&nbsp;</p>
<table width="697" border="1">
  <tr>
    <td>Date</td>
    <td>Time in</td>
    <td>Time out</td>
  </tr>
  <tr>
    <td><input type="date" name="date4" id="date4"  required maxlength="7" /></td>
    <td><input type="time" name="timein4" id="timein4"  required maxlength="7" /></td>
    <td><input type="time" name="timeout4" id="timeout4" required maxlength="7" onblur="calcT34()" /></td>
    <input type="hidden" name="temp4" id="temp4" />
  </tr>
   <tr>
      <td>Traver hours</td>
      <td>Time in</td>
      <td>Time out</td>
    </tr>
    <tr>
      <td><input type="number" name="traverh4" id="traverh4" min="1" max="120" step="1" onblur="calcularTraver()"></td>
      <td><input type="time" name="timeinh4" id="timeinh4"  required maxlength="7" /></td>
      <td><input type="time" name="timeouth4" id="timeouth4"  required maxlength="7" onblur="calcT314()"/></td>
      <input type="hidden" name="temph4" id="temph4" />
    </tr>
    </table>

   <!--  <table width="700" border="1">
    <tr>
      <td>Traver hours</td>
      <td>Time in</td>
      <td>Time out</td>
    </tr>
    <tr>
       
      <td><input type="number" name="traverh" id="traverh" min="1" max="120" step="1" onblur="calcularTraver()"></td>
      <td><input type="time" name="timein1" id="timein1"  required maxlength="7" /></td>
      <td><input type="time" name="timeout1" id="timeout1"  required maxlength="7" onblur="calcT31()"/></td>
      <input type="text" name="temp1" id="temp1" />
    </tr>
  </table>-->
   
  <p>&nbsp;</p>
  <table width="697" border="1">
    <tr>
      <td width="292">Total Onsite Hours</td>
      <td width="389">
     <input type="text" name="TotalHT" id="TotalHT" placeholder="horas trabajadas" required maxlength="20"  />
            </td>
    </tr>
    <tr>
      <td>Total Hours To Be Billed including travel</td>
      <td><input type="text" name="TotalTraverH" id="TotalTraverH"  placeholder="horas trabajadas con viaje" required maxlength="20" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="693" border="1">
    <tr>
      <td><p>Field Engineer(s):</p>
      <p>
       <select name="enginner" id="enginner">
                <option>Oscar Zaragoza</option>
                <option>Hugo Leon</option>
                <option>Ignacio Flores</option>
                <option>Antonio Trejo</option>
                <option>Jose Guadalupe Marmolejo</option>
                <option>Miguel Ramirez</option>
            </select>
             </p></td>
      <td><p>Customer Maintenance Responsible:</p>
      <p>
        <input type="text" name="customerM" id="customerM" placeholder="Name" required maxlength="20" />
      </p></td>
    </tr>
    <tr>
      <td><p>FE signature</p>
      <p>&nbsp;</p>
      <canvas id="sketchpad" height="200" width="300" style="background-color:white" z-index: 1>
    Sorry, your browser doesn't support canvas technology.
</canvas> 
<input type="hidden" name="tempf" id="tempf"/>
<p>&nbsp;</p>
<input type="button" onClick="borraFirma1();" value="Borrar Firma" />

</td>
      <td><p><em>Acknowledge Signature</em>: </p>
      <p>&nbsp;</p>
       <canvas id="firma" height="200" width="300" style="background-color:white" z-index: 2>
    Sorry, your browser doesn't support canvas technology.
</canvas>
<input type="hidden" name="tempf1" id="tempf1"/>
 <p>&nbsp;</p>
<input type="button" onClick="borraFirma();" value="Borrar Firma" />
 </td>
    </tr>
  </table>
    <p>&nbsp;</p>
  <!--<fieldset>
    <legend>Payment details</legend>

    <ul>

      <li>
        <label for="cardNumber">Card number</label>
        <input type="text" name="cardNumber" id="cardNumber" placeholder="As shown on the front of your card" required maxlength="30" pattern="[\d\ ]{12,}" />
      </li>

      <li>
        <label for="cvvCode">CVV code</label>
        <input type="number" name="cvvCode" id="cvvCode" placeholder="3-digit number on back of card" required maxlength="3" pattern="\d{3}" />
      </li>

      <li>
        <label for="expiryDate">Expiry date</label>
        <input type="month" name="expiryDate" id="expiryDate" placeholder="YYYY-MM" required maxlength="7" />
      </li>

    </ul>

  </fieldset>-->

  <input type="submit" name="placeOrder" value="Place Your Order" onclick="salvarDatos()"/>
   
</form>

<!--<div class="wideBox">
  <p>&copy; Elated.com | <a href="http://www.elated.com/articles/banish-javascript-in-web-forms-with-html5/">Back to Tutorial</a></p>
  <p style="font-size: .8em; line-height: 1.5em;"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br />This <span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/Text" rel="dc:type">work</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.elated.com/" property="cc:attributionName" rel="cc:attributionURL">http://www.elated.com/</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</p>
</div>-->

</body>
</html>


