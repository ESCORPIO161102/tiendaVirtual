
document.addEventListener("DOMContentLoaded", function () {
    //Mostrar el modal de registro de tareas
    setTimeout(() => {
        login();
       
    }, 1000);
});

document.addEventListener("DOMContentLoaded", function () {
    // Recuperar datos del usuario
    document.getElementById("recover-form").addEventListener("submit", function (e) {
      e.preventDefault();
      const username = document.getElementById("username").value;
  
      // Solicitud al servidor para recuperar datos
      fetch("http://localhost/tiendaVirtual/Api/recoverPassword.php", {
        method: "POST",
        body: JSON.stringify({ username }),
        headers: { "Content-Type": "application/json" },
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.status) {
            // Mostrar los detalles del usuario
            document.getElementById("user-details").style.display = "block";
            document.getElementById("display-username").innerText = data.user_data.nombre_usuario;
            document.getElementById("display-password").innerText = data.user_data.password;
          } else {
            alert(data.message);
          }
        })
        .catch((error) => alert("Error al recuperar los datos: " + error));
    });
  
    // Actualizar contraseña
    document.getElementById("update-password-form").addEventListener("submit", function (e) {
      e.preventDefault();
      const username = document.getElementById("display-username").innerText;
      const newPassword = document.getElementById("new-password").value;
  
      // Solicitud al servidor para actualizar la contraseña
      fetch("http://localhost/tiendaVirtual/Api/updatePassword.php", {
        method: "POST",
        body: JSON.stringify({ username, newPassword }),
        headers: { "Content-Type": "application/json" },
      })
        .then((response) => response.json())
        .then((data) => {
          alert(data.message);
          if (data.status) {
            document.getElementById("new-password").value = ""; // Limpiar el campo
          }
        })
        .catch((error) => alert("Error al actualizar la contraseña: " + error));
    });
  });
  

function login() {
    if (document.querySelector("#login-form")) {
        const loginForm = document.querySelector("#login-form");
        loginForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const formData = new FormData(loginForm);
            const encabezados = new Headers();
            const config = {
                method: "POST",
                mode: "cors",
                cache: "no-cache",
                headers: encabezados,
                body: formData
            }
            const url = "http://localhost/tiendaVirtual/Api/initSesion.php";
            fetch(url, config)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Error en la solicitud " + response.status);
                    }
                    return response.json();
                })
                .then(data => {
                    if (!data.status) {
                        viewAlert(data.type, data.message);
                        return false;
                    }
                    loginForm.reset();
                    viewAlert(data.type, data.message);
                    setTimeout(() => {
                        window.location.href=data.url
                    }, 100);
                    return true;
                })
                .catch(error => {
                    viewAlert("error", error.message);
                })
        })
    }
}