
document.addEventListener("DOMContentLoaded", function () {
    //intervalo para actualizar la hora
    setInterval(() => {
        verifySessionUser();
        
    }, 1000);
    //Mostrar el modal de registro de tareas
    setTimeout(() => {
        openModalProfile();
        logOut();
        logOut2()
        closeModal();
    }, 1000);

});

/*
 * Funcion que cierra el modal
 */
function closeModal() {
    const btnClose = document.getElementById("close-modal");
    btnClose.addEventListener("click", () => {
    window.location.href = "http://localhost/tiendaVirtual/dashboard";
    })
}

/**
 * Open modal Perfil
 */
function openModalProfile() {
    let btnModalProfile = document.getElementById('Profile');
    btnModalProfile.addEventListener("click", () => {
        let modalPRofile = document.querySelector('.modal-profile-user');
        modalPRofile.classList.remove("hidden");
    })
}

/*funcion que verifica si el usuario a iniciado sesion*/

function verifySessionUser() {
    const url = "http://localhost/tiendaVirtual/Api/verifySessionUser.php";
    fetch(url)
    .then(response => {
        if (!response.ok) {
        throw new Error("Ocurrio un error Inesperado " + response.status);
        }
        return response.json();
    })
    .then((data)=>{
        if(!data.status){
        viewAlert(data.type, data.message);
        window.location.href = data.url;
        }
        let userName = document.querySelector(".user-name")
        userName.innerHTML = data.infoUser.nombre_usuario;
    })
    .catch((e) => {
        console.log(e);
    })
}
/**
  * funcion que permite cerrar sesion
  */
function logOut(){
    const btnExit = document.querySelector("#exit-site");
    btnExit.addEventListener("click", () => {
        window.location.href = "http://localhost/tiendaVirtual/Api/logOut.php";
    })
}
function logOut2(){
    const btnExit = document.querySelector("#exit-site2");
    btnExit.addEventListener("click", () => {
        window.location.href = "http://localhost/tiendaVirtual/Api/logOut.php";
    })
}