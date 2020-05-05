<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/images/admin/logo_pequeno.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Corazón de Perro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&size=160" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if(Auth::user()->role == 'Webmaster')
                <li class="nav-item">
                    <a href="/usuarios" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="/rescataditos" class="nav-link">
                        <i class="fas fa-dog nav-icon"></i>
                        <p>Rescataditos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/adoptados" class="nav-link">
                        <i class="fas fa-hand-holding-heart nav-icon"></i>
                        <p>Adoptados</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/mensajes" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>Mensajes</p>
                    </a>
                </li>
                @if(Auth::user()->role == 'Webmaster')
                <li class="nav-item">
                    <a href="/agradecimientos" class="nav-link">
                        <i class="fas fa-award nav-icon"></i>
                        <p>Agradecimientos</p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
