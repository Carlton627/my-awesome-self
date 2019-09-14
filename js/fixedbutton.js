buttonText = document.querySelector("#textToggle")
arrows = document.querySelector(".fixed-button").firstElementChild
arrow_one = arrows.firstElementChild
arrow_two = arrows.lastElementChild

buttonText.addEventListener("mouseover", () => {
    buttonText.innerHTML = "Any Suggestions?"
    arrow_one.hidden = false
    arrow_two.hidden = false
})

buttonText.addEventListener("mouseout", () => {
    buttonText.innerHTML = "Feedback"
    arrow_two.hidden = true
    arrow_one.hidden = true
})