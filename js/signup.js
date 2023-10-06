window.addEventListener('DOMContentLoaded',()=> {
    AOS.init();

    const textEmail = document.querySelector('#textEmail');
    const spanEmail = document.querySelector('#spanEmail')
    const textPassword = document.querySelector('#textPassword');
    const spanPassword = document.querySelector('#spanPassword');
    const textConfirm = document.querySelector('#textConfirm');
    const spanConfirm = document.querySelector('#spanConfirm');

    textEmail.addEventListener('focus', () => {
        spanEmail.classList.remove('text-white');
        spanEmail.style.color = '#ff5d1c';
        spanEmail.style.borderColor = '#ff5d1c';
    });

    textEmail.addEventListener('focusout', () => {
        spanEmail.classList.add('text-white');
        spanEmail.style.borderColor = 'white';
    });

    textPassword.addEventListener('focus', () => {
        spanPassword.classList.remove('text-white');
        spanPassword.style.color = '#ff5d1c';
        spanPassword.style.borderColor = '#ff5d1c';
    });

    textPassword.addEventListener('focusout', () => {
        spanPassword.classList.add('text-white');
        spanPassword.style.borderColor = 'white';
    });

    textConfirm.addEventListener('focus', () => {
        spanConfirm.classList.remove('text-white');
        spanConfirm.style.color = '#ff5d1c';
        spanConfirm.style.borderColor = '#ff5d1c';
    });

    textConfirm.addEventListener('focusout', () => {
        spanConfirm.classList.add('text-white');
        spanConfirm.style.borderColor = 'white';
    });

    textConfirm.addEventListener('keyup',()=>{
        if(textConfirm.value !== textPassword.value){
            textConfirm.style.border = '1px solid red';
            textConfirm.style.setProperty('background-color', 'rgba(255,0,0,0.1)', 'important');

            textPassword.style.border = '1px solid red';
            textPassword.style.setProperty('background-color', 'rgba(255,0,0,0.1)', 'important');
        }
        else{
            textConfirm.style.border = '1px solid green';
            textConfirm.style.setProperty('background-color', 'rgba(0,255,0,0.1)', 'important');

            textPassword.style.border = '1px solid green';
            textPassword.style.setProperty('background-color', 'rgba(0,255,0,0.1)', 'important');
        }
    });


});