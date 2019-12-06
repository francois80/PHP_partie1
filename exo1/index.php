<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 1 PHP partie1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="#!">Exercice 1</a></li>
        <li class="nav-item active"><span id="pipe-bar" class="nav-link">|</span></li>
        <li class="nav-item active"><a class="nav-link" href="http://www.phppartie1exo2.com/">Exercice 2</a></li>
        <li class="nav-item active"><a class="nav-link" href="http://www.phppartie1exo3.com/">Exercice 3</a></li>
        <li class="nav-item active"><a class="nav-link" href="http://www.phppartie1exo4.com/">Exercice 4</a></li>
        <li class="nav-item active"><a class="nav-link" href="http://www.phppartie1exo5.com/">Exercice 5</a></li>
        <li class="nav-item active"><a class="nav-link" href="http://www.phppartie1exo6.com/">Exercice 6</a></li>
        <li class="nav-item active"><a class="nav-link" href="http://www.phppartie1exo7.com/">Exercice 7</a></li>
        <li class="nav-item active"><a class="nav-link" href="http://www.phppartie1exo8.com/">Exercice 8</a></li>
      </ul>
    </div>
  </nav>
  <h1>Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.</h1>
  <?php
  $name = 'Bonjour à tous';
  ?>
  <p>$name = <?= $name ?></p>
</body>
</html>
