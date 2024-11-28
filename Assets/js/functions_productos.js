// Variables
const carrito = document.querySelector('#carrito');
const listaCursos = document.querySelector('#lista-productos');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const comprarBtn = document.querySelector('#comprar');
comprarBtn.addEventListener('click', realizarCompra);
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito'); 
let articulosCarrito = [];

// Listeners
cargarEventListeners();

function cargarEventListeners() {
     // Dispara cuando se presiona "Agregar Carrito"
     listaCursos.addEventListener('click', agregarCurso);

     // Cuando se elimina un curso del carrito
     carrito.addEventListener('click', eliminarCurso);

     // Al Vaciar el carrito
     vaciarCarritoBtn.addEventListener('click', vaciarCarrito);

}


// Funciones
// Función que añade el curso al carrito
function agregarCurso(e) {
    e.preventDefault();
    // Delegation para agregar-carrito
    if(e.target.classList.contains('agregar-carrito')) {
         const curso = e.target.parentElement.parentElement;
         // Enviamos el curso seleccionado para tomar sus datos
         leerDatosCurso(curso);
    }
}

// Seleccionar el botón "Comprar"


// Listener para el botón "Comprar"

function realizarCompra(e) {
    e.preventDefault();

    if (articulosCarrito.length === 0) {
        alert('El carrito está vacío. Agrega productos antes de comprar.');
        return;
    }

    // Crear el mensaje para WhatsApp
    let mensaje = 'Hola, quiero comprar los siguientes productos:\n\n';
    let total = 0;

    articulosCarrito.forEach(curso => {
        mensaje += `Producto: ${curso.titulo}\n`;
        mensaje += `Cantidad: ${curso.cantidad}\n`;
        mensaje += `Precio: ${curso.precio}\n\n`;
        total += parseFloat(curso.precio.replace('$', '')) * curso.cantidad;
    });

    mensaje += `Total a pagar: $${total.toFixed(2)}\n`;
    mensaje += 'Gracias.';

    // Codificar el mensaje para la URL de WhatsApp
    const mensajeCodificado = encodeURIComponent(mensaje);

    // Número de WhatsApp al que se enviará el mensaje
    const numeroWhatsApp = '+51900244908'; // Cambia esto por tu número con prefijo internacional

    // Redirigir a WhatsApp
    const urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${mensajeCodificado}`;
    window.open(urlWhatsApp, '_blank');
}


// Lee los datos del curso
function leerDatosCurso(curso) {
    const infoCurso = {
         imagen: curso.querySelector('img').src,
         titulo: curso.querySelector('h4').textContent,
         precio: curso.querySelector('.precio span').textContent,
         id: curso.querySelector('a').getAttribute('data-id'), 
         cantidad: 1
    }


    if( articulosCarrito.some( curso => curso.id === infoCurso.id ) ) { 
         const cursos = articulosCarrito.map( curso => {
              if( curso.id === infoCurso.id ) {
                   curso.cantidad++;
                    return curso;
               } else {
                    return curso;
            }
         })
         articulosCarrito = [...cursos];
    }  else {
         articulosCarrito = [...articulosCarrito, infoCurso];
    }

    // console.log(articulosCarrito)

    

    // console.log(articulosCarrito)
    carritoHTML();
}

// Elimina el curso del carrito en el DOM
function eliminarCurso(e) {
    e.preventDefault();
    if(e.target.classList.contains('borrar-curso') ) {
         // e.target.parentElement.parentElement.remove();
         const cursoId = e.target.getAttribute('data-id')
         
         // Eliminar del arreglo del carrito
         articulosCarrito = articulosCarrito.filter(curso => curso.id !== cursoId);

         carritoHTML();
    }
}


// Muestra el curso seleccionado en el Carrito
function carritoHTML() {

    vaciarCarrito();

    articulosCarrito.forEach(curso => {
         const row = document.createElement('tr');
         row.innerHTML = `
              <td>  
                   <img src="${curso.imagen}" width=100>
              </td>
              <td>${curso.titulo}</td>
              <td>${curso.precio}</td>
              <td>${curso.cantidad} </td>
              <td>
                   <a href="#" class="borrar-curso" data-id="${curso.id}">X</a>
              </td>
         `;
         contenedorCarrito.appendChild(row);
    });

}

// Elimina los cursos del carrito en el DOM
function vaciarCarrito() {
    // forma lenta
    // contenedorCarrito.innerHTML = '';


    // forma rapida (recomendada)
    while(contenedorCarrito.firstChild) {
         contenedorCarrito.removeChild(contenedorCarrito.firstChild);
     }
}
