const carrito = document.querySelector('#carrito');
const listaCursos = document.querySelector('#lista-productos');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const comprarBtn = document.querySelector('#comprar');
comprarBtn.addEventListener('click', realizarCompra);
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito'); 
let articulosCarrito = [];

document.querySelectorAll('.agregar-carrito').forEach(boton => {
    boton.addEventListener('click', (e) => {
        e.preventDefault();
        const idProducto = e.target.getAttribute('data-id');
        console.log(`Producto ${idProducto} agregado al carrito`);
        e.target.blur();
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const botonesDetalles = document.querySelectorAll('.detalles-producto');
    const botonesCerrar = document.querySelectorAll('.close-accesorios');
    const botonesAgregarCarrito = document.querySelectorAll('.agregar-carrito');
    const imagenesProducto = document.querySelectorAll('.imagen-producto');

    imagenesProducto.forEach((imagen) => {
        imagen.addEventListener('click', (e) => {
            const productoId = e.target.dataset.id;
            const detallesProducto = document.getElementById(`detallesProducto-${productoId}`);
            const tarjetaProducto = e.target.closest('.card');
    
            // Extraer datos del producto
            const titulo = tarjetaProducto.querySelector('h4').textContent;
            const descripcion = tarjetaProducto.querySelector('p[hidden]').textContent;
            const Categoria = tarjetaProducto.querySelector('#ca').textContent;
            const precio = tarjetaProducto.querySelector('.precio span').textContent;
            const imagenSrc = e.target.src;
    
            // Actualizar detalles con datos correctos
            detallesProducto.querySelector(`#tituloProducto-${productoId}`).textContent = titulo;
            detallesProducto.querySelector(`#descripcionProducto-${productoId}`).textContent = descripcion;
            detallesProducto.querySelector(`#categoriaProducto-${productoId}`).textContent = Categoria;
            detallesProducto.querySelector(`#precioProducto-${productoId}`).textContent = `Precio: ${precio}`;
            detallesProducto.querySelector(`#imagenProducto-${productoId}`).src = imagenSrc;
    
            // Mostrar los detalles del producto
            detallesProducto.classList.remove('oculto');
            detallesProducto.classList.add('visible');
        });
    });

    botonesCerrar.forEach((botonCerrar) => {
        botonCerrar.addEventListener('click', (e) => {
            const detallesProducto = e.target.closest('.detalles-producto');
            detallesProducto.classList.remove('visible');
            detallesProducto.classList.add('oculto');
        });
    });

    botonesAgregarCarrito.forEach((botonAgregar) => {
        botonAgregar.addEventListener('click', (e) => {
            const detallesProducto = e.target.closest('.detalles-producto');
            detallesProducto.classList.remove('visible');
            detallesProducto.classList.add('oculto');
        });
    });
});

cargarEventListeners();

function cargarEventListeners() {
    listaCursos.addEventListener('click', agregarCurso);
    carrito.addEventListener('click', eliminarCurso);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
}

function agregarCurso(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const productoId = e.target.getAttribute('data-id');
        const curso = document.querySelector(`.card .imagen-producto[data-id="${productoId}"]`).closest('.card');
        leerDatosCurso(curso);
    }
}

function realizarCompra(e) {
    e.preventDefault();

    // Verifica si el carrito está vacío
    if (articulosCarrito.length === 0) {
        alert('El carrito está vacío. Agrega productos antes de comprar.');
        return;
    }

    let mensaje = 'Hola, quiero comprar los siguientes productos:\n\n';
    let total = 0;

    // Construye el mensaje y calcula el total
    articulosCarrito.forEach(curso => {
        mensaje += `Producto: ${curso.titulo}\n`;
        mensaje += `Cantidad: ${curso.cantidad}\n`;
        mensaje += `Precio: ${curso.precio}\n\n`;

        // Asegúrate de que el precio sea numérico antes de calcular el total
        const precio = parseFloat(curso.precio.replace('S/.', '').trim());
        total += precio * curso.cantidad;
    });

    mensaje += `Total a pagar: S/.${total.toFixed(2)}\n`;
    mensaje += 'Gracias.';

    const mensajeCodificado = encodeURIComponent(mensaje);
    const numeroWhatsApp = '+51900244908';
    const urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${mensajeCodificado}`;
    window.open(urlWhatsApp, '_blank');

    // Envia la compra al backend
    fetch("http://localhost/tiendaVirtual/Api/guardar_compra.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ productos: articulosCarrito })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Compra registrada correctamente.');
            // Aquí puedes agregar alguna notificación al usuario
        } else {
            console.log('Error al registrar la compra.');
            // Aquí puedes manejar un error más específico
        }
    })
    .catch(error => {
        console.error('Error de red o al procesar la solicitud:', error);
        // Maneja errores de red
    });
}


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

    carritoHTML();
}

function eliminarCurso(e) {
    e.preventDefault();
    if(e.target.classList.contains('borrar-curso') ) {
         const cursoId = e.target.getAttribute('data-id')
         articulosCarrito = articulosCarrito.filter(curso => curso.id !== cursoId);
         carritoHTML();
    }
}

function carritoHTML() {
     while (contenedorCarrito.firstChild) {
         contenedorCarrito.removeChild(contenedorCarrito.firstChild);
     }

     articulosCarrito.forEach(curso => {
         const { imagen, titulo, precio, cantidad, id } = curso;
         const row = document.createElement('tr');
         row.innerHTML = `
             <td><img src="${imagen}" width="100"></td>
             <td>${titulo}</td>
             <td>${precio}</td>
             <td>${cantidad}</td>
             <td><a href="#" class="borrar-curso" data-id="${id}">X</a></td>
         `;
         contenedorCarrito.appendChild(row);
     });

     sincronizarStorage();
}

function sincronizarStorage() {
    localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
}


// Elimina los cursos del carrito en el DOM
// Elimina los cursos del carrito en el DOM
function vaciarCarrito() {
     // Vaciar el contenedor del carrito en el DOM
     while (contenedorCarrito.firstChild) {
         contenedorCarrito.removeChild(contenedorCarrito.firstChild);
     }
 
     // Reiniciar el array
     articulosCarrito = [];
 }
 
 