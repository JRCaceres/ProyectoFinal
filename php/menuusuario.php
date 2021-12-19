<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Usuario no Ingresado");
    window.location = "../";
    </script>
    ';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Jonatan Caceres-->
    <!--proyecto Final -->
    <meta charset="iso-8859-1">
    <title>Menu Usuario</title>
    </head>
    <body>
    <header>
      <nav>
        <ul class="nav">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Blog</a>
          <ul>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 1</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 2</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 3</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 4</a></li>
            <li><a href="https://site-6479528-6052-7059.mystrikingly.com/">Blog 5</a></li>
          </ul></li>
          <li><a href="cerrar_se.php">Cerrar Seccion</a></li>
        </ul>
      </nav>
    </header>
    <textarea name="comentarios" rows="10" cols="40">Escribe aquí tus comentarios</textarea>
        <div class="section" id="contacts">
            <h1><span>Sigeme En:</span></h1>
            <div>
                <a href="" target="_blank">
                    <img alt="SoloLearn" src="https://www.sololearn.com/Uploads/icons/sololearn.png" height="100" width="100"/>
                </a>
                <a href=" ">
                    <img alt="instagram" src="../acesos/imagen/pngwing.com (1).png" height="100" width="100"/>
                </a>
                <a href="">
                    <img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png" height="100" width="100"/>
                </a>
                <a href="">
                    <img alt="youtube" src="../acesos/imagen/pngwing.com.png" height="100" width="100"/>
                </a>
            </div>
        </div>
    <footer>
        <div class="copyright">
            &copy; <b>2021. All rights reserved for Jonatan Caceres.</b>
        </div>
    </footer>
    <script src=""></script>

    </body>
</html>