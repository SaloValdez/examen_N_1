<?php

//alumno
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
//notas
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

include("a_conexion2.php");
//insert----ALUMNO
  $insertar1=("INSERT INTO alumno (nombre,apellido) values ('$nombre','$apellido')");
  $ejecutar = $mysqli->query($insertar1);
  // if ($ejecutar->errno)die($ejecutar->error);

  //invocando ultimo registro alumno
$sel = $mysqli->query("SELECT idAlumno, idAlumno FROM alumno ORDER BY idAlumno DESC");
$sel_row = $sel->fetch_object();
$id_MaxAlu = $sel_row->idAlumno;


//calcular maximos y minimos y el promedio, OBSERVACION
    //maximos y minimos
      $max = max($nota1, $nota2, $nota3,$nota4);
      $min = min($nota1, $nota2, $nota3,$nota4);

      //echo "La nota maxima es ". $max."<br>";
      //echo "La nota minima es ". $min;

    //promedio
      $promedio =($nota1+ $nota2+ $nota3+$nota4)/4;
    //  echo "el promedio es es ". $promedio."<br>";
    //VERIFICANDO  para puntos adicionales
      if ($promedio<= 10) {
        $observacion = "Desaprobado";
        $adicional = "No";
        $promedioAd = $promedio;

      }else{
        $observacion = "Aprobado";
        $adicional = "Si";
        $promedioAd = $promedio  + 2;
      }
      //insertar tabla resultados
      $insertar3=("INSERT INTO resultado(promedio,mayor,menor,observacion,adicional) values ('$promedioAd','$max','$min','$observacion','$adicional')");
      $ejecutar = $mysqli->query($insertar3);


      //invocando ultimo registro observacion
    $sel = $mysqli->query("SELECT idResultado, idResultado FROM resultado ORDER BY idResultado DESC");
    $sel_row = $sel->fetch_object();
    $id_MaxRes = $sel_row->idResultado;


      //insert----NOTAS
      $insertar2=("INSERT INTO nota(n1,n2,n3,n4,idAlumno,idResultado) values ('$nota1','$nota2','$nota3','$nota4','$id_MaxAlu','$id_MaxRes')");
      $ejecutar = $mysqli->query($insertar2);
      if ($ejecutar->errno)die($ejecutar->error);

      echo '<script> window.location="index.php"; </script>';

?>
