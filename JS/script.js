const slide = ["img/IMG-20240605-WA0010.png", "img/IMG-20240605-WA0020.png", "img/IMG-20240605-WA0023.png", "img/IMG-20240605-WA0030.png"];

let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    let imgElement = document.getElementById("slide");
    imgElement.classList.add("fade");
    setTimeout(() => {
        imgElement.src = slide[numero];
        setTimeout(() => {
            imgElement.classList.remove("fade");
        }, 50);
    }, 1000);
}

setInterval("ChangeSlide(1)", 4000);