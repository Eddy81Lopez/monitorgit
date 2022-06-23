
<?php
?>
<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
<title>Reproductor de Video</title>
</head>

 <body>
      <h1 align="center" style="margin: 15px 0 0 0;"><strong>Reproductor de Video</strong></h1>
         <div id="reproductor">
          <section>
            <video>
              <source src="../VideoReproductor/videos/Jurassic World.mp4" />
            </video>
            <div id="videoControles">
              <a href="#"><img src="play.png" height="25" alt="Boton de play" /></a>
              <a href="#"><img src="pause.png" height="25" alt="Boton de pause" /></a>

                <div class="progress">
                  <progress id="progreso">No se reconoce</progress>
                </div>
                <div class="vol">
                  <a href="#"><img src="volumen.png" height="25" alt="Boton de Volumen" /></a>
                  <input type ="range" min="0" type "1" step"0.1" value ="0.3" id="volumen"> </input>
                </div>
             </div>
          </section>
         </div>

         
     </body>
</html>