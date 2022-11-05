let toShowInput = document.querySelector('.toShow');
let buttons = document.querySelectorAll('.tecla');
let menu = document.querySelector('.memory');
let containerResponses = document.querySelector('.containerResults');
let createDiv = document.createElement('DIV');

let fragmentContent_principal = '';
let fragmentContent_secundario = '';
let notOneAccessParenthesis = true;
let registerEmpty = true;
let repeat = 1;

if (registerEmpty && repeat==1) {
    let empty = document.querySelector('.containerResults');
    
    repeat = 0;
    createDiv.classList.add('empty');
    createDiv.textContent = 'Está Vacio';
    empty.appendChild(createDiv);
}
buttons.forEach(element =>{
    element.addEventListener('click', ()=>{
        try {
            let content = element.textContent;
            let containsClassRed = toShowInput.classList.contains('red');
            if(containsClassRed){
                toShowInput.classList.remove('red');
                toShowInput.value = '';
                fragmentContent_principal = '';
                fragmentContent_secundario = '';
            }
            if(content == 'AC'){
                toShowInput.value = '';
                fragmentContent_principal = '';
                fragmentContent_secundario = '';

            }else if(content == '()'){
                if(notOneAccessParenthesis){
                    fragmentContent_principal += '(';
                    fragmentContent_secundario +='(';
                    toShowInput.value = fragmentContent_principal;
                    notOneAccessParenthesis = false;
                }else{
                    fragmentContent_principal += ')';
                    fragmentContent_secundario += ')';
                    toShowInput.value = fragmentContent_principal;
                    notOneAccessParenthesis = true;
                }
                
            }else if(content == '÷'){
                fragmentContent_principal += '÷';
                fragmentContent_secundario += '/';
                toShowInput.value = fragmentContent_principal;
            }else if(content == 'x'){
                fragmentContent_principal += 'x';
                fragmentContent_secundario += '*';
                toShowInput.value = fragmentContent_principal
                
            }else if(content == '←'){
                fragmentContent_principal = fragmentContent_principal.slice(0,-1);
                fragmentContent_secundario = fragmentContent_secundario.slice(0, -1);
                toShowInput.value = fragmentContent_principal;

            }else if(content == '='){
                if(toShowInput.value == ''){
                    toShowInput.value = '';
                    fragmentContent_principal = '';
                    fragmentContent_secundario = '';
                }else{
                    let numero = eval(fragmentContent_secundario);
                    let operation = fragmentContent_principal;

                    if(numero % 1 == 0){
                        toShowInput.value = eval(fragmentContent_secundario);
                        fragmentContent_principal = toShowInput.value;
                        fragmentContent_secundario = toShowInput.value;
                    }else{
                        toShowInput.value = numero.toFixed(2);
                        fragmentContent_principal = toShowInput.value;
                        fragmentContent_secundario = toShowInput.value;
                    }

                    let fragmentCreate = document.createElement('DIV');
                    let newContent = document.createTextNode(operation+' = '+fragmentContent_principal);
                    fragmentCreate.appendChild(newContent);
                    fragmentCreate.classList.add('result_item');
                    containerResponses.appendChild(fragmentCreate);
                    if(repeat == 0){
                        containerResponses.removeChild(createDiv);
                        repeat = 2;
                    }
                }
            }else{
                fragmentContent_principal += content;
                fragmentContent_secundario += content;
                toShowInput.value = fragmentContent_principal;
            }
        } catch{
            toShowInput.classList.add('red');
            toShowInput.value = 'Error de intáxis';
            notOneAccessParenthesis = true;
        }
    });
})
menu.addEventListener('click', ()=>{
    menu.classList.toggle('memory_active');
    let hasClassMemory_active = menu.classList.contains('memory_active');
    if (hasClassMemory_active) {
        containerResponses.classList.add('opacity');
    } else {
        containerResponses.classList.remove('opacity');
    }
    
})
