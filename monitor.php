<?php
include("config.php");       
?>
<!DOCTYPE html>
<html>
<!--<?php $varmon=( $_GET["variable"]); ?> -->
    <head >
    <title>Monitor</title>

          <script type="text/javascript">
                  function obtenerSelect () {
                 
                            document.getElementById('frm1').src ="VideoReproductor/index.php";
                			document.getElementById('btnvideos').style.visibility="hidden";
                			document.getElementById('btntv').style.visibility="visible";

                  };
                </script>

                    <script type="text/javascript">
                  function obtenerSelect2 () {
                 
                            document.getElementById('frm1').src ="ventanas/tv.html";
                			document.getElementById('btnvideos').style.visibility="visible";
                			document.getElementById('btntv').style.visibility="hidden";

                  };





                  

var count = 0, count2 = 0;  
var jsvar =0;

setInterval(function() {

   jsvar= "<?php echo $varmon ?>";
   
    // I wrote this on two lines for clarity.
    ++count;
    count2 = count;

    switch(jsvar){
      case '1':
       //frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=c6f810&orientation=landscape&theme=corporate&page=2&show_page_index=true";
       if(count2==2){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true";
  
   
    }else if(count2==3){
      //frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=c6f810&orientation=landscape&theme=corporate&page=1&show_page_index=true";
    count=0;
    }
        break;
        case '2':
          
          if(count2 == 2)
    {
       // alert("entro v");
       
        //frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=c6f810&orientation=landscape&theme=corporate&page=2&show_page_index=true";
        frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=2&show_page_index=true";
    }else if(count2==3){
       // alert("entro f");
      //  frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=c6f810&orientation=landscape&theme=corporate&page=1&show_page_index=true";
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true";
      count=0;
    }
          
          break;
      case '3':
        if(count2==2){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=2&show_page_index=true";
  
    }
        if(count2==3){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true";
  
    } if(count2==5){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=3&show_page_index=true";
  
    }else if(count2==6){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true";
    count=0;
    }

        break;
        case '4':
               if(count2== 2)
    {
       // alert("entro v");
       
        //frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=c6f810&orientation=landscape&theme=corporate&page=2&show_page_index=true";
        frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=2&show_page_index=true";
    } if(count2==3){
       // alert("entro f");
      //  frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=c6f810&orientation=landscape&theme=corporate&page=1&show_page_index=true";
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true";
    } if(count2==5){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=3&show_page_index=true";
  
    } if(count2==6){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true";
  
    } if(count2==8){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=4&show_page_index=true";
  
   
    }else if(count2==9){
      frame=document.getElementById('frm2').src ="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true";
    count=0;
    }
   
break;


    }

   
    
}, 1000*3.5);
                </script>


          <style>

html,body{
  overflow-x: hidden;
  overflow-y: hidden;
}
              .btn-flotante {
	font-size: 16px; /* Cambiar el tamaño de la tipografia */
	text-transform: uppercase; /* Texto en mayusculas */
	font-weight: bold; /* Fuente en negrita o bold */
	color: #ffffff; /* Color del texto */
	border-radius: 5px; /* Borde del boton */
	letter-spacing: 2px; /* Espacio entre letras */
	background-color: #32CB9F; /* Color de fondo */
	padding: 5px 5px; /* Relleno del boton */
	position: fixed;
	bottom: 5px;
	right: 5px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;
}
.btn-flotante:hover {
	background-color: #97F0D6; /* Color de fondo al pasar el cursor */
	box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
	transform: translateY(-7px);
}
@media only screen and (max-width: 600px) {
 	.btn-flotante {
		font-size: 14px;
		padding: 12px 20px;
		bottom: 20px;
		right: 20px;
	}
} 
 
 .DIV{
 	border: 0px solid #000000;
 	-moz-border-radius: 9px;
 	-webkit-border-radius: 9px;
 	padding: 1px;

 }
 body{
   background-image:url('img/fondogad.png');
   
 }
 .contenedor{
   width:20%;
   max-width: 750;
   height: 980;
   text-align:left;
   float: left;
   top: 35%;
   
 }

 .contenedor1{
   width:80%;
   max-width: 1110;
   height: 600;
   text-align:right;
   float: left;
   position: absolute;
  bottom: 0;
  margin-left: 350px;
  top:0%;
 }

 .iframe{
   text-aling:center;
   margin:120px 0;
 }
footer{

  position: absolute;
  bottom: 0;
  width: 100%;
  height: 80px;
 
}
          </style>
        
           <div class="DIV" >
        
             
                <button type="sumbmit" id="btnvideos" onclick="obtenerSelect()" class="btn-flotante"  width="10" height="10" style="display: none"><img src="img/video1.png" alt="x"/></button>
                 
                  <button type="sumbmit" id="btntv"  onclick="obtenerSelect2()" class="btn-flotante"  width="10" height="10" style="visibility: hidden;" style="display: none"><img src="img/tv.png" alt="x" width="20" height="20"/></button>
            </div>
        
    </head>
        <body >
            
       
            <div class="contenedor">
            <iframe id="frm1" src="VideoReproductor/index.php" width="340" height="1150" frameborder="0" scrolling="no"  class="iframe">
            </iframe>
            </div>


            <div class="contenedor1" >

           
            <iframe id="frm2" src="https://monitor.ufirst.business/#/?activation_code=6b64c0&orientation=landscape&theme=corporate&page=1&show_page_index=true"  width="1550" height="999" frameborder="0" scrolling="no"  >
            </iframe>
        </div>

 
<footer>

   </div>    

  
   <marquee bgcolor="#04b7ef" width="100%" height="100%" scrolldelay="10" scrollamount="5" direction="left" loop="infinite"><label id="lbltexto" ><FONT FACE="Verdana" SIZE=14 COLOR="#ffffff">
   <?php 
                   //qwery para seleccionar la tabla cartelera y su contenido
                   $query = mysqli_query($conn,"SELECT * FROM tbltexto where id = 1") or die(mysql_error()); //mysql_error 
                   //Recorremos
                   while($row = mysqli_fetch_array($query)){
                      //Hacemos una impresión en el HTML
                     
                       //optebemos la posición del arreglo por su identificador. 
                       echo $row['Descripcion'];
                       //Hacemos una impresión en el HTML
                      
                    }

                 ?> </FONT></label>

</marquee>
</footer>


 
        </body>
   

</html>