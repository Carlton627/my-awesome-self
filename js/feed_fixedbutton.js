button = document.querySelector(".feedback-fixed-button")
button_text = document.querySelector("#textTogglefeed")
first_arrow = button.firstElementChild
second_arrow = button.lastElementChild

button.addEventListener("mouseover", () => {
    button_text.innerHTML = "Any Suggestions?"
    first_arrow.hidden = false
    second_arrow.hidden = false
})
button.addEventListener("mouseout", () => {
    button_text.innerHTML = "Feedback"
    first_arrow.hidden = true
    second_arrow.hidden = true
})