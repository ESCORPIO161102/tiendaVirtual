<?php headerAdmin($data); ?>
    <main class="model app-content">
        <div class="model hidden modal-profile-user">
        <div class="model-content">
            <div class="modal-head">
                <h2 class="h2">Perfil Usuario</h2>
               <i class="fa-solid fa-square-xmark" id="close-modal" style="color: #cf0707;"></i>
            </div>
            <div class="modal-body">
                <div class="profile-container">
                    <div class="cover-photo">
                    </div>
                    <div class="profile-section">
                        <div class="profile-image">
                            <img src="<?= media();?>/images/jhon.jpg" alt="Imagen del usuario">
                        </div>
                        <div class="user-info">
                            <h1 class="user-name">Rodriguez Fernandez Jose Jhon</h1>
                            <p class="user-bio">Hola estoy en el Proyecto TiendaVirtual</p>
                            <p class="user-joined">Unido desde: <span>Noviembre 2024</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
<?php footerAdmin($data); ?>
    