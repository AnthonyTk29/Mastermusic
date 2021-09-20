<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
$vexten = strtolower(pathinfo($nombre,PATHINFO_EXTENSION));
if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if($vexten =='mp3'){
			if(move_uploaded_file($guardado, 'AUDIO/'.$nombre)){
				echo "Archivo guardado con exito";
			}else{
				echo "Archivo no se pudo guardar";
			}
		}else{

		}
		
	}
}else{
	if(move_uploaded_file($guardado, 'AUDIO/'.$nombre)){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
}

?>