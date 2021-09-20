<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"><link rel="stylesheet" href="./stio.css">
  <script src="https://kit.fontawesome.com/ae55238b2c.js" crossorigin="anonymous"></script>  
</head>
<body>
    
  <div id="upload">
    <div class="curator_title_wrapper"><span>LP</span>
      <div class="curator_line"></div>
      <div class="curator_title">Archivos</div>
      <div class="curator_line"></div><span>14</span>
    </div>
    <div class="curator_list">
      <div class="curator_list_content">
        <div class="connect_btn_wrapper item">
          <div class="connect_btn">
            <div class="connect_btn_text"><i class="fab fa-soundcloud fa-3x"></i><br/>Connect <br/>SoundCloud</div>
          </div>
        </div>
        <div class="curator_list_content_desc">Seleccione <br/>Los Albunes de: <br/>L.P.			</div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" enctype="multipart/form-data">
          <input type="file" name="archivo">
          <br><br>
          <select name="genero">
            <!-- Opciones de la lista -->
            <option value="1">Balada</option>
            <option value="2" selected>Salsa</option> <!-- Opción por defecto -->
            <option value="3">Reggaeton</option>
            <option value="4">Bachata</option>
            <option value="5">Rock</option>
            <option value="6">Electronica</option>
          </select>
          <br><br>
          <button class="button"name="click" type="submit">Subir Archivo</button>
        </form>
        <?php
          if(isset($_POST['click'])){
            $connect=mysqli_connect("localhost","root","","musica");
            $genero=$_POST['genero'];
            $nombre=$_FILES['archivo']['name'];
            $guardado=$_FILES['archivo']['tmp_name'];
            $vexten = strtolower(pathinfo($nombre,PATHINFO_EXTENSION));
            $consulta = "INSERT INTO play (nombre_cancion,Genero) VALUES ('$nombre','$genero')";
             if($vexten =='mp3'){
                    if(move_uploaded_file($guardado, 'AUDIO/'.$nombre)){
                      if(mysqli_query($connect,$consulta)){
                        ?>  
                        <script>
                          window.alert("Archivo guardado en la base con exito");
                        </script>
                        <?php
                      }else{
                        ?>  
                        <script>
                          window.alert("Archivo no guardado en la base con exito");
                        </script>
                        <?php
                      }
                      ?>  
                      <script>
                        window.alert("Archivo guardado con exito");
                      </script>
                      <?php
                    }else{
                      ?>  
                      <script>
                        window.alert("Archivo no se pudo guardar");
                      </script>
                      <?php
                    } 
              }else{
                  ?>  
                    <script>
                      window.alert("Archivo no se pudo guardar");
                    </script>
                  <?php
                }
              }
            ?>             
      </div>
    </div>
  </div>
</body>
</html>