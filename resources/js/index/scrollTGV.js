const leftTGV = document.querySelector(".left-tgv");
const rightTGV = document.querySelector(".right-tgv");

window.addEventListener("scroll", () => {
    // Récupérer la valeur du scroll
    const scrollValue = window.scrollY;

    // Limiter la valeur du scroll entre 0 et 300vh
    const limitedScrollValue = Math.min(Math.max(scrollValue, 0), 200 * window.innerHeight);

    // Convertir la valeur du scroll en une valeur de translation (0 à 40vw)
    const translationValue = (limitedScrollValue / (200 * window.innerHeight)) * 70 * 100;

    // Appliquer la transformation à l'image
    leftTGV.style.transform = `translateX(${-translationValue-1}vw)`;
    rightTGV.style.transform = `translateX(${translationValue+1}vw)`;
});
