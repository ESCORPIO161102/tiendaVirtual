document.getElementById("comprar").addEventListener("click", function (e) {
    e.preventDefault();

    const carrito = [];
    const carritoItems = document.querySelectorAll("#lista-carrito tbody tr");

    carritoItems.forEach(row => {
        const producto = {
            nombre: row.querySelector("td:nth-child(2)").textContent,
            precio: parseFloat(row.querySelector("td:nth-child(3)").textContent),
            cantidad: parseInt(row.querySelector("td:nth-child(4)").textContent)
        };
        carrito.push(producto);
    });

    const usuarioId = 1; // Reemplaza con la ID real del usuario
    const usuarioNombre = "NombreUsuario"; // Reemplaza con el nombre real del usuario

    fetch("ruta_a_tu_backend.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            usuarioId,
            usuarioNombre,
            carrito
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Compra registrada exitosamente");
            actualizarHistorial(); // Llama la función para actualizar el historial
            vaciarCarrito(); // Opcional: Limpia el carrito después de comprar
        } else {
            alert("Hubo un error al registrar la compra");
        }
    })
    .catch(error => console.error("Error:", error));
});

// Función para vaciar el carrito (opcional)
function vaciarCarrito() {
    const carrito = document.querySelector("#lista-carrito tbody");
    carrito.innerHTML = ""; // Limpia el carrito en la tabla
}

// Función para actualizar el historial desde el servidor
function actualizarHistorial() {
    fetch("http://localhost/tiendaVirtual/Controllers/Historial/obtener_historial") // Cambia esta ruta a tu backend para obtener el historial
        .then(response => response.json())
        .then(data => {
            const historialTable = document.querySelector("#historial-compras tbody");
            historialTable.innerHTML = ""; // Limpia el historial actual

            data.forEach(compra => {
                const row = `
                    <tr>
                        <td>${compra.id}</td>
                        <td>${compra.producto_nombre}</td>
                        <td>${compra.precio}</td>
                        <td>${compra.cantidad}</td>
                        <td>${compra.fecha}</td>
                        <td>${compra.estado}</td>
                    </tr>`;
                historialTable.innerHTML += row;
            });
        })
        .catch(error => console.error("Error al obtener el historial:", error));
}
document.addEventListener('DOMContentLoaded', function() {
    // Llamada para obtener los datos del historial
    obtenerHistorial();
});

// Función para obtener los datos del historial
function obtenerHistorial() {
    fetch('URL_DEL_CONTROLADOR_HISTORIAL') // Reemplaza esto con la URL correcta de tu controlador PHP
        .then(response => response.json()) // Esperamos la respuesta en formato JSON
        .then(data => {
            if (data.success) {
                mostrarHistorial(data.data); // Llamamos a la función para mostrar los datos
            } else {
                alert('No se encontraron registros en el historial.');
            }
        })
        .catch(error => {
            console.error('Error al obtener el historial:', error);
        });
}
// Función para cargar el historial desde el servidor y generar las filas de la tabla
function cargarHistorial() {
    fetch("http://localhost/tiendaVirtual/Api/obtener_historial.php")  // Cambia esta ruta por la correcta
        .then(response => response.json())
        .then(data => {
            if (data.success && data.data.length > 0) {
                const tbody = document.querySelector('#historialTable tbody');
                tbody.innerHTML = ''; // Limpia las filas actuales (si las hay)
                
                // Itera sobre los datos y agrega las filas
                data.data.forEach(item => {
                    const row = document.createElement('tr');
                    
                    row.innerHTML = `
                        <td>${item.idcompra}</td>
                        <td>${item.nombre_producto}</td>
                        <td>${item.precio}</td>
                        <td>${item.cantidad}</td>
                        <td>${item.fecha}</td>
                        <td>${item.estado}</td>
                    `;
                    
                    tbody.appendChild(row);
                });
            } else {
                const tbody = document.querySelector('#historialTable tbody');
                tbody.innerHTML = '<tr><td colspan="6">No hay historial de compras disponible.</td></tr>';
            }
        })
        .catch(error => {
            console.error('Error al cargar el historial:', error);
        });
}

// Llama a la función para cargar el historial cuando se cargue la página
document.addEventListener('DOMContentLoaded', cargarHistorial);


// Función para mostrar los datos en la tabla

