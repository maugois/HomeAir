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