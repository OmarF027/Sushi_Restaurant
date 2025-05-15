<?php
include 'header.php';
?>

<!-- Link al CSS esterno -->
<link rel="stylesheet" href="css/galleria.css" />
<link rel="stylesheet" href="css/header.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/toggle.css" />
<link rel="stylesheet" href="css/offerta.css" />
<link rel="stylesheet" href="css/mediaq.css" />

<?php
$images = [
  "img/esterno.jpg",
  "img/interno.jpg",
  "img/interno2.jpg",
  "img/sala2.jpg",
  "img/angolo.jpg",
  "img/cucina.jpg",
  "img/lounge_bar.jpg",
  "img/areagiochi.jpg"
];
?>

<div class="hero">GALLERIA</div>

<div class="gallery-container">
  <div class="gallery-grid">
    <?php foreach($images as $index => $img): ?>
      <div class="gallery-item" data-index="<?= $index ?>">
        <img src="<?= $img ?>" alt="Foto <?= $index + 1 ?>" loading="lazy">
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Modal -->
<div id="modal" class="modal">
  <span class="close">&times;</span>
  <span class="prev">&#10094;</span>
  <div class="modal-content">
    <img id="modal-img" src="" alt="Immagine ingrandita">
  </div>
  <span class="next">&#10095;</span>
</div>

<script>
  window.galleryImages = <?= json_encode($images); ?>;
</script>
<script src="script.js"></script>

<?php include 'footer.php'; ?>
