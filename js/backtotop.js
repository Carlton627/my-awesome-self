const topbtn = document.querySelector(".toTop-fixed-button")
const toparrow = topbtn.lastElementChild

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 400) {
        topbtn.style.display = "block"
    } else {
        topbtn.style.display = "none"
    }
})

var width = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

if (width < 973) {
    toparrow.hidden = false
} else {
    topbtn.addEventListener("mouseover", () => {
        toparrow.hidden = false
    }) 
    topbtn.addEventListener("mouseout", () => {
        toparrow.hidden = true
    })    
}