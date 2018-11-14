function main() {

  if (document.querySelector("#select-setor") !== null) {
    document.querySelector("#select-setor").addEventListener("focus", paintBlack, true);
    document.querySelector("#select-setor").addEventListener("focusout", colorSelect, true);
    document.querySelector("#select-setor").addEventListener("change", colorSelect, true);
  }

  if (document.querySelector("#select-perfil") !== null) {
    document.querySelector("#select-perfil").addEventListener("focus", paintBlack, true);
    document.querySelector("#select-perfil").addEventListener("focusout", colorSelect, true);
    document.querySelector("#select-perfil").addEventListener("change", colorSelect, true);
  }

  if (document.querySelector("#select-meio")) {
    document.querySelector("#select-meio").addEventListener("focus", paintBlack, true);
    document.querySelector("#select-meio").addEventListener("focusout", colorSelect, true);
    document.querySelector("#select-meio").addEventListener("change", colorSelect, true);
  }

  if (document.querySelector("#select-especialidade") !== null) {
    document.querySelector("#select-especialidade").addEventListener("focus", paintBlack, true);
    document.querySelector("#select-especialidade").addEventListener("focusout", colorSelect, true);
    document.querySelector("#select-especialidade").addEventListener("change", colorSelect, true);
  }

  if (document.querySelector("#select-carga") !== null) {
    document.querySelector("#select-carga").addEventListener("focus", paintBlack, true);
    document.querySelector("#select-carga").addEventListener("focusout", colorSelect, true);
    document.querySelector("#select-carga").addEventListener("change", colorSelect, true);
  }

  if(document.querySelector("#input-file") !== null) {
    document.querySelector("#input-file").addEventListener("change", printFileName, true);
  }
}

function colorSelect(evt) {
  if (evt.target.value === null || evt.target.value === '') {
    evt.target.style.color = '#cacaca';
  } else {
    evt.target.style.color = '#0a0a0a';  }
}

function paintBlack(evt) {
  evt.target.style.color = '#0a0a0a';
}

function printFileName(evt) {
  if (evt.target.value !== null) {
    console.log(evt.target.value);
    document.querySelector("#holder-file").innerHTML = evt.target.value.substr(evt.target.value.lastIndexOf('\\') + 1);
    document.querySelector("#holder-file").style.color = '#0a0a0a';
  }
}

window.addEventListener("load", main);
