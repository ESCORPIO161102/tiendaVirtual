
document.addEventListener("DOMContentLoaded", function () {
    //Mostrar el modal de registro de tareas
    setTimeout(() => {
        login();
       
    }, 1000);
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