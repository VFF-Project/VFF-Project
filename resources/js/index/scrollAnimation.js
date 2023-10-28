const whoarewe = document.querySelector("#whoarewe")
const maps = document.querySelector("#maps")

const calback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove("noTranslate")
            setTimeout(() =>{
            entry.target.classList.add("animate")
            }, 20)
        }
    })
}
const options = {
    threshold: 0.5,
}
const whoareweObserver = new IntersectionObserver(calback, options)
whoareweObserver.observe(whoarewe)
const mapsObserver = new IntersectionObserver(calback, options)
mapsObserver.observe(maps)
