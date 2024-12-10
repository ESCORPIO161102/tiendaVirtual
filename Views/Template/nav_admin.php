    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/hospital.jpg" alt="User Image">
        <div>
            <br>
       
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/laptops">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Laptos</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/accesorios">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Accesorios</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/usuarios">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Registro Usuarios</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/producto">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Registro Productos</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/roles">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Roles</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/permisos"><i class="icon fa fa-circle-o"></i> Permisos</a></li>
            </ul>
        </li>
        
        <li>
            <a class="app-menu__item" id="exit-site2" href="#">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Logout</span>
            </a>
        </li>
      </ul>
    </aside>