// first set of variables
var firstbutton = document.querySelector("#firstarrow")
var firstheading = document.querySelector("#firstheading")
var first_chevron = firstbutton.firstElementChild

//second set of variables
var secondbutton = document.querySelector("#secondarrow")
var secondheading = document.querySelector("#secondheading")
var second_chevron = secondbutton.firstElementChild

//third set of variables
var thirdbutton = document.querySelector("#thirdarrow")
var thirdheading = document.querySelector("#thirdheading")
var third_chevron = thirdbutton.firstElementChild

//handling the first arrow
firstbutton.addEventListener("click", function(){
    if (first_chevron.getAttribute("class") == "oi oi-chevron-top") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-top")
        third_chevron.setAttribute("class", "oi oi-chevron-top")
    } else {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
    }
})

firstheading.addEventListener("click", function(){
    if (first_chevron.getAttribute("class") == "oi oi-chevron-top") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-top")
        third_chevron.setAttribute("class", "oi oi-chevron-top")
    } else {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
    }
})

//handling the second arrow
secondbutton.addEventListener("click", function(){
    if (second_chevron.getAttribute("class") == "oi oi-chevron-top") {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-top")
    } else {
        second_chevron.setAttribute("class", "oi oi-chevron-top")
    }
})

secondheading.addEventListener("click", function(){
    if (second_chevron.getAttribute("class") == "oi oi-chevron-top") {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-top")
    } else {
        second_chevron.setAttribute("class", "oi oi-chevron-top")
    }
})

//handling the third arrow
thirdbutton.addEventListener("click", function(){
    if (third_chevron.getAttribute("class") == "oi oi-chevron-top") {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
        second_chevron.setAttribute("class", "oi oi-chevron-top")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
    } else {
        second_chevron.setAttribute("class", "oi oi-chevron-top")
    }
})

thirdheading.addEventListener("click", function(){
    if (third_chevron.getAttribute("class") == "oi oi-chevron-top") {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
        second_chevron.setAttribute("class", "oi oi-chevron-top")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
    } else {
        third_chevron.setAttribute("class", "oi oi-chevron-top")
    }
})