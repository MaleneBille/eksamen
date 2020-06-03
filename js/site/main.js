document.addEventListener("DOMContentLoaded", function(){
    setActiveMenu(document.querySelector("h1"));
});

function setActiveMenu(selector) {
    if(!selector) {
        return;
    }

    const headingText = selector.innerHTML.toLowerCase();
    const navItems = document.querySelectorAll(".top-navigation__link");

    for (let i = 0; i < navItems.length; i++) {
        const navTitle = navItems[i].innerHTML.toLowerCase();
        if(navTitle == headingText) {
            navItems[i].classList.add("top-navigation__link--active")
        }
      }
}