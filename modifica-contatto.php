<?php
include __DIR__ . '/includes/Rubrica.php';
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
  <title>Modifica Contatto</title>
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
    <form action="includes/contatti.php?id=<?php echo $contatto[0]['ID']; ?>" method="POST">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="<?php echo $contatto[0]['Nome']; ?>" required>
      <label for="telefono">Numero di Telefono</label>
      <input type="tel" name="telefono" id="telefono" value="<?php echo $contatto[0]['Telefono']; ?>" required>
      <hr />
      <h2>Informazioni Aggiuntive</h2>
      <label for="organizzazione">Organizzazione</label>
      <input type="text" name="organizzazione" id="organizzazione" value="<?php echo $contatto[0]['organizzazione']; ?>">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="<?php echo $contatto[0]['email']; ?>">
      <label for="indirizzo">Indirizzo</label>
      <input type="text" name="indirizzo" id="indirizzo" value="<?php echo $contatto[0]['indirizzo']; ?>">
      <label for="compleanno">Compleanno</label>
      <input type="date" name="compleanno" id="compleanno" value="<?php echo $contatto[0]['compleanno']; ?>">
      <input type="submit" value="Aggiorna Contatto">
    </form>
  </main>
</body>
</html>
