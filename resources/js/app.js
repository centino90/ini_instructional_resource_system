require('./bootstrap');

require('alpinejs');

window.onscroll = function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("app__header").style = "opacity: .9"
    } else {
        document.getElementById("app__header").style = "opacity: 1"
    }
};

let appMenuClickCount = 0;
document.getElementById("app__menu-btn").addEventListener("click", function () {
    appMenuClickCount++
    document.querySelector("html").classList.toggle("app__sidebar-left-toggled")
})