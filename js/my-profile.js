window.addEventListener('DOMContentLoaded',()=>{
    const textEmailUser = document.querySelector('#textEmailUser');
    const textFullName = document.querySelector('#textFullName');
    const btnUpdateProfile =  document.querySelector('#btnUpdateProfile');
    const btnUpdatePassword =  document.querySelector('#btnUpdatePassword');

    btnUpdatePassword.disabled = true;
    btnUpdateProfile.disabled = true;

    textEmailUser.addEventListener('click',()=>{

        showAlert('Email Cannot be Changed !','bg-danger');
    });
});