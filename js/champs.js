//Implémenter le JS de ma page

const inputPseudo = document.getElementById("pseudo");
const inputMessage = document.getElementById("message");
const inputMail = document.getElementById("email");


inputNom.addEventListener("keyup", validateForm);
inputMessage.addEventListener("keyup", validateForm);
inputMail.addEventListener("keyup", validateForm);


//Function permettant de valider tout le formulaire
function validateForm() {
    validateRequired(inputNom);
    validateRequired(inputPreNom);
}

function validateRequired(input) {
    if (input.value != '') {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
    }
    else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
    }
}