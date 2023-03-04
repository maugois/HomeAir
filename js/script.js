// Scorll top
let calcScrollValue = () => {
    let scrollProgress = document.getElementById("top-scroll");
        
    let pos = document.documentElement.scrollTop;
        
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        
    let calcScrollValue = Math.round((pos * 100) / calcHeight);

    if (pos > 100) {
        scrollProgress.style.display = "grid";
    } else {
        scrollProgress.style.display = "none";
    }
    
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
};

window.onscroll = function() {
    calcScrollValue();
};
window.onload = calcScrollValue;

// Header fixo
const header = document.getElementById('area-cabecalho');
const ajuste = document.getElementById('ajuste');

document.addEventListener('scroll', function () {
    if (window.scrollY > 0 ) {
        header.classList.add('fixo');
        ajuste.classList.add('ajuste');
    } else {
        header.classList.remove('fixo');
        ajuste.classList.remove('ajuste');
    }
});

// Começo menu - bars
class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }
  
    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
}
  
const mobileNavbar = new MobileNavbar(
".mobile-menu",
"#menu nav",
"#menu nav ul",
);

mobileNavbar.init();