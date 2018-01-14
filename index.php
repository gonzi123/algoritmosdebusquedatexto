<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Algoritmos para la Busqueda de Cadenas</title>
    <script type="text/javascript">
      function generarcadena()
      {
         document.getElementById("cadena").value="";
         for(i=0;i<document.formu.o.length;i++)
         {
          if(document.formu.o[i].checked) {
              marcado=i;
          }
          }

        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < document.formu.o[marcado].value; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));

       
          document.getElementById("cadena").value=text;
       

      }
    </script>
  </head>
  <body>

    <div class="container">
  <div class="row">
    <div  class="col-12 col-md">
      <h1 class="text-primary">Algoritmos</h1>
      <p>Compartición de algoritmos específicos para la búsqueda de cadenas de texto,  Fuerza bruta, Rabin-Karp, Morris-Pratt y Boyer-Moore.</p>
      <form name="formu" method="POST" action="algoritmos.php">
      <div class="form-group">
      <label class="radio-inline"><input type="radio" name="o" id="o" value="1000" onclick="generarcadena();">1000 Caracteres</label>
      <label class="radio-inline"><input type="radio" name="o" id="o" value="10000" onclick="generarcadena();">10000 Caracteres</label>
      <label class="radio-inline"><input type="radio" name="o" id="o" value="100000" onclick="generarcadena();">100000 Caracteres</label>
      <label class="radio-inline"><input type="radio" name="o" id="o" value="1000000" onclick="generarcadena();">1000000 Caracteres</label>
      </div>
      <div class="form-group">
      <label for="exampleFormControlTextarea1">Texto:</label>
      <textarea class="form-control" name="cadena" id="cadena" rows="10"></textarea>
      </div>
      <div class="form-group">
      <label for="formGroupExampleInput">Escriba la Subcadena a Buscar:</label>
      <input type="text" class="form-control" name="subcadena" id="subcadena" placeholder="Subcadena">
      </div>
      
      <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    
    
  </div>
</div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>