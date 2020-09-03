<?php
    include 'conexion.php'; //incluimos la conexion//

    //recibimos los datos por metodo POST y los almacenamos//
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $pss = $_POST["pss"];

    //consulta para insertar los datos//
    $insertar = "INSERT INTO usuarios(nombre, apellido, usuario, email, pss) VALUES ('$nombre', '$apellido', '$usuario', '$email', '$pss')";

    //VERIFICAR USUARIO
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

//VERIFICAMOS SI EL USUARIO Y EL CORREO EXISTEN//

    if (mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
            alert("Este usuario ya existe");
            window.history.go(-1);
        </script>';
        exit;
    }

    $verificar_email  = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");

    if (mysqli_num_rows($verificar_email) > 0){
        echo '<script>
        alert("Este correo ya existe");
        window.history.go(-1);
    </script>';
        exit;
    }


    //ejecutamos la consulta INSERTAR//
    $resultado = mysqli_query($conexion, $insertar);
    
    if (!$resultado) {
        echo '<script>
        alert("Error al registrarse");
        window.history.go(-1);
    </script>';
    }   
    else
    {
      echo '
      <script>
      alert("Se ha registrado exitosamente, porfavor inicia tu sesión");
      window.history.go(-1);
      </script>';
    }
    //cerramos la conexion//
    mysqli_close($conexion);
?>