<!DOCTYPE html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>
    <p><a href="Index.html"><input type="button" value="Volver a inicio"></a></p>
    <?php
include_once ("funciones.inc");
    session_start();
    echo 'Bienvenido/a '.$_SESSION['Nombre'];

  $nombreServidor = "localhost";
  $nombrePersona="root";
  $nombreClave="";
  $nombreBaseDeDatos = "empresa1";
  
  // Crear conexión con la base de datos.
  $conn = mysqli_connect($nombreServidor, $nombrePersona, $nombreClave, $nombreBaseDeDatos);
   
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Fallo de conexion con la base de datos ");
  }
    $Id=$_SESSION['Id'];
    $rank=$_SESSION['rank'];
    
    $sql="SELECT * FROM informacion WHERE Rango_empresa>=".FormatToSQL($rank,"numerico").";";
    $resultado=$conn->query($sql);
    
    
    $inicio=100;
    echo "</br></br> ";


    $sql1="SELECT * FROM personal WHERE ID>=".FormatToSQL($inicio,"numerico").";";
    $resultado1=$conn->query($sql1);
    echo " Estos son los empleados y sus rangos que estan sobre tu posicion o en el mismo rango de empresa que tu ";


    while ($fila1=mysqli_fetch_array($resultado1) and $fila=mysqli_fetch_array($resultado)){

   echo "</br></br>".$fila1[0]." tiene por informacion publica ".$fila[1];
       }
    
    
echo "</br></br> ";

    $sql2="SELECT * FROM nivel_empresa WHERE ID=".FormatToSQL($Id,"numerico").";";
    $resultado2=$conn->query($sql2);
    $fila2=mysqli_fetch_array($resultado2);
    $sql1="SELECT * FROM informacion WHERE ID=".FormatToSQL($inicio,"numerico").";";
    $resultado1=$conn->query($sql1);
    $fila1=mysqli_fetch_array($resultado1);
    if($fila2[2]!=NULL)
    {
        //while ($fila2=mysqli_fetch_array($resultado2) and $fila1=mysqli_fetch_array($resultado1)){
        printf( "Perteneces al %s que tiene por informacion %s",$fila2[2],$fila1[3]);
        //}
    }
    
    echo "</br></br> ";
    
    echo 'Esta es tu informacion personal '.$fila1[2];
   
?>
    </body>
    <form action="edicion.php" method="post">
        <p>Inserte aqui la informacion a cambiar por completo<input name="nueva" type="text"></p>
        <p><input type="submit" value="Cambiar"></p>

    
    </form>
    
</html>