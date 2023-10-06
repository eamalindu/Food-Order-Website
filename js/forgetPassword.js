window.addEventListener('DOMContentLoaded',()=> {
    AOS.init();

    const textEmail = document.querySelector('#textEmail');
    const spanEmail = document.querySelector('#spanEmail');

    textEmail.addEventListener('focus', () => {
        spanEmail.classList.remove('text-white');
        spanEmail.style.color = '#ff5d1c';
        spanEmail.style.borderColor = '#ff5d1c';
    });

    textEmail.addEventListener('focusout', () => {
        spanEmail.classList.add('text-white');
        spanEmail.style.borderColor = 'white';
    });

});