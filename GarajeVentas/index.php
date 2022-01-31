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
        <?php
		include("clases/recursos.php");
		?>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-f nav-fixed">
            <div class="container px-4 px-lg-5">
            <a href="#!"><img src="imagenes/garajeventas.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="publicar.php">Publicar artículo</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Hasta 50% off con tarjetas seleccionadas</h1>
                    <!---<p class="lead fw-normal text-white-50 mb-0">Ventas</p>--->
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <?php
		    $listar_datos = $producto->seleccionarProductos();
		    ?>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
			    for($i=0; $i<count($listar_datos); $i++){ ?>
                <div class="col mb-5">
                        <div class="card h-100">
                           <img class="card-img-top" src="imagenes/<?php echo $listar_datos[$i]['nombre_vendedor'];?>.jpg">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h2><?php echo $listar_datos[$i]['producto']; ?></h2>
                                    <b>$<?php echo $listar_datos[$i]['precio']; ?></b>
                                    <p><?php echo $listar_datos[$i]['descripcion']; ?></p>
                                    <b><?php echo $listar_datos[$i]['nombre_vendedor'];?> - <?php echo $listar_datos[$i]['contacto'];?></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
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
