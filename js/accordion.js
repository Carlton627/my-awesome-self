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

//fourth set of variables
var fourthbutton = document.querySelector("#fourtharrow")
var fourthheading = document.querySelector("#fourthheading")
var fourth_chevron = fourthbutton.firstElementChild

//handling the first arrow
firstbutton.addEventListener("click", function(){
    if (first_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
        fourth_chevron.setAttribute("class","oi oi-chevron-bottom")
    } else {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})

firstheading.addEventListener("click", function(){
    if (first_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-top")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
        fourth_chevron.setAttribute("class","oi oi-chevron-bottom")
    } else {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})

//handling the second arrow
secondbutton.addEventListener("click", function(){
    if (second_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-top")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
        fourth_chevron.setAttribute("class","oi oi-chevron-bottom")
    } else {
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})

secondheading.addEventListener("click", function(){
    if (second_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-top")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
        fourth_chevron.setAttribute("class","oi oi-chevron-bottom")
    } else {
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})

//handling the third arrow
thirdbutton.addEventListener("click", function(){
    if (third_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-top")
        fourth_chevron.setAttribute("class","oi oi-chevron-bottom")
    } else {
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})

thirdheading.addEventListener("click", function(){
    if (third_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-top")
        fourth_chevron.setAttribute("class","oi oi-chevron-bottom")
    } else {
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})

//handling the fourth arrow
fourthbutton.addEventListener("click", function(){
    if (fourth_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
        fourth_chevron.setAttribute("class","oi oi-chevron-top")
    } else {
        fourth_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})

fourthheading.addEventListener("click", function(){
    if (fourth_chevron.getAttribute("class") == "oi oi-chevron-bottom") {
        first_chevron.setAttribute("class", "oi oi-chevron-bottom")
        second_chevron.setAttribute("class", "oi oi-chevron-bottom")
        third_chevron.setAttribute("class", "oi oi-chevron-bottom")
        fourth_chevron.setAttribute("class","oi oi-chevron-top")
    } else {
        fourth_chevron.setAttribute("class", "oi oi-chevron-bottom")
    }
})