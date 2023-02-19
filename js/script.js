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

const header = document.getElementById('area-cabecalho');

document.addEventListener('scroll', function () {
    if (window.scrollY > 0 ) {
        header.classList.add('fixo');
    } else {
        header.classList.remove('fixo');
    }
});