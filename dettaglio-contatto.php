<?php
include __DIR__ . '/Rubrica.php';
include __DIR__ . '/util.php';
$args = array(
    'id' => $_GET['id'],
);
$contatto = Rubrica::select_data($args);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!--  Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <title><?php echo $contatto[0]['Nome']; ?></title>
</head>
<body>
    <header>
    <div class="container">
    <h1 style="color: red;">Rubrica</h1>
    <nav>
      <ul>
        <li><a href="../rubrica">Tutti i Contatti</a></li>
        <li><a href="../rubrica/inserisci-contatto.php">Inserisci Contatto</a></li>
      </ul>
    </nav>
    </div>
  </header>
  <main>
  <div>
    <h1><?php echo $contatto[0]['Nome']; ?></h1>
    <a href="../rubrica/includes/cancella-contatto.php?id=<?php echo $_GET['id']; ?>">Cancella Contatto</a>
    <a href="../rubrica/modifica-contatto.php?id=<?php echo $_GET['id']; ?>">Modifica Contatto</a>
  </div>
  <hr />

  <table class="table table-striped">
    <thead>
    <?php echo get_table_head($contatto[0]); ?>
    </thead>
    <tbody>
    <?php echo get_table_body($contatto); ?>
    </tbody>
  </table>
  </main>
</body>
</html>




