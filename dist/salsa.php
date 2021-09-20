<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salsa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"><link rel="stylesheet" href="./sal.css">
    
    <script src="https://kit.fontawesome.com/ae55238b2c.js" crossorigin="anonymous"></script>  
</head>
<body>

  <div class="wrapper">
    <!-- Wave bg-->
    <div class="wave-container">
      
    </div>
    
  </div>
    <div class="header">
    <div class="burger-wrapper">
      <div class="burger"></div>
    </div>
    <div class="logo-text">Lista de reproducción</div>
    <div class="back_btn">
      <div class="circle"></div>
      <div class="text">Atras</div>
    </div>
  </div>
  <div class="nav">
    <ul class="nav_main">
      <li> <a class="nav_link">Inicio	</a></li>
      <li> <a class="nav_link">Musicas</a></li>
      <li> <a class="nav_link">Albumes</a></li>
      <li> <a class="nav_link">LP. Mix</a></li>
    </ul>
    <div class="nav_divider"></div>
    <ul class="nav_sub">
      <li><a class="nav_link" href="">Nosotros	</a></li>
      <li><a class="nav_link" href="">Contactos	</a></li>
    </ul>
  </div>
  <div class="mini-player">
  <div class="curator_title_wrapper"><span>LP</span>
      <div class="curator_line"></div>
      <div class="curator_title">Salsa</div>
      <div class="curator_line"></div><span>14</span>
    </div>
    <div class="track_info_wrapper">
      <div class="track_info">
        <div class="thumb"></div>
        <div class="info">
          <div class="title" id="titgene1">Aprovecha con letra - Nova Jory Ft. Daddy Yankee.mp3</div>
          <div class="artist" id="titgenero1">Reggaeton</div>
         
      </div>
      </div>
      <div class="contentsli">
          <i class="fas fa-volume-up fa-lg"></i>
          <input type="range" min="0" max="1" step="0.1"  class="slider">
        </div>
      
    </div>
    <div class="mini-player_btn_wrapper"><i class="btn-prev fa fa-step-backward" aria-hidden="true"></i>
      <div id="audiocontrol" class="btn-switch"><i class="btn-play fa fa-play" aria-hidden="true"></i><i class="btn-pause fa fa-pause" aria-hidden="true"></i></div><i class="btn-next fa fa-step-forward" aria-hidden="true"></i><i class="btn-open-player fa fa-list" aria-hidden="true"></i>
    </div>
  </div>
  
    <div class="curator_list">
      <div class="curator_list_content">
        <div class="connect_btn_wrapper item">
          <div class="connect_btn">

            <div class="connect_btn_text"><i class="fab fa-soundcloud fa-3x"></i><br/>Connect <br/>SoundCloud</div>
          </div>
        </div>
        <div class="curator_list_content_desc">Seleccione <br/>Una Salsa de: <br/>L.P.			</div>
        
      </div>
    </div>
  <div class="listsals">
        <div class="list_wrapper1">
            <ul class="list" id="list"> 
                <?php
                  $conexion=mysqli_connect("localhost","root","","musica");
                  $sql="SELECT * from play where Genero='salsa'";
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
      
  <img id="bailar" src="./baile.gif"></img> 
     <img id="trompe" src="./trompeta.gif"></img>
  <div class="dim"></div>
  <div class="player" id="player">
    <div class="playback_wrapper">
      <div class="playback_blur"></div>
      <div class="playback_thumb"></div>
      <div class="playback_info">
        <div class="title" id="titgene2">Aprovecha con letra - Nova Jory Ft. Daddy Yankee.mp3</div>
        <div class="artist" id="titgenero2">Reggaeton</div>
      </div>
      <div class="playback_btn_wrapper"><i class="btn-prev fa fa-step-backward" aria-hidden="true"></i>
        <div class="btn-switch"><i class="btn-play fa fa-play" aria-hidden="true"></i><i class="btn-pause fa fa-pause" aria-hidden="true"></i></div><i class="btn-next fa fa-step-forward" aria-hidden="true"></i>
      </div>
      
      <div class="playback_timeline">
        
        <div class="playback_timeline_start-time">00:31</div>
        <div class="playback_timeline_slider">
          <div class="slider_base"></div>
          <div class="slider_progress"></div>
          <div class="slider_handle"></div>
        </div>
        <div class="playback_timeline_end-time">03:11</div>
      </div>
    </div>
    <div class="list_wrapper">
      <ul class="list" id="list"> 
          <?php
            $conexion=mysqli_connect("localhost","root","","musica");
            $sql="SELECT * from play where Genero='salsa'";
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TimelineMax.min.js'></script>
    <script src="./push.min.js"></script>
    <script  src="./salsa.js"></script> 
   

</body>
</html>