let isDark = false;

if (getCookie("theme") === "dark"){
    isDark = true
    setDarkTheme()
} else {
    isDark = false
    setLightTheme()
}

document.querySelector('.theme-change').onclick = function() {
    isDark = !isDark;
    if (isDark){
        document.cookie = "theme=white; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        const expirationDate = new Date();
        expirationDate.setDate(expirationDate.getDate() + 7);
        document.cookie = "theme=dark; expires="+ expirationDate.toUTCString() +"; path=/";
        setDarkTheme()
    } else {
        document.cookie = "theme=dark; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        const expirationDate = new Date();
        expirationDate.setDate(expirationDate.getDate() + 7);
        document.cookie = "theme=white; expires="+ expirationDate.toUTCString() +"; path=/";
        setLightTheme();
    }
}
function setLightTheme(){
    document.querySelectorAll(".light-theme-icon").forEach(element => {
        element.classList.remove("hidden-button")
    });
    document.querySelectorAll(".dark-theme-icon").forEach(element => {
        element.classList.add("hidden-button")
    });
}
function setDarkTheme(){
    document.querySelectorAll(".light-theme-icon").forEach(element => {
        element.classList.add("hidden-button")
    });
    document.querySelectorAll(".dark-theme-icon").forEach(element => {
        element.classList.remove("hidden-button")
    });
}
function getCookie(name) {
    const cookieString = decodeURIComponent(document.cookie);
    const cookieArray = cookieString.split('; ');

    for (let i = 0; i < cookieArray.length; i++) {
        const cookie = cookieArray[i].split('=');
        if (cookie[0] === name) {
            return cookie[1];
        }
    }

    return null; // Si le cookie n'est pas trouvé
}
