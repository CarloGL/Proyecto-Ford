(() => {

    'use strict'
  
   
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
  
    const forms = document.querySelectorAll('.needs-validation')
  
   
  
    // Loop over them and prevent submission
  
    Array.from(forms).forEach(form => {
  
      form.addEventListener('submit', event => {
  
        if (!form.checkValidity()) {
  
          event.preventDefault()
  
          event.stopPropagation()
  
        }
  
   
  
        form.classList.add('was-validated')
  
      }, false)
  
    })
  
  })()
// let fila = document.querySelector('#usuarios');

// fetch('/datos/datos.json')
// .then((respuesta)=>{
//     return respuesta.json()
// })

// .then((usuarios)=>{
//     console.log(usuarios)
//     for(let i=0; i < usuarios.length; i++){
//         fila.innerHTML += `
//         <td>${usuarios[i].id}</td>
//         <td>${usuarios[i].nombre}</td>
//         <td>${usuarios[i].apellido}</td>
//         <td>${usuarios[i].mail}</td>` 
//     }
// })

// .catch((error)=>{
//     console.log('Ha ocurrido un error ' +error.message)
// })

//VARIABLES
let autoA = document.querySelector('#autoA');
let autoD = document.querySelector('#autoD');
let autoP = document.querySelector('#autoP');
let botonD = document.getElementById('botonD');
let botonA = document.getElementById('botonA');
let botonP = document.getElementById('botonP');

let Lagotado = ['Mustang Mach-1','Maverick Híbrida','F-150 Híbrida','Maverick','F-150 Raptor','Mustang','F-150'];
let listadoAgotado= document.querySelector('#listado')


//FUNCIONES
botonA.addEventListener('click',function(){
    autoA.classList.add('agotado')
    autoA.innerHTML = 'Agotado'
})

botonD.addEventListener('click',function(){
    autoD.classList.add('disponible')
    autoD.innerHTML = 'Disponible'
})

botonP.addEventListener('click',function(){
    autoP.classList.add('preventa')
    autoP.innerHTML = 'En Preventa'
})

for(let indice=0; indice < Lagotado.length; indice= indice + 1){
    listadoAgotado.innerHTML += `<li class="list-group-item text-center">${Lagotado[indice]} </li>`;
}




