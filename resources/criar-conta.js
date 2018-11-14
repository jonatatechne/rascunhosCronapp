function main() {
  if (document.querySelector("#criar-conta") !== null) {
    document.querySelector("#telefone").addEventListener("keyup", mask, true);
    document.querySelector("#criar-conta").addEventListener("click", validForm, true);
    document.querySelector("#senha").type = "password";
    VMasker(document.querySelector("#telefone")).maskPattern("+99 99 99999-9999");
  }
}

function mask(evt) {
  VMasker(evt.target).maskPattern("+99 99 99999-9999");
  if (evt.target.value.length === 16) {
    VMasker(evt.target).maskPattern("+99 99 9999-9999");
  }
}

function validForm() {
  if (document.querySelector("#telefone").value.length < 16) {
    return false;
  }
  return true;
}


window.addEventListener("load", main);
