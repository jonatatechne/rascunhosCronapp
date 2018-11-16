let validaNome = false;
let validaSobrenome = false;
let validaEmail = false;
let validaPassword = false;
let validaTelefone = false;
let validaAceite = false;

function main() {
  if (document.querySelector("#criar-conta") !== null) {
    document.querySelector("#telefone").addEventListener("keyup", mask, true);
    document.querySelector("#senha").type = "password";
    document.querySelector("#criar-conta").disabled = true;
    document.querySelector("#formulario-conta").addEventListener("change", validForm);
    VMasker(document.querySelector("#telefone")).maskPattern("+99 99 99999-9999");
    document.querySelector("#nome").addEventListener("focusout", validNome, true);
    document.querySelector("#sobrenome").addEventListener("focusout", validSobrenome, true);
    document.querySelector("#email").addEventListener("focusout", validEmail, true);
    document.querySelector("#senha").addEventListener("focusout", validPassword, true);
    document.querySelector("#telefone").addEventListener("focusout", validTelefone, true);
    document.querySelector("#telefone").addEventListener("focusout", splitPhone, true);
    document.querySelector("#input-aceito").addEventListener("click", validAceite, true);

  }
}

function validForm() {
  if (validaNome && validaSobrenome && validaEmail && validaPassword && validaTelefone && validaAceite) {
    document.querySelector("#criar-conta").disabled = false;
  }
}

function mask(evt) {
  VMasker(evt.target).maskPattern("+99 99 99999-9999");
  if (evt.target.value.length === 16) {
    VMasker(evt.target).maskPattern("+99 99 9999-9999");
  }
}

function splitPhone(evt) {
  let numbers = evt.target.value.split(" ");
  let ddi = numbers[0].replace("+", "");
  let ddd = numbers[1];
  let number = numbers[2].replace("-", "");

  document.querySelector("#numero").value = number;
  document.querySelector("#ddd").value = ddd;
  document.querySelector("#ddi").value = ddi;

}

function validNome(evt) {
  let verify = new RegExp("^(?=.*[A-Za-z])");
  if (verify.test(evt.target.value)) {
    evt.target.style.borderColor = "#cacaca";
    document.querySelector("#erro-nome").style.display = "none";
    validaNome = true;
  } else {
  evt.target.style.borderColor = "red";
  document.querySelector("#erro-nome").style.display = "block";
  validaNome = false;
  }
}

function validSobrenome(evt) {
  let verify = new RegExp("^(?=.*[A-Za-z])");
  if (verify.test(evt.target.value)) {
    evt.target.style.borderColor = "#cacaca";
    document.querySelector("#erro-sobrenome").style.display = "none";
    validaSobrenome = true;
  } else {
  evt.target.style.borderColor = "red";
  document.querySelector("#erro-sobrenome").style.display = "block";
  validaSobrenome = false;
  }
}

function validEmail(evt) {
  let verify = new RegExp("^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$");
  if (verify.test(evt.target.value)) {
    evt.target.style.borderColor = "#cacaca";
    document.querySelector("#erro-email").style.display = "none";
    validaEmail = true;
  } else {
  evt.target.style.borderColor = "red";
  document.querySelector("#erro-email").style.display = "block";
  validaEmail = false;
  }
}

function validPassword(evt) {
  let verify = new RegExp("^(?=.*[A-Za-z])(?=.*\\d)[A-Za-z\\d^a-zA-Z0-9].{6,40}$");
  if (verify.test(evt.target.value)) {
    evt.target.style.borderColor = "#cacaca";
    document.querySelector("#erro-senha").style.display = "none";
    validaPassword = true;
  } else {
  evt.target.style.borderColor = "red";
  document.querySelector("#erro-senha").style.display = "block";
  validaPassword = false;
  }
}

function validTelefone(evt) {
  if (evt.target.value !== "") {
    evt.target.style.borderColor = "#cacaca";
    document.querySelector("#erro-telefone").style.display = "none";
    validaTelefone = true;
  } else {
  evt.target.style.borderColor = "red";
  document.querySelector("#erro-telefone").style.display = "block";
  validaTelefone = false;
  }
}

function validAceite(evt) {
  if (evt.target.checked === true) {
    validaAceite = true;
  } else {
  validaAceite = false;
  }
}

window.addEventListener("load", main);
