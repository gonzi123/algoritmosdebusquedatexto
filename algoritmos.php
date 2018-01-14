<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Algoritmos para la Busqueda de Cadenas</title>
    
  </head>
  <body>

    <div class="container">
  <div class="row">
    <div  class="col-12 col-md">
      <h1 class="text-primary">Algoritmos</h1>
      <p>Compartición de algoritmos específicos para la búsqueda de cadenas de texto,  Fuerza Bruta, Rabin-Karp, Morris-Pratt y Boyer-Moore.</p>
      <?Php
      include("fuerzabruta.php"); 
      include("RK.php"); 
      include("MP.php"); 
      include("BM.php"); 

      $cadena=$_POST['cadena'];
      $limite=$_POST['o'];
      $subcadena=$_POST['subcadena'];
     // echo $subcadena." ".$limite;

   

      $m11=memory_get_usage();
      $tiempo_inicio1=microtime(true);
      $posicion1= implode(",",RabinKarp($cadena, $subcadena));
      $tiempo_fin1=microtime(true);
      $c1=$tiempo_fin1-$tiempo_inicio1;
      $m21=memory_get_usage();
      $rm1=$m21-$m11;

      $m12=memory_get_usage();
      $tiempo_inicio2=microtime(true);
      $posicion2= implode(",",MorrisPratt($cadena, $subcadena));
      $tiempo_fin2=microtime(true);
      $c2=$tiempo_fin2-$tiempo_inicio2;
      $m22=memory_get_usage();
      $rm2=$m22-$m12;

      $m13=memory_get_usage();
      $tiempo_inicio3=microtime(true);
      $posicion3= implode(",",BoyerMoore($cadena, $subcadena));
      $tiempo_fin3=microtime(true);
      $c3=$tiempo_fin3-$tiempo_inicio3;
      $m23=memory_get_usage();
      $rm3=$m23-$m13;

         $m1=memory_get_usage();
      $tiempo_inicio=microtime(true);
      $posicion=fuerzabruta($subcadena,$cadena);
      $tiempo_fin=microtime(true);
      $c=$tiempo_fin-$tiempo_inicio;
    //echo "<br>el tiempo de ejecucion es: ".$c;
      $m2=memory_get_usage();
      $rm=$m2-$m1;


      ?>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Algoritmo</th>
      <th scope="col">Tiempo de Ejecución</th>
      <th scope="col">Memoria utilizada</th> 
      <th scope="col">Posición de la Subcadena</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Fuerza Bruta</td>
      <td><?Php echo $c; ?></td>
      <td><?Php echo $rm." bytes"; ?></td>
      <td><?Php echo $posicion; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Rabin-Karp</td>
     <td><?Php echo $c1; ?></td>
      
      <td><?Php echo $rm1." bytes"; ?></td>
      <td><?Php echo $posicion1; ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Morris-Pratt</td>
      <td><?Php echo $c2; ?></td>
      <td><?Php echo $rm2." bytes"; ?></td>
      <td><?Php echo $posicion2; ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Boyer-Moore</td>
      <td><?Php echo $c3; ?></td>
      <td><?Php echo $rm3." bytes"; ?></td>
      <td><?Php echo $posicion3; ?></td>
    </tr>
  </tbody>
</table>


    
  </div>
</div>
