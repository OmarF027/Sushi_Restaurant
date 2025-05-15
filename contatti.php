<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Contatti - Sakura Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header><!-- Come index.php --></header>

    <section class="contact-section">
        <div class="contact-info">
            <h2>📍 Come trovarci</h2>
            <p>Via Oriente 12, Città</p>
            <div class="map">
                <iframe 
                    src="https://www.google.com/maps/embed?..." 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="">
                </iframe>
            </div>
        </div>

        <div class="contact-form">
            <h2>📬 Prenota un tavolo</h2>
            <form>
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="Email" required>
                <input type="tel" placeholder="Telefono" required>
                <textarea placeholder="Messaggio"></textarea>
                <button type="submit">Invia Prenotazione</button>
            </form>
        </div>
    </section>

    <footer><!-- Come index.php --></footer>
</body>
</html>