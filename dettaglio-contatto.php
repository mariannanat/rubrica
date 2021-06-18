<?php
include __DIR__ . '/includes/Rubrica.php';
include __DIR__ . '/includes/util.php';
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
  <title><?php echo $contatto[0]['Nome']; ?></title>
</head>
<body>
    <header>
    <h1>Rubrica</h1>
    <nav>
      <ul>
        <li><a href="/rubrica">Tutti i Contatti</a></li>
        <li><a href="/rubrica/inserisci-contatto.php">Inserisci Contatto</a></li>
      </ul>
    </nav>
  </header>
  <main>
  <div>
    <h1><?php echo $contatto[0]['Nome']; ?></h1>
    <a href="/rubrica/includes/cancella-contatto.php?id=<?php echo $_GET['id']; ?>">Cancella Contatto</a>
    <a href="/rubrica/modifica-contatto.php?id=<?php echo $_GET['id']; ?>">Modifica Contatto</a>
  </div>
  <hr />

  <table border="1">
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




