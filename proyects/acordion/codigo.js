const listElements = document.querySelectorAll('label');
const icon = document.querySelectorAll('.icono');

listElements.forEach((listElement, i )=> {
    listElements[i].addEventListener('click', ()=>{
        icon.forEach((clases)=>{
            clases.classList.remove('icono--identificador');
        })
        icon[i].classList.add('icono--identificador');
    })
})
