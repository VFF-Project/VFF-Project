const header = document.querySelector("header")
const background = document.querySelector("header .header-background")
const navbar = document.querySelector("header nav")
let isIn = false

let navbarcallback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            navbar.style.opacity = 0;
            background.style.position = 'sticky';
            isIn = false
        } else {
            navbar.style.opacity = 1;
            isIn = true
            setTimeout(() => {
                if(isIn === true) {
                    background.style.position = 'relative';
                }
            }, 1000)
        }
    })
}
const options = {
    threshold: 0.07,
}
const myObserver = new IntersectionObserver(navbarcallback, options)
myObserver.observe(header)
