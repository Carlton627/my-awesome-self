button = document.querySelector(".feedback-fixed-button")
first_arrow = button.firstElementChild
second_arrow = button.lastElementChild

button.addEventListener("mouseover", () => {
    first_arrow.hidden = false
    second_arrow.hidden = false
})
button.addEventListener("mouseout", () => {
    first_arrow.hidden = true
    second_arrow.hidden = true
})