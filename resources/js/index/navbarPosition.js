const header = document.querySelector("header")
const navbar = document.querySelector("header nav")

let navbarcallback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            navbar.style.opacity = 0;
        } else {
            navbar.style.opacity = 1;
        }
    })
}
const options = {
    threshold: 0.07,
}
const myObserver = new IntersectionObserver(navbarcallback, options)
myObserver.observe(header)
