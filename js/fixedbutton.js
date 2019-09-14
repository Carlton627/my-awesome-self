buttonText = document.querySelector("#textToggle")
button = document.querySelector(".fixed-button")
arrows = button.firstElementChild
arrow_one = arrows.firstElementChild
arrow_two = arrows.lastElementChild

button.addEventListener("mouseover", () => {
    buttonText.innerHTML = "Any Suggestions?"
    arrow_one.hidden = false
    arrow_two.hidden = false
})

button.addEventListener("mouseout", () => {
    buttonText.innerHTML = "Feedback"
    arrow_two.hidden = true
    arrow_one.hidden = true
})