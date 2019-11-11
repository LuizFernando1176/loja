<?php
include_once './util/conectarBD.php';
$coon = conectar();
$queryConfigura = "SELECT * FROM `conf` WHERE 1";
$queryResposta = mysqli_query($coon, $queryConfigura);
$queryRespostas = mysqli_fetch_assoc($queryResposta);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Loja | Sweet River</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
        <script src="https://kit.fontawesome.com/4b617de100.js" crossorigin="anonymous"></script>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <script src="js/darkmode-js.js" type="text/javascript"></script>
        <script src="js/darkmode-js.min.js" type="text/javascript"></script>
        <script src="js/darkmode.js" type="text/javascript"></script>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    </head>

    <body>

        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="text-muted" href="#">Escreva-se</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="#">Sweet River</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="text-muted" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                        </a>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#">Camisetas</a>
                    <a class="p-2 text-muted" href="#">Bermudas</a>
                    <a class="p-2 text-muted" href="#">Carteiras</a>
                    <a class="p-2 text-muted" href="#">Estampas</a>
                    <!--          <a class="p-2 text-muted" href="#">Culture</a>
                              <a class="p-2 text-muted" href="#">Business</a>
                              <a class="p-2 text-muted" href="#">Politics</a>
                              <a class="p-2 text-muted" href="#">Opinion</a>
                              <a class="p-2 text-muted" href="#">Science</a>
                              <a class="p-2 text-muted" href="#">Health</a>
                              <a class="p-2 text-muted" href="#">Style</a>
                              <a class="p-2 text-muted" href="#">Travel</a>-->
                </nav>
                <!-- Rounded switch -->

            </div>


            <div class="jumbotron p-3 p-md-5 text-white rounded " style="background-color:<?php echo $queryRespostas ['cor_banner'] ?>">
                <div class="col-md-6 px-0" >
                    <center> <h1 class="display-4 font-italic">Destaque Do Dia</h1></center>
                    <p class="lead my-3">Confira os destaques do dia..</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Veja os destaques...</a></p>
                </div>
            </div>

            <div class="container-fluid " id="menu">
                <div class="row min-vh-100">
                    <aside class="col-12 col-md-3 col-sm-3 col-xl-3 p-1 ">
                        <nav class="navbar navbar-expand  flex-md-column flex-row align-items-start py-1">
                            <div class="collapse navbar-collapse">
                                <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                    <li class="nav-item">
                                        <a href="<?php echo $queryRespostas['face']; ?>" target="_blank" title="Compartilhar no Facebook">
                                            <i class="face fab fa-facebook"></i>
                                        </a>
                                        <a href="<?php echo $queryRespostas['insta']; ?>" target="_blank" title="Compartilhar no Instragram">
                                            <i class="insta fab fa-instagram"></i>
                                        </a>
                                        <a href="<?php echo $queryRespostas['pin']; ?>" target="_blank" title="Compartilhar no Pinterest">
                                            <i class=" pin fab fa-pinterest"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            </div>

                            </div>

                        </nav>
                    </aside>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Featured post</a>
                                    </h3>
                                    <div class="mb-1 text-muted">Nov 12</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#">Continue lendo</a>
                                </div>
                                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Post title</a>
                                    </h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#">Continue lendo</a>
                                </div>
                                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>

                <main role="main" class="container">
                    <div class="container">
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Produto 01</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">R$0 <small class="text-muted">/ mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Informação 01</li>
                                        <li>Informação 02</li>
                                        <li>Informação 03</li>
                                        <li>Informação 04</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-primary">Veja mais..</button>
                                </div>
                            </div>
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Produto 02</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">R$15 <small class="text-muted">/ mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Informação 01</li>
                                        <li>Informação 02</li>
                                        <li>Informação 03</li>
                                        <li>Informação 04</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-primary">Veja mais..</button>
                                </div>
                            </div>
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Produto 03</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">R$29 <small class="text-muted">/ mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Informação 01</li>
                                        <li>Informação 02</li>
                                        <li>Informação 03</li>
                                        <li>Informação 04</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-primary">Veja mais..</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 blog-main">
                                <div class="blog-post">
                                    <h2 class="blog-post-title">Titulo do Poste</h2>
                                    <p class="blog-post-meta">Iformações da Meta dia/hora poste <a href="#">Autor</a></p>

                                </div><!-- /.blog-post -->


                                <!-- /.blog-sidebar -->
                            </div>
                            <div class="col-md-12 blog-main">
                                <div class="blog-post">
                                    <h2 class="blog-post-title">Titulo do Poste</h2>
                                    <p class="blog-post-meta">Iformações da Meta dia/hora poste <a href="#">Autor</a></p>

                                </div><!-- /.blog-post -->


                                <!-- /.blog-sidebar -->
                            </div>
                        </div><!-- /.row -->

                </main><!-- /.container -->

                <footer class="blog-footer">
                    <p>Sistema By Nando | Feito em <a href="">Bootstrap 4</a> .</p>
                    <p>
                        <a href="#">Subir</a>
                    </p>
                </footer>

                <!-- Bootstrap core JavaScript
                ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src="js/jquery-3.2.1.slim.min.js" ></script>
                <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
                <script src="js/popper.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/holder.min.js"></script>
                <script>
                    Holder.addTheme('thumb', {
                        bg: '#55595c',
                        fg: '#eceeef',
                        text: 'Imagens'
                    });
                </script>
                <script src="js/darkmode-js.js"></script>
                <script>
                    new Darkmode({
                        bottom: '32px',
                        right: '32px',
                        time: '0.5s',
                        mixColor: '#fff',
                        buttonColorDark: '#333',
                        buttonColorLight: '#ddd',
                        saveInCookies: true,
                        label: '🌓'
                    }).showWidget();
                </script>
                </body>
                </html>
