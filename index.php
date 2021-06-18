<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rubrica Contatti</title>
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
    <?php
include __DIR__ . '/includes/Rubrica.php';
include __DIR__ . '/includes/util.php';
$contatti = Rubrica::select_data();
if (isset($_GET['statocanc']) && $_GET['statocanc'] === 'ok'):
?>
  <div class="stato stato--ok">Contatto eliminato con successo.</div>
<?php
elseif (isset($_GET['statocanc']) && $_GET['statocanc'] === 'ko'):
?>
  <div class="stato stato--ko">Ops! C'è stato un problema, riprova più tardi.</div>
<?php
endif;
if (count($contatti) > 0):
?>

<table border="1">
  <thead>
  <?php echo get_table_head($contatti[0]); ?>
  </thead>
  <tbody>
  <?php echo get_table_body($contatti); ?>
  </tbody>
</table>
<?php else: ?>
  <p>Nessun contatto da mostrare, <a href="/rubrica/inserisci-contatto.php">vuoi aggiungerne uno?</a></p>
<?php endif;?>
  </main>
</body>
</html>
