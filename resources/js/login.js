const pass1 = document.getElementById('pass1');
const pass2 = document.getElementById('pass2');
const registrar = document.getElementById('registrar');

registrar.addEventListener('click', function (e) {

    if (pass1.value != pass2.value) {
        alert("As senhas estão diferentes");
        console.log("As senhas estão diferentes");
        return false
    }

    if(pass1.value.length < 6){
        alert("A senha deve conter no mínimo 6 caracteres");
        return false
    }

    if(pass2.value.length < 6){
        alert("A senha deve conter no mínimo 6 caracteres");
        e.preventDefault();
        return false
    }
})
