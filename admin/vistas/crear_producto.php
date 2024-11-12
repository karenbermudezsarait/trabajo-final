<?php
// Verifica si el administrador ha iniciado sesión, aquí puedes agregar tu lógica de sesión
session_start();

// Si no hay sesión de administrador activa, redirige a una página de login
// Aquí puedes implementar una página de inicio de sesión y gestionar sesiones de administrador.
// Ejemplo: si no hay sesión activa, redirigiría a "login.php"
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: /admin/login.php');
    exit;
}

$title = "Wonderlan | Productos";

include '../includes/config.php';
include '../includes/productos/crear_producto.php';

?>

<!DOCTYPE html>
<html lang="en">
<?php
include "../includes/head.php";
?>

<body class="sb-nav-fixed">
    <?php include "../includes/nav.php";?>
    <div id="layoutSidenav">
        <?php include "../includes/sidemenu.php";?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Productos</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Administrar Productos</li>
                    </ol>
                    <?php if (isset($mensaje)): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?=$mensaje?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fa-solid fa-cake-candles"></i>
                            Agregar Producto
                        </div>
                        <div class="card-body">
                            <!-- Formulario para crear un cliente -->
                            <form method="POST" action="" class="p-2" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="nombre_producto">Nombre del Producto:</label>
                                    <input type="text" class="form-control" name="nombre_producto" id="nombre_producto"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label"><img id="preview" src="#"
                                            alt="Vista previa de la imagen"
                                            style="display: none; margin-bottom: 10px; max-width: 300px; height: auto;"
                                            class="img-thumbnail" />
                                        Fotografia del Producto:</label>
                                    <input class="form-control" type="file" id="formFile" onchange="previewImage(event)"
                                        name="imagen" accept="image/*">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="descripcion">Descripción:</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="tipo_torta">Tipo de Torta:</label>
                                    <select name="tipo_torta" required class="form-select">
                                        <option value="entera">Entera</option>
                                        <option value="mediana">Mediana</option>
                                        <option value="porción">Porción</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="precio">Precio:</label>
                                    <input type="number" class="form-control" step="0.01" name="precio" required>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="disponible"
                                            name="disponible" value="1">
                                        <label class="form-check-label" for="disponible">
                                            Disponible
                                        </label>
                                    </div>
                                </div>



                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Crear Producto <i
                                                class="fa-solid fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-right mb-2">
                        <a href="productos.php" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Volver
                            al listado</a>
                    </div>
                </div>
            </main>
            <?php include "../includes/footer.php";?>
        </div>
    </div>
    <?php include "../includes/scripts.php";?>
</body>

</html>