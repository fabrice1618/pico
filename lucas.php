<?php
print_r($_POST);
if (count($_POST) > 0)
{
  if ($_POST['age'] > 0)
  {
    header("Location : http://pico.local/dashbord.php");
  }
  else 
  {
    http_response_code(403);
  }
}
?>


<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Lucas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="document/pico.png"> 
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
          <div class="col">
          </div>
          <div class="col">
            <form action="lucas.php" method="post">
                <div class="mb-1 mt-3">
                  <label for="inputPrenom" class="form-label">Prénom</label>
                  <input type="text" name="prenom" class="form-control" id="inputPrenom" aria-describedby="prenomHelp">
                  <div id="prenomHelp" class="form-text">Veuillez entrer votre prénom.</div>
                </div>
                <div class="mb-3 mt-3">
                  <label for="inputAge" class="form-label">Age</label>
                  <input type="text" name="age" class="form-control" id="inputAge" aria-describedby="ageHelp">
                  <div id="ageHelp" class="form-text">Veuillez entrer votre age.</div>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
              </form>
          </div>
          <div class="col">
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    </body>
</html>