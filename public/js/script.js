burger = document.querySelector('.burger');
myLinks = document.querySelector('.my-links');
nav = document.querySelector('nav');

burger.addEventListener('click', () => {
    myLinks.classList.toggle('v-class-resp');
    if (nav.style.display == "block") {
        nav.style.display = "none"
    } else {
        nav.style.display = "block"
    }
});

// script  for label

document.addEventListener('DOMContentLoaded', function () {
    const inputFields = document.querySelectorAll('.tab .input-field input');

    inputFields.forEach(function (inputField) {
        inputField.addEventListener('input', function () {
            const hasContent = inputField.value.trim() !== '';
            inputField.closest('.input-field').classList.toggle('has-content', hasContent);
        });
    });
})

window.onscroll = function () { myFunction() };

var navbar = document.querySelector(".header-main-container");
var main = document.querySelector(".main-section");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky")
        main.style.marginTop = "64px";
    } else {
        navbar.classList.remove("sticky");
        main.style.marginTop = "0";
    }
}


var countryInput = document.getElementById('country');
var popup = document.querySelector(".popup");
var cross = document.querySelector(".fa-xmark");

countryInput.addEventListener('click', function () {
    popup.style.display = "block";

});

cross.addEventListener('click', function () {
    popup.style.display = "none";
});

