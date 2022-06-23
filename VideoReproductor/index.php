<?php
include("Conexion.php");       
?>

<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
<title>Reproductor de Video</title>
<link rel="stylesheet" href="style/cssVideo.css">
<script src="style/jquery.min.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->

 <link rel="stylesheet" href="css/estilos.css">
<script src="style/JsVideo.js" type="text/javascript"></script>

<script  type="text/javascript" >
 window.onload = function(){
  obtnerValores();
 }      

</script>
    
</head>

 <body >
     <!-- Div para el select -->
              <div id="selector" class="container">

                <input type="checkbox" id="toggle"  style="display:none;">
               <label for="toggle" class="button" style="display:none;"></label>
                <!-- Select para los videos -->
                <nav class="nav">
                <select multiple id="selectPeli" class="select"   style="display:none;">
                 
                  <!-- Primera opción -->
                  <?php 
                   //qwery para seleccionar la tabla cartelera y su contenido
                   $query = mysqli_query($conn,"SELECT * FROM uploaded_files where Reproducir = 1") or die(mysql_error()); //mysql_error 
                   //Recorremos
                   while($row = mysqli_fetch_array($query)){
                      //Hacemos una impresión en el HTML
                       echo "<option value ='".$row['id']."'>";
                       //optebemos la posición del arreglo por su identificador. 
                       echo $row['new_name'];
                       //Hacemos una impresión en el HTML
                       echo "</option>";
                    }

                 ?>  
                </select>
                <input type="button" id="btn1" onclick="obtnerValores();" value="Reproducir" />
                <span id="result" ></span>
                </nav>
              </div>
            <!-- Sección que contiene el reproducor -->
            
          <section id="video" >
            <!-- Etiqueta para el video -->
            <video autoplay="autoplay"  muted    height="679" width="780" id="videoReproduciendo" >
            
            </video>
            </section>
   
              <!-- Scrpit para obtener el valor -->
                <script type="text/javascript">
            
         //  window.onload = obtnerValores();
       

            function obtnerValores() {
              
                 
                 var spanresult;
                 spanresult= document.getElementById('result');
                 var lista;
                 lista = document.getElementById('selectPeli');

                 spanresult.value=" ";
              //   alert(lista.options.length);

                 for (var i = 0; i < lista.options.length; i++) {
                 
              
                      videos.push(lista.options[i].text);
                      spanresult.text +=lista.options[i].text;
                     
                            
               
                 
                 }
                 //document.getElementById('result').innerHTML="Reproduciendo Selección";
                 if(videos.lenght==0){
                   alert("No hay videos a reproducir");
                 }else{
                  obtenerSelect();
                 }
            
            };


             function obtenerSelect () {
                    var len= document.getElementById('selectPeli');
                      var seleccion;

             
                      seleccion = len.options[0];
                     
                      if (seleccion != "") {
                            document.getElementById('videoReproduciendo').src ="../uploads/"+videos[0];
                            document.getElementById('videoReproduciendo').type ='video/mp4 ; codecs="avc1.42E01E, mp4a.40.2"';
                           // document.getElementById('reproducir').style.visibility="visible";
                          //  document.getElementById('videoReproduciendo').poster="";
                           // document.images[0].src='play.png';
                         
                      }else{
                        alert("No hay peliculas en cartelera");
                      }
             
             };

              

             var videos = [];
            var v = document.getElementById("videoReproduciendo");
            var t;
            var con = 0;

            function verifica_fin(){

                  if (v.ended){// cuando finaliza....
                  ///wbm.src ='uploads/1905ccca.mp4'; // modifica el src
                 // alert("hola finalizo") ;

                  document.getElementById('videoReproduciendo').src ="../uploads/"+videos[con];
                  document.getElementById('videoReproduciendo').type ='video/mp4 ; codecs="av01.0.04M.08, opus"';
                  v.load(); // carga
                  v.play(); // y lo reproduce
                  con ++;

                  if(con == videos.length){
                    con=0;
                  }
               

                  }

            }
                  t = setInterval('verifica_fin()',1000);

                </script>


     </body>
</html>