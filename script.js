document.addEventListener('DOMContentLoaded', function () {
    // Toggle menu (funzionante)
    const menuToggle = document.getElementById('menuToggle');
    const navigation = document.getElementById('main-navigation');
    
    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function () {
            const isOpen = menuToggle.classList.toggle('open');
            navigation.classList.toggle('open');
            menuToggle.setAttribute('aria-expanded', isOpen);
        });

        document.addEventListener('click', function (e) {
            if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
                menuToggle.classList.remove('open');
                navigation.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // Galleria modal
    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");
    const closeBtn = document.querySelector(".close");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    const galleryItems = document.querySelectorAll(".gallery-item");
    
    if (modal && modalImg && closeBtn && prevBtn && nextBtn && window.galleryImages) {
        let currentIndex = 0;

        const openModal = (index) => {
            currentIndex = index;
            modal.style.display = "block";
            modalImg.src = window.galleryImages[currentIndex];
        };

        const closeModal = () => {
            modal.style.display = "none";
        };

        const showPrev = () => {
            currentIndex = (currentIndex === 0) ? window.galleryImages.length - 1 : currentIndex - 1;
            modalImg.src = window.galleryImages[currentIndex];
        };

        const showNext = () => {
            currentIndex = (currentIndex === window.galleryImages.length - 1) ? 0 : currentIndex + 1;
            modalImg.src = window.galleryImages[currentIndex];
        };

        // Aggiungi event listeners
        galleryItems.forEach((item, index) => {
            item.addEventListener("click", () => openModal(index));
        });

        closeBtn.addEventListener("click", closeModal);
        prevBtn.addEventListener("click", showPrev);
        nextBtn.addEventListener("click", showNext);

        // Chiudi cliccando fuori
        window.addEventListener("click", (e) => {
            if (e.target === modal) closeModal();
        });

        // Navigazione con tastiera
        window.addEventListener("keydown", (e) => {
            if (modal.style.display === "block") {
                if (e.key === "ArrowLeft") showPrev();
                if (e.key === "ArrowRight") showNext();
                if (e.key === "Escape") closeModal();
            }
        });
    } else {
        console.error("Mancano alcuni elementi necessari per la galleria");
    }
});

