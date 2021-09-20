<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"><link rel="stylesheet" href="./stio.css">
    <script src="https://kit.fontawesome.com/ae55238b2c.js" crossorigin="anonymous"></script>  
</head>
<body>
    
<div id="balada">
    <div class="curator_title_wrapper"><span>LP</span>
      <div class="curator_line"></div>
      <div class="curator_title">Balada</div>
      <div class="curator_line"></div><span>14</span>
    </div>
    <div class="curator_list">
      <div class="curator_list_content">
        <div class="connect_btn_wrapper item">
          <div class="connect_btn">

            <div class="connect_btn_text"><i class="fab fa-soundcloud fa-3x"></i><br/>Connect <br/>SoundCloud</div>
          </div>
        </div>
        <div class="curator_list_content_desc">Seleccione <br/>Una balada de: <br/>L.P.			</div>
        
      </div>
      <div class="listbalada">
        <div class="list_wrapper">
            <ul class="list" id="list"> 
                <?php
                  $conexion=mysqli_connect("localhost","root","","musica");
                  $sql="SELECT * from play where Genero='balada'";
                  $result=mysqli_query($conexion,$sql);

                  while($mostrar=mysqli_fetch_array($result)){
                  ?>
                  <li class="list_item" id='"title"+<?php echo $mostrar['id']?>'> 
                    <div class="thumb" > </div>
                    <div class="info" id='"info"+<?php echo $mostrar['id']?>'> 
                      <div id='"title"+<?php echo $mostrar['id']?>'><?php echo $mostrar['nombre_cancion']?></div>
                      <div class="artist" id='"genero"+<?php echo $mostrar['id']?>'><?php echo $mostrar['Genero']?></div>
                    </div>
                  </li>
                  <?php 
                  }
          ?>
            </ul>
          </div>
      </div>
    </div>  
         
  </div>
</body>
</html>