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
  <title>Rubrica Contatti</title>
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
<div class="container">
<table class="table table-striped">
  <thead >
  <?php echo get_table_head($contatti[0]); ?>
  </thead>
  <tbody >
  <?php echo get_table_body($contatti); ?>
  </tbody>
</table>
</div>
<?php else: ?>
  <p>Nessun contatto da mostrare, <a href="../rubrica/inserisci-contatto.php">vuoi aggiungerne uno?</a></p>
<?php endif;?>
  </main>
</body>
</html>
