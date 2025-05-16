<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menù - Namek</title>
  <style>
    :root {
      --primary-bg: #0a0a0a;
      --card-bg: #1a1a1a;
      --accent-red: #aa1f24;
      --accent-yellow: #ffb300;
      --text-primary: #f0f0f0;
      --text-secondary: #cccccc;
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', system-ui, sans-serif;
      background-color: var(--primary-bg);
      color: var(--text-primary);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }

    /* Assicuriamoci che header/nav non aggiungano spazio */
    header, nav {
      margin-bottom: 0 !important;
      padding-bottom: 0 !important;
    }

    /* H1: TUTTO inline, senza margini in CSS */
    h1.page-title {
      position: relative;
      background-color: #000;
      color: white;
      text-transform: uppercase;
      font-family: 'Poppins', sans-serif;
      font-size: 3rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-align: center;
      line-height: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding-bottom: 10px; /* distanza sotto */
      /* NIENTE margin-top qui! */
    }

    .menu-container {
      max-width: 1440px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .menu-card {
      background: var(--card-bg);
      border-radius: 16px;
      padding: 1.5rem;
      border: 1px solid var(--accent-red);
      transition: var(--transition);
    }

    .menu-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 24px rgba(170, 31, 36, 0.3);
    }

    .menu-card h2 {
      color: var(--accent-red);
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .price {
      font-size: 1.5rem;
      color: var(--text-primary);
      margin: 1rem 0;
      font-weight: 700;
    }

    .details-list {
      list-style: none;
      margin: 1rem 0;
    }

    .details-list li {
      padding: 0.5rem 0;
      color: var(--text-secondary);
      font-size: 0.9rem;
    }

    .takeaway-card {
      background: var(--card-bg);
      border-radius: 16px;
      padding: 1.5rem;
      border: 1px solid var(--accent-yellow);
      transition: var(--transition);
    }

    .takeaway-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 24px rgba(255, 179, 0, 0.2);
    }

    .btn {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
      border-radius: 8px;
      text-decoration: none;
      transition: var(--transition);
    }

    .btn-red {
      background: var(--accent-red);
      color: #fff;
    }

    .btn-red:hover {
      background: #8a191d;
      transform: translateY(-2px);
    }

    .btn-yellow {
      background: var(--accent-yellow);
      color: #000;
    }

    .btn-yellow:hover {
      background: #e0a100;
      transform: translateY(-2px);
    }

    @media (max-width: 768px) {
      .menu-container {
        padding: 0 0.5rem;
      }
      .menu-card,
      .takeaway-card {
        padding: 1rem;
      }
      .menu-card h2 {
        font-size: 1.3rem;
      }
      .price {
        font-size: 1.3rem;
      }
      h1.page-title {
        font-size: 2rem;
        padding-bottom: 10px;
      }
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <main class="menu-container">
    <!-- INLINE FORZATO PER I 5px DI DISTANZA DALLA NAVBAR -->
    <h1 class="page-title" style="margin-top: 5px !important;">FORMULA ALL YOU CAN EAT</h1>

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
        <a href="#" class="btn btn-red">Visualizza Menù</a>
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
        <a href="#" class="btn btn-red">Visualizza Menù</a>
      </div>
    </div>

    <!-- Take Away -->
    <div class="takeaway-card">
      <h2 style="color: var(--accent-yellow); margin-bottom: 1rem;">TAKE AWAY</h2>
      <p style="color: var(--text-secondary); margin-bottom: 1rem;">Ordina comodamente da casa tramite Glovo</p>
      <a href="#" class="btn btn-yellow">Ordina Ora</a>
    </div>
  </main>

  <script src="script.js"></script>
  <?php include 'footer.php'; ?>
</body>
</html>
