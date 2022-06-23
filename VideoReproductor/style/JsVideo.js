
var mivideo, reproducir, barra, progreso,maximo;
maximo = 600;
 function comenzar(){
 	mivideo = document.getElementById("videoReproduciendo");
 	barra = document.getElementById("barra");
 	progreso = document.getElementById("progreso");
 	reproducir = document.getElementById("reproducir");

 //	reproducir.addEventListener("click",playpausa,true);
 //	barra.addEventListener("click",mover,true);

 }

function playpausa(){
	if ((mivideo.paused == false) && (mivideo.ended ==false)) {
		mivideo.pause();
		document.images[0].src='play.png';
	}else{
		mivideo.play();
		document.images[0].src='pause.png';
		bucle = setInterval(estado,60);
	}

}

function estado(){

	if (mivideo.ended == false) {
		var total = parseInt(mivideo.currentTime*maximo/mivideo.duration);
		progreso.style.width = total+"px";
	}else{
	    document.images[0].src='play.png';
	    progreso.style.width = "0px";
	}

}

function mover(pagina){

	if ((mivideo.paused == false) && (mivideo.ended)==false) {
		var posicion = pagina.pageX-barra.offsetLeft;
		var nuevaPosicion = posicion*mivideo.duration/maximo;
		mivideo.currentTime=nuevaPosicion;
		progreso.style.width = posicion+"px";
	}
}

window.addEventListener("load",comenzar,false);



