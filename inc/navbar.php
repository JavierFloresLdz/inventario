<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a style="position: relative;" class="" href="index.php?vista=home">
            <img src="./img/logo1.png" width="65" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=category_new" class="navbar-item">Nueva Categoría</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo Producto</a>
                    <a href="index.php?vista=product_list2" class="navbar-item">Mis Productos</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Detalle de Productos</a>
                </div>
            </div>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        Cerrar Sesión
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>