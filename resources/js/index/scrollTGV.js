const leftTGV = document.querySelector(".left-tgv");
const rightTGV = document.querySelector(".right-tgv");
let translationValue = 0

window.addEventListener("scroll", () => {
    if (window.scrollY <= 1000) {
        translationValue = window.scrollY / 10 * 0.185
        leftTGV.style.transform = `translateX(${-translationValue-1}vw)`;
        rightTGV.style.transform = `translateX(${translationValue+1}vw)`;
    } else {
        leftTGV.style.transform = `translateX(-19.5vw)`;
        rightTGV.style.transform = `translateX(19.5vw)`;
    }
});
