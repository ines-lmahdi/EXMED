// REGEX


// REGEX

function controlFirstName(){
    const firstNameValue = document.querySelector('#firstName').value;
    if(/^[A-Za-z]{2,20}$/.test(firstNameValue)){
        return true;
    } else{
        window.alert("Le nom n'est pas valide");
        return false;
    }
}

function controlLastName(){
    const lastNameValue = document.querySelector('#lastName').value;
    if(/^[A-Za-z]{2,20}$/.test(lastNameValue)){
        return true;
    } else{
        window.alert("Le nom n'est pas valide");
    }
}

function controlEmail(){
    const emailValue = document.querySelector('#email').value;
    if(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(emailValue)){
        return true;
    } else{
        window.alert("email est invalide");
    }
}

controlEmail()
controlLastName()
controlFirstName()
//http://127.0.0.1:5501/front/html/donnees.html