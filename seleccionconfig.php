<?php
include("config.php");       
?>
<!DOCTYPE html>
<html>
    <head >
    <title>Seleccion Monitor</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
    <style>
 
 body, html { height:100%;
	margin:0;
	padding:0;
	width:100%;
	background-color:silver;
}
 
.recuadro {
	border:1px solid black;
	width:49.5%;
	display:inline-block;
	height:49.5%;
	overflow:hidden;
}
#uno{
	background-color:#348c94 ;
  position: relative;
	}
#dos{
	background-color:#348c94 ;
  position: relative;
	}
#tres{
	background-color:#348c94 ;
  position: relative;
	}
#cuatro{
	background-color:#348c94 ;
  position: relative;
	}
  .hijo {
  width: 75%;
  height: 75%;
 
  /* centrar vertical y horizontalmente */
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -25% 0 0 -40%; /* aplicar a top y al margen izquierdo un valor negativo para completar el centrado del elemento hijo */
  overflow:scroll; overflow-x:hidden; height: 450px;
}


table1{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
  
}

th, td{
	padding: 20px;
}

thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}
  </style>
  
    </head>
    <body>

      <div class='recuadro' id="uno">

      <table class="hijo">
      <tr> 
        <td colspan="2"> <input id="btnop1" type="image" value="Una Pantalla" onclick="location.href='monitor.php?variable=1';" src="img/imgmonitor.png" width="75%" heigth="75%" >
        <label>UNA PANTALLA</label>
        <input  id="btnop3" type="image" value="Tres Pantallas" onclick="location.href='monitor.php?variable=3';" src="img/imgmonitor.png" width="75%" heigth="75%">
        <label>TRES PANTALLAS</label>
      </td>
        <td><input  id="btnop2" type="image" value="Dos Pantallas" onclick="location.href='monitor.php?variable=2';" src="img/imgmonitor.png" width="75%" heigth="75%">
        <label>DOS PANTALLAS</label>
        <input  id="btnop4" type="image" value="Cuatro Pantallas" onclick="location.href='monitor.php?variable=4';" src="img/imgmonitor.png" width="75%" heigth="75%">
        <label>CUATRO PANTALLAS</label>
      </td>
      </tr>
      

 
</table>

   
   
     </div>

<div class='recuadro' id="dos">
  <div  class="hijo">
<table  id="tabla" class="table1"> 
<thead>
<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Reproducir</th>
      <th></th>
		</tr>
</thead>
<tbody>
    <?php 
                   //qwery para seleccionar la tabla cartelera y su contenido
                   $query = mysqli_query($conn,"SELECT * FROM uploaded_files") or die(mysql_error()); //mysql_error 
                   //Recorremos
                   while($row = mysqli_fetch_array($query)){
                 
                    ?>  

                     
		<tr>
			<td><?php echo $row[0];?></td>
			<td><?php echo $row[1];?></td>
    <td >  <?php if ($row[3] == 1){echo "SI";} else {
      echo "NO";
    } ;?>  </td>
    <td><a href="seleccionconfig.php?idl=<?php echo $row[0]; ?>" >Seleccionar</a></td>
   
		</tr>
    <?php              }  ?>  

  </tbody>
</table>
</div>
  </div>
  <form action="seleccionconfig.php" method="post" id="usrform">
  <!-- más elementos-->
  </form>
<div class='recuadro' id="tres">
<div class="hijo">
<textarea name="textarea" rows="10" cols="50" id="txtAsms" form="usrform" class="form-control"  maxlength="250">Cambia aqui el mensaje del banner</textarea>
<p><input id="btnACTT" type="submit" value="ACTUALIZAR TEXTO" form="usrform" onclick="actua();"></p>
</div>

</div>

<div class='recuadro' id="cuatro">
<input type="button" value="SUBIR VIDEO" onclick="javascript:window.open('upload.php','','');" />
</div>
 
<?php


  
  $idvideo=$_GET['idl'];



if($idvideo ==0){
}else{



  $query3 = mysqli_query($conn,"SELECT * FROM uploaded_files where id = $idvideo") or die(mysql_error()); //mysql_error 
  //Recorremos
  while($row1 = mysqli_fetch_array($query3)){

      $aux=$row1[3];
      //var_dump($aux);
   }


   if($aux==0){
    $cerouno=1;
   }else{
    $cerouno=0;
   }
   mysqli_query($conn,"UPDATE uploaded_files Set Reproducir=$cerouno Where id=$idvideo") or die(mysql_error());
   echo '<script language="javascript">alert("Actulización Correcta");window.location.href="seleccionconfig.php"</script>';
 
}

?>

<footer>

  
    
</footer>

 <script>
function actua(){
  <?php
//include("config.php");    

  $teo =  $_POST["textarea"];
  if($teo=="Cambia aqui el mensaje del banner" || $teo=="" ){

  }else{
  mysqli_query($conn,"UPDATE tbltexto Set Descripcion='$teo' Where id=1") or die(mysql_error());
  
 
   }
  ?>
 alert("Actulización de texto Correcta");
 
}

 </script>
        </body>
   
        
</html>