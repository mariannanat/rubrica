<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aggiungi Contatto</title>
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
      <div class="stato stato--ok">Contatto aggiunto con successo.</div>
    <?php
elseif (isset($_GET['stato']) && $_GET['stato'] === 'ko'):
?>
      <div class="stato stato--ko">Ops! C'è stato un problema, riprova più tardi.</div>
    <?php
endif;
?>
    <form action="includes/contatti.php" method="POST">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" required>
      <label for="telefono">Numero di Telefono</label>
      <input type="tel" name="telefono" id="telefono" required>
      <hr />
      <h2>Informazioni Aggiuntive</h2>
      <label for="organizzazione">Organizzazione</label>
      <input type="text" name="organizzazione" id="organizzazione">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
      <label for="indirizzo">Indirizzo</label>
      <input type="text" name="indirizzo" id="indirizzo">
      <label for="compleanno">Compleanno</label>
      <input type="date" name="compleanno" id="compleanno">
      <input type="submit" value="Aggiungi Contatto">
    </form>
  </main>
</body>
</html>
