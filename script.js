document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const navigation = document.getElementById('main-navigation');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function () {
            const isOpen = menuToggle.classList.toggle('open');
            navigation.classList.toggle('open');
            menuToggle.setAttribute('aria-expanded', isOpen);
        });

        // Chiudi il menu cliccando fuori
        document.addEventListener('click', function (e) {
            if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
                menuToggle.classList.remove('open');
                navigation.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
});
