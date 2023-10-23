document.querySelector(".scroll-button").addEventListener('click', function () {
    window.scrollTo({
        top: window.innerHeight * 2 - 130,
        behavior: 'smooth'
    })
});
