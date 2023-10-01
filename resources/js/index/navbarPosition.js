const header = document.querySelector("header")
const navbar = document.querySelector("header nav")

let navbarcallback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            navbar.classList.remove("nav-fixed")
        } else {
            navbar.classList.add("nav-fixed")
        }
    })
}
const options = {
    threshold: 0.1,
}
const myObserver = new IntersectionObserver(navbarcallback, options)
myObserver.observe(header)
