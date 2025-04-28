
let senha = document.getElementById('senha');
let senhaC = document.getElementById('verificar_senha');

function validarSenha() {
  if (senha.value != senhaC.value) {
    senhaC.setCustomValidity("Senhas diferentes!");
    senhaC.reportValidity();
    return false;
  } else {
    senhaC.setCustomValidity("");
    return true;
  }
}
senhaC.addEventListener('input', validarSenha);