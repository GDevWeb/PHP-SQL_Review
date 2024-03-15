// Ajoutez la validation côté client pour les champs obligatoires (Nom, Prénom, Adresse email) en utilisant du JavaScript.

const formResume = document.querySelector("form#formResume")

const inputFname = document.querySelector("input#fName");
const errorInputMessageFname = document.querySelector(".errorInputMessage.Fname");

const inputLname = document.querySelector("input#lName");
const errorInputMessageLname = document.querySelector(".errorInputMessage.Lname");

const inputEmail = document.querySelector("input#email");
const errorInputMessageEmail = document.querySelector(".errorInputMessage.email");

const inputTelephone = document.querySelector("input#telephone");
const errorInputMessagePhone = document.querySelector(".errorInputMessage.telephone");

const inputFile = document.querySelector("input#file");
const errorInputMessageFile = document.querySelector(".errorInputMessage.file");

// handle inputError :
formResume.addEventListener("submit", (e)=> {
    e.preventDefault()
    
    const regexText = /^[a-zA-Zä-ÿ\s]{2,12}$/;
    if(!regexText.test(inputFname.value.trim())){
        errorInputMessageFname.textContent = "Veuillez correctement remplir le champ prénom";
        return;
    }
    
    if(!regexText.test(inputLname.value.trim())){
        errorInputMessageLname.textContent = "Veuillez correctement remplir le champ nom";
        return;
    }
    
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!regexEmail.test(inputEmail.value.trim())){
        errorInputMessageEmail.textContent = "Veuillez saisir une adresse mail valide !";
        return;
    }

    const regexPhone = /^[0-9]{10}$/;
    if(!regexPhone.test(inputTelephone.value)){
        errorInputMessagePhone.textContent = "Veuillez saisir un numéro de téléphone Fr";
        return;
    }
    
    if(inputFile.value === ""){
        errorInputMessageFile.textContent = "Veuillez téléverser votre C.V";
        return;
    }

    formResume.submit();
})
