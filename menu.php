<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Menu | Ristorante Namek</title>
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/menu.css" />

  <style>
main.menu-container {
  padding-top: 0 !important;
}

h1.page-title {
  margin: 0 0 60px 0 !important;
  display: block !important;
  position: relative !important;
  z-index: 10 !important;

  /* Animazione fade-in */
  opacity: 0;
  animation: fadeIn 1.5s ease forwards;
}

/* Definizione animazione fade-in */
@keyframes fadeIn {
  to {
    opacity: 1;
  }
}

  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <main class="menu-container">
    <h1 class="page-title">FORMULA ALL YOU CAN EAT</h1>

    <div class="menu-grid">
      <!-- Pranzo -->
      <div class="menu-card">
        <h2>PRANZO</h2>
        <div class="price">€14,90 / Persona</div>
        <ul class="details-list">
          <li>Il prezzo esclude dolci e bevande</li>
          <li>Bambini sotto 120cm: metà prezzo</li>
          <li>Coperto € 1,00</li>
        </ul>
        <a href="img/menu_pranzo.jpg" class="btn btn-red" target="_blank" rel="noopener noreferrer">Visualizza Menù</a>
      </div>

      <!-- Cena -->
      <div class="menu-card">
        <h2>CENA</h2>
        <div class="price">€24,90 / Persona</div>
        <ul class="details-list">
          <li>Il prezzo esclude dolci e bevande</li>
          <li>Bambini sotto 120cm: metà prezzo</li>
          <li>Coperto € 1,00</li>
        </ul>
        <a href="img/menu_cena.jpg" class="btn btn-red" target="_blank" rel="noopener noreferrer">Visualizza Menù</a>
      </div>
    </div>
  </main>

  <?php include 'footer.php'; ?>
  <script src="script.js"></script>
</body>
</html>
