const topbtn = document.querySelector(".toTop-fixed-button")
const toparrow = topbtn.lastElementChild

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 400) {
        topbtn.style.display = "block"
    } else {
        topbtn.style.display = "none"
    }
})

