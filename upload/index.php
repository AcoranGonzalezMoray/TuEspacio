<?php
require_once("../src/session.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        
        <title>MiPc</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="/node_modules/startbootstrap-modern-business/dist/css/styles.css" rel="stylesheet" type="text/css">
        <link href="dropzone.css" rel="stylesheet" type="text/css">
        <script src="dropzone.js" type="text/javascript"></script>
    </head>
    <body style="background-color:#242629;" >
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav style="background-color:#16161a;" class="navbar navbar-dark ">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">
                    <?php
                       
                        echo 'Usuario : '.$_SESSION['Name-User'];
                    ?>
                    </a>
                    <a  class="badge" >Conexion: <?php echo "Establecida"?></a>
                    <a class="badge badge-danger" href="/node_modules/startbootstrap-modern-business/dist/cerrar.php">Salir</a>
                    
                </div>
            </nav>
            <!-- Header-->
            <header style="background-color:#16161a;" >
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Tu Espacio</h1>
                                <p  style="color:#94a1b2;" class="lead fw-normal mb-4">Acceso sencillo y seguro a tu contenido <br> Guarda y comparte  archivos y carpetas desde tu dispositivo móvil, tablet u ordenador</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <?php
                                    // Nota: el resultado es protocolo agnostic
                                    $link = $_SERVER[ 'HTTP_HOST'] ;
                                    $escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');
                                    echo '<a style="border-color:#7f5af0;" class="btn btn-outline-light btn-lg px-4" href="http://'.$escaped_link.'/node_modules/startbootstrap-modern-business/dist/index.php">Mis Archivos</a>'
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><i style="font-size: 20em; color:#2cb67d" class="  bi-hdd-stack-fill "></i></div>
                    </div>
                </div>
            </header>
            <br>
        <div style="color:white;background-color:#94a1b2"; class="container" >
            <div style="color:white;background-color:#94a1b2" class='content'>
            <form style="color:white;background-color:#94a1b2" action="upload.php" class="dropzone" id="dropzonewidget">
                
            </form>  
            </div> 
        </div>
    </body>
</html> 