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

    const counters = document.querySelectorAll('[id^="counter"]');
    const speed = 500; 
    
    for (const counter of counters){

        const target = +counter.innerText; // Valeur finale du compteur
        let count = 0; // Valeur initiale du compteur
    
        const inc = target / speed;
    
       function updateCount () {
            if (count < target) {
                counter.innerText = Math.ceil(count);
                count += inc;
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };
    
        updateCount();
    }
  
 
    
    





  });




