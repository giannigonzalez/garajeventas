<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Garaje Ventas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="imagenes/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
            <a href="#!"><img src="imagenes/garajeventas.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Ingresar nombre y apellido. Intentar no repetir.</h1>
                    <!---<p class="lead fw-normal text-white-50 mb-0">Ventas</p>--->
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <form method="POST" name="form" action="insertar.php" enctype="multipart/form-data">
                    <p>Nombre y apellido: <input type="text" name="nombre_vendedor" required></p>
                    <p>Número de telefono: <input type="text" name="contacto" required></p>
                    <p>Producto: <input type="text" name="producto" required></p>
                    <p>Descripción: <textarea name="descripcion" required></textarea></p>
                    <p>Precio: $<input type="number" name="precio" required></p>
                    <p>Imagen JPEG (OBLIGATORIO): <input type="file" id="image" name="imagen" required></p>
                    <input id="botonenviar" name="subir" type="submit" value="Publicar producto.">
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Gianni González</p>
            <p class="m-0 text-center text-white">Página con fines educativos</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
