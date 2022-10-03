<?php

include("./bd.php");

//recuperar las variables
$nombre=$_POST['name'];
$user=$_POST['user'];
$contraseña=$_POST['pass'];


// Realiza la búsqueda de registros existentes en la BD con los parámetros especificados  
$consulta = "SELECT User FROM user WHERE User= '".$user."'"; 	  
$resultado = mysqli_query($conn,$consulta);   	  

//Verifica si se encontraron registros, y de ser así, muestra un mensaje de error   
if (mysqli_num_rows($resultado) > 0) {
    echo"El correo introducido ya esta registrado, por favor Inicie Sesión -> <a href='Iniciar sesión.html' >(Iniciar Sesión)</a><br> O registre otro correo.<a href='Registro.html' >(Volver para registrar otro correo)</a>.";


}else{
    //sentencia sql
    $sql="INSERT INTO user VALUES ('$user','$contraseña','$nombre', 10, false)";
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conn, $sql);
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error";
    }else{
        $path = 'D:\ANM\user\contents/'.$user ;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }else{
            echo "Error la carpeta ya existe, consulte con el administrador de la web para más información";
        }
        echo "<script> alert('Se ha registrado con exito; Bienvenido ');window.location= '../node_modules/startbootstrap-modern-business/dist/index.php' </script>";
        //echo"Datos Guardado Correctamente <br><a href='index(3).html' >Continuar</a> ";
        //header("Location: index(2).php"); Para redireccionar a otra pagina web
        //exit;
        
    }
} 
//mysqli_close($conn);
?>