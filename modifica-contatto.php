<?php
include __DIR__ . '/Rubrica.php';
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
  <title>Modifica Contatto</title>
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
if (isset($_GET['stato']) && $_GET['stato'] === 'ok'):
?>
      <div class="stato stato--ok">Contatto aggiornato con successo.</div>
    <?php
elseif (isset($_GET['stato']) && $_GET['stato'] === 'ko'):
?>
      <div class="stato stato--ko">Ops! C'è stato un problema, riprova più tardi.</div>
    <?php
endif;
?>
<div class="container">
    <form action="./includes/contatti.php?id=<?php echo $contatto[0]['ID']; ?>" method="POST">
    <div class="mb-3">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="<?php echo $contatto[0]['Nome']; ?>" required>
    </div>
    <div class="mb-3"> 
      <label for="telefono">Numero di Telefono</label>
      <input type="tel" name="telefono" id="telefono" value="<?php echo $contatto[0]['Telefono']; ?>" required>
    </div>
      <hr />
      <h3 style="color: red;">Informazioni Aggiuntive</h3>
    <div class="mb-3">
      <label for="organizzazione">Organizzazione</label>
      <input type="text" name="organizzazione" id="organizzazione" value="<?php echo $contatto[0]['organizzazione']; ?>">
    </div>
    <div class="mb-3"> 
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="<?php echo $contatto[0]['email']; ?>">
    </div>
    <div class="mb-3">
      <label for="indirizzo">Indirizzo</label>
      <input type="text" name="indirizzo" id="indirizzo" value="<?php echo $contatto[0]['indirizzo']; ?>">
    </div>
    <div class="mb-3">  
      <label for="compleanno">Compleanno</label>
      <input type="date" name="compleanno" id="compleanno" value="<?php echo $contatto[0]['compleanno']; ?>">
    </div> 
      <input type="submit" class="btn btn-warning" value="Aggiorna Contatto">
    </form>
  </div>
  </main>
</body>
</html>
