window.addEventListener('DOMContentLoaded',()=>{
    AOS.init();

    const textEmail = document.querySelector('#textEmail');
    const spanEmail = document.querySelector('#spanEmail')
    const textPassword = document.querySelector('#textPassword');
    const spanPassword = document.querySelector('#spanPassword')

    textEmail.addEventListener('focus',()=>{
        spanEmail.classList.remove('text-white');
        spanEmail.style.color = '#ff5d1c';
        spanEmail.style.borderColor = '#ff5d1c';
    });

    textEmail.addEventListener('focusout',()=>{
        spanEmail.classList.add('text-white');
        spanEmail.style.borderColor = 'white';
    });

    textPassword.addEventListener('focus',()=>{
        spanPassword.classList.remove('text-white');
        spanPassword.style.color = '#ff5d1c';
        spanPassword.style.borderColor = '#ff5d1c';
    });

    textPassword.addEventListener('focusout',()=>{
        spanPassword.classList.add('text-white');
        spanPassword.style.borderColor = 'white';
    });

    const radioLater = document.querySelector('#radioLater');
    const radioNow = document.querySelector('#radioNow');
    const divLater = document.querySelector('#divLater');

    radioLater.addEventListener('change',()=>{
        if(radioLater.checked===true){
            divLater.classList.remove('hidden');
        }
    });

    radioNow.addEventListener('change',()=>{
        if(radioNow.checked===true){
            divLater.classList.add('hidden');
        }
    });

    const divWhere = document.querySelector('#divWhere');
    const paraWhere = document.querySelector('#paraWhere');
    const radioPickup = document.querySelector('#radioPickup');
    const radioDelivery = document.querySelector('#radioDelivery');
    const radioDineIn = document.querySelector('#radioDineIn');

    radioDineIn.addEventListener('change',()=>{
        if(radioDineIn.checked===true){
            divWhere.classList.add('hidden');
            paraWhere.classList.add('hidden');
        }
    });

    radioPickup.addEventListener('change',()=>{
        if(radioPickup.checked===true){
            divWhere.classList.add('hidden');
            paraWhere.classList.add('hidden');
        }
    });

    radioDelivery.addEventListener('change',()=>{
        if(radioDelivery.checked===true){
            divWhere.classList.remove('hidden');
            paraWhere.classList.remove('hidden');
        }
    });

});

$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
            $('#navbar').css('opacity', '0.9');
        } else {
            $('#back-to-top').fadeOut();
            $('#navbar').css('opacity', '1');
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});