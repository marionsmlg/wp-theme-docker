import "./index.css";

window.addEventListener("DOMContentLoaded", () => {
    const menuToggleButton = document.getElementById("menuToggleButton");
    menuToggleButton.addEventListener("click", () => {
      if (menuToggleButton.dataset.menuIsOpen === "false") {
        openMenu();
      } else {
        closeMenu();
      }
    });
    // Fonction pour vérifier la taille de l'écran
    const checkScreenSize = () => {
        if (window.innerWidth > 640) {
            closeMenu();
        }
    };

    // Écouteur pour vérifier la taille de l'écran lors du chargement de la page
    checkScreenSize();

    // Écouteur pour vérifier la taille de l'écran lors du redimensionnement
    window.addEventListener("resize", checkScreenSize);
  
    function closeMenu() {
      document.getElementById("mobile-menu").style.display = "none";
      document.getElementById("burger").style.display = "block";
      document.getElementById("cross").style.display = "none";
      menuToggleButton.dataset.menuIsOpen = "false";
    }
  
    function openMenu() {
      document.getElementById("mobile-menu").style.display = "block";
      document.getElementById("burger").style.display = "none";
      document.getElementById("cross").style.display = "block";
      menuToggleButton.dataset.menuIsOpen = "true";
    }

  
    // Compteur chiffres
    
    const counters = document.querySelectorAll('[id^="counter"]');
    const speed = 1000; 
    
    // Options de l'Intersection Observer
    const options = {
        threshold: 0.5 // La fonction sera appelée lorsque 50% de la section est visible
    };
    
    const callback = (entries, observer) => {

        for (const entry of entries){
            if (entry.isIntersecting) {
                const target = +entry.target.innerText;
                let count = 0;
                const inc = target / (speed / 16); // 16 est le nombre de millisecondes entre chaque rafraîchissement de la fonction setTimeout
    
                function updateCount () {
                    if (count < target) {
                        entry.target.innerText = Math.ceil(count);
                        count += inc;
                        setTimeout(updateCount, 16); // Rafraîchir toutes les 16 millisecondes (pour une animation fluide)
                    } else {
                        entry.target.innerText = target;
                    }
                };
    
                updateCount();
                observer.unobserve(entry.target); // Arrête d'observer cette entrée une fois que le compteur a été démarré
            }
        }
      
    };
    
    // Initialiser l'Observer
    const observer = new IntersectionObserver(callback, options);
    
    // Observer chaque compteur

    for(const counter of counters){
        observer.observe(counter);
    }
  
    


// Slider

const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

// Fonction pour afficher le slide actif
function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
}

// Fonction pour passer au slide suivant
function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

// Afficher la première image au chargement de la page
showSlide(currentIndex);

// Changer de slide toutes les 4 secondes
setInterval(nextSlide, 4000);


  });




