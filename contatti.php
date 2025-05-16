<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Contatti - Namek</title>
    <style>
      .map-card, .info-card {
        transition: 
          transform 0.5s cubic-bezier(0.4, 0, 0.2, 1),
          box-shadow 0.5s cubic-bezier(0.4, 0, 0.2, 1),
          filter 0.3s ease;
        cursor: default; 
        will-change: transform, box-shadow;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        border-radius: 12px;
        background: white;
        overflow: visible;
      }

      .map-card:hover, .info-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12), 0 0 12px rgba(0, 0, 0, 0.04);
        filter: brightness(1.04);
}
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<link rel="stylesheet" href="css/header.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/contatti.css" />

<section class="hero">
  <h1>CONTATTI</h1>
</section>

<div class="contact-grid">
    <!-- Mappa -->
    <div class="map-card">
      <h3 class="section-title" style="display: flex; align-items: center;">
        <i class="fas fa-map-marker-alt" style="align-self: center;"></i>
        <span style="margin-left: 10px;">Dove ci trovi</span>
      </h3>
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.899256376325!2d11.1105!3d42.7637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d574e0d0228e9f%3A0x99e1c9b94b72702!2sGrosseto!5e0!3m2!1sit!2sit!4v1683234670654!5m2!1sit!2sit"
          allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <!-- Info -->
    <div class="info-card">
      <h3 class="section-title" style="display: flex; align-items: center;">
        <i class="fas fa-calendar-alt" style="align-self: center;"></i>
        <span style="margin-left: 10px;">Prenota un tavolo</span>
      </h3>
      <div class="contact-info">
        <div class="info-item" style="display: flex; align-items: flex-start;">
          <i class="fas fa-map-pin" style="margin-top: 3px;"></i>
          <p style="margin-left: 10px;">58100 Grosseto (GR)<br>Toscana, Italia</p>
        </div>
        <div class="info-item" style="display: flex; align-items: flex-start;">
          <i class="fas fa-clock" style="margin-top: 3px;"></i>
          <p style="margin-left: 10px;"><strong>Orari di apertura:</strong><br>
            Pranzo: 12:00 – 15:00 <br>
            Cena: 19:00 – 23:00<br>
            Lunedì: Chiuso
          </p>
        </div>
        <div class="info-item" style="display: flex; align-items: flex-start;">
          <i class="fas fa-phone-alt" style="margin-top: 3px;"></i>
          <p style="margin-left: 10px;"><a href="tel:+390564234567" class="hover-underline">+39 0564 234567</a></p>
        </div>
        <div class="info-item" style="display: flex; align-items: flex-start;">
          <i class="fas fa-envelope" style="margin-top: 3px;"></i>
          <p style="margin-left: 10px;"><a href="mailto:info@namekgrosseto.com" class="hover-underline">info@namekgrosseto.com</a></p>
        </div>
      </div>
    </div>
</div>

<script src="script.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>