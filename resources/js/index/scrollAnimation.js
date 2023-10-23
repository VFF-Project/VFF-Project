const whoarewe = document.querySelector("#whoarewe")

const whoarewecallback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("animate")
        }
    })
}
const options = {
    threshold: 0.5,
}
const myObserver = new IntersectionObserver(whoarewecallback, options)
myObserver.observe(whoarewe)
