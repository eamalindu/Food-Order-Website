window.addEventListener('DOMContentLoaded',()=>{
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
            radioLater.checked =  true;
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
})