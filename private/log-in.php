<?php
  session_start();

  $usuario = $_POST['usuario'];
  $_SESSION['usuario'] = $usuario;
  $pss = $_POST['pss'];

  //conectar a la base datos abajo
  $conexion = mysqli_connect("localhost", "root", "", "bd-usuarios");

  //consultamos si usuario y contraseña son iguales abajo
  $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and pss = '$pss'";
  
  //ejecutamos la consulta abajo
  $resultado = mysqli_query($conexion, $consulta);

  //validamos abajo
  $filas = mysqli_num_rows($resultado);
  if ($filas > 0){
    header("location:../public/index.php");
  }
  else{
    echo '
    <script>
      alert("El Usuario y/o Contraseña es Incorrecto");
      window.history.go(-1);
    </script>';
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);
?>