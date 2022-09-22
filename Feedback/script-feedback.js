function validar() {
  var nome = document.forms["feedback"]["nome"];
  if (nome.value == "") {
    nome.classList.add("erro");
    mensagem.innerHTML = "Preencha o nome";
    return false;
  } else {
    nome.classList.remove("erro");
    nome.classList.add("sucesso");
  }
}

var email = document.forms["feedback"]["email"]
if (email.value == "") {
  email.classList.add("erro");
  mensagem.innerHTML = "Preencha com e-mail válido";
  return false;
} else {
  email.classList.remove("erro");
  email.classList.add("sucesso");
}




const imagensCarrossel = document.getElementById("imagens");
const imagemUnicaCarrossel = document.querySelectorAll("#imagens img");


let idx = 0; 

function carrossel(){
    idx++; 

    if(idx > imagemUnicaCarrossel.length - 1){
        idx = 0;
    }

    imagensCarrossel.style.transform = `translateX(${-idx * 755}px)`; 
}

setInterval(carrossel, 2800);


