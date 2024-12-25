'use strict'

{
    
window.onload = function(){
    const nameInput = document.querySelector("#name");
    const emailInput = document.querySelector("#email");
    const pwInput = document.querySelector("#pw");
    const confirmPwInput = document.querySelector("#confirmPw");
    const formHandle = document.querySelector(".applicationForm");
    const requiredName = document.querySelector(".emptyName");
    const requiredEmail = document.querySelector(".emptymail");
    const requiredPw = document.querySelector(".emptyPw");
    const requiredConfirmPw = document.querySelector(".emptyConfirmPw");
    function processForm(event){
        event.preventDefault();
        //require boxes.
        const nameValue = nameInput.value;
        const emailValue = emailInput.value;
        const pwValue = pwInput.value;
        const confirmPwValue = confirmPwInput.value;
        let valid = true;
        if (nameValue === ""){
            nameInput.style.backgroundColor = "red";
            requiredName.style.fontSize = "0.8em";
            requiredName.innerHTML = "Pleae write down your name.";
            nameInput.focus();
            return false;
        }   
        if (emailValue === ""){
            emailInput.style.backgroundColor = "red";
            requiredEmail.style.fontSize = "0.8em";
            requiredEmail.innerHTML = "Pleae write down your email.";
            emailInput.focus();
            return false;
        }    
        if (pwValue === ""){
            pwInput.style.backgroundColor = "red";
            requiredPw.style.fontSize = "0.8em";
            requiredPw.innerHTML = "Pleae write down your password.";
            pwInput.focus();
            return false;
        } 
        if ( confirmPwValue === "" || confirmPwValue !== pwValue){
            confirmPwInput.style.backgroundColor = "red";
            requiredConfirmPw .style.fontSize = "0.8em";
            requiredConfirmPw .innerHTML = "Pleae write down your confirm password/match the password.";
            confirmPwInput.focus();
            return false;
        } 
    
        if (valid) {
            formHandle.submit();
        }
    }
    formHandle.addEventListener("submit", processForm);
 }
}