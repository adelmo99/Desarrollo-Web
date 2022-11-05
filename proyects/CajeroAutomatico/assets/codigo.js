let id_numTarjeta = document.getElementById('numTarjeta');
let id_documemto_campo = document.getElementById('documento');
let id_clave = document.getElementById('clave');
let id_btnEntrar = document.getElementById('entrar');
let select_documento = document.getElementById('documentoSelecionado');
let formulario_id = document.getElementById('formulario_id');

if(id_numTarjeta || id_documemto_campo || id_clave || id_btnEntrar){
    id_numTarjeta.addEventListener('input', ()=>{
        tarjeta(id_numTarjeta);
        id_numTarjeta.classList.remove('error');
        id_documemto_campo.classList.remove('error');
        id_clave.classList.remove('error');
    })
    id_numTarjeta.addEventListener('keyup', (e)=>{     
        if (e.key == 'Backspace') {
            if(id_numTarjeta.value.charAt(id_numTarjeta.value.length-1) == ' '){
                id_numTarjeta.value = id_numTarjeta.value.slice(0, -1);
                id_numTarjeta.classList.remove('error');
                id_documemto_campo.classList.remove('error');
                id_clave.classList.remove('error');
            }
        }
    })
    id_documemto_campo.addEventListener('input', ()=>{
        id_numTarjeta.classList.remove('error');
        id_documemto_campo.classList.remove('error');
        id_clave.classList.remove('error');
        tipos_Documentos(select_documento.value, id_documemto_campo);
    })
    id_clave.addEventListener('input', ()=>{
        id_numTarjeta.classList.remove('error');
        id_documemto_campo.classList.remove('error');
        id_clave.classList.remove('error');
    })
    id_btnEntrar.addEventListener('click', ()=>{
        if(id_numTarjeta.value == '' && id_documemto_campo.value == '' && id_clave.value == '') {
            id_numTarjeta.classList.add('error');
            id_documemto_campo.classList.add('error');
            id_clave.classList.add('error');
            document.getElementById('mensaje_error--clave').innerText='Complete todos los campos';
        }else if(id_numTarjeta.value.length < 19 || id_documemto_campo.value.length <= 7 || id_clave.value.length <= 4) {
            document.getElementById('mensaje_error--clave').innerText='Complete los datos por favor';
            id_numTarjeta.focus();
            if (id_numTarjeta.value.length < 19 && id_numTarjeta.value != '') {
                document.getElementById('mensaje_error--clave').innerText='Corrija el número de tarjeta';
            }else if(id_documemto_campo.value.length <= 7 && id_documemto_campo.value != ''){
                document.getElementById('mensaje_error--clave').innerText='Corrija el tipo de documento';
            }else if(id_clave.value.length <= 4 && id_clave.value != ''){
                document.getElementById('mensaje_error--clave').innerText='Pruebe una contraseña más segura';
            }
        }else{
            document.getElementById('mensaje_error--clave').innerText='';
        }
    })
}

// FUNCIONES
function tarjeta(el){
    //Obteniendo posicion del cursor 
    let val = el.value; //Valor de la caja de texto
	
    let out = ''; //Salida
    let filtro = '1234567890';
    let v = 0; //Contador de caracteres validos
	
    //Filtar solo los numeros
    for (let i=0; i<val.length; i++){
       if (filtro.indexOf(val.charAt(i)) != -1){
	     v++;
	    out += val.charAt(i);
        
	    //Agregando un espacio cada 4 caracteres
	    if((v==4) || (v==8) || (v==12))
	        out+=' ';
	   }
    }
    if(out.length >= 19){
        out = out.slice(0, 19)
    }

    //Reemplazando el valor
    el.value = out;
}
function tipos_Documentos(documento, id_documemto){
    if(documento == 'dni'){
        let d = id_documemto.value; //Valor de la caja de texto
        let out = '';
        let filtro = '1234567890';

        for(let i=0; i< d.length; i++){
            if (filtro.indexOf(d.charAt(i)) != -1) out += d.charAt(i);
        }

        // limitamos 8 caracteres
        if(out.length>=8){
            out=out.slice(0, 8);
        }
        //Reemplazando el valor
        id_documemto.value = out;
    }else if(documento == 'ce'){
        let ce = id_documemto.value; //Valor de la caja de texto
        let out = '';
        let filtro = '1234567890';

        for(let i=0; i< ce.length; i++){
            if (filtro.indexOf(ce.charAt(i)) != -1) out += ce.charAt(i);
        }

        // limitamos 8 caracteres
        if(out.length>=12){
            out=out.slice(0, 12);
        }
        //Reemplazando el valor
        id_documemto.value = out;
    }else if(documento == 'pas'){
        let pas = id_documemto.value; //Valor de la caja de texto
        let out = '';
        let filtro = '1234567890';

        for(let i=0; i< pas.length; i++){
            if (filtro.indexOf(pas.charAt(i)) != -1) out += pas.charAt(i);
        }

        // limitamos 8 caracteres
        if(out.length>=12){
            out=out.slice(0, 12);
        }
        //Reemplazando el valor
        id_documemto.value = out;
    }
}