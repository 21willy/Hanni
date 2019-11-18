<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hanni</title>
        <link rel="shortcut icon" href="Imagenes/logo.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
        <style>
            <!--CUERPO-->
                cuerpo{
                    padding-top: 0%;
                }
            
            <!--CARROUSEL-->
                .carousel-inner{
                  width: 50%;
                  margin: 30px auto;
                }
                .carousel-control.left, .carousel-control.right{
                    background-image: linear-gradient(#fff 0%, #fff 100%)            
                }
            
            <!--TABLA-->
                th{
                    text-align: center;
                    font-size: 2vh;
                    width: 33%;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: 0 0 1em 0;
                    caption-side: top;
                }
                caption, th {
                    padding: 0.3em;
                }
        </style>
        
    </head>
    <body>
        <?php 
        error_reporting(E_ERROR);
        
        if(isset($_GET['precioGuardado'])){
            $precioGuardado = $_GET['precioGuardado'];
        }else{
            $precioGuardado = 0;
        }       
       ?>
        <div class="container"> 
            <!------CABECERA------->
            <div id="cabecera" style="text-align: center;">
                <img src="Imagenes/logo.png" alt="Logo" width="300" height="300">
            </div>    
            <!------CUERPO------->
            <div id="cuerpo" class="">
                <!------CARROUSEL------->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner" >
                        <div class="item active">
                            <img class="img" src="Imagenes/pajita.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img class="img" src="Imagenes/naranja.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img class="img" src="Imagenes/amarilla.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img class="img" src="Imagenes/roja.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img class="img" src="Imagenes/azul.jpg" alt=""/>
                        </div>
                          <div class="item">
                            <img class="img" src="Imagenes/plata.jpg" alt=""/>
                        </div>
                          <div class="item">
                            <img class="img" src="Imagenes/homografico.jpg" alt=""/>
                        </div>
                          <div class="item">
                            <img class="img" src="Imagenes/negra.jpg" alt=""/>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--DESCRIPCION/VALORACIONES/DETALLES-->
                <table cellspacing="1" class="shop_table cart">
                    <thead>
                        <tr>
                            <th class="descripcion"><button class="btn btn-block btn-warning" onclick="descripcion()">Descripcion</button></th>                       
                            <th class="valoraciones"><button class="btn btn-block btn-warning" onclick="valoraciones()">Valoraciones</button></th>
                            <th class="comprar"> <button class="btn btn-block btn-warning" onclick="comprar()">Comprar</button></th>
                        </tr>
                    </thead>                   
                </table>
                <div class="">
                    <!--DESCRIPCION-->
                    <div id="descripcion" class="">
                        <h2>Especificación:</h2>

                        <p>Material: Acero inoxidable</p>

                        <h2>Tamaño:</h2>

                        <p>Longitud: 19,7 cm, diámetro interior: 5,5mm, diámetro exterior: 6mm</p>

                        <img style="width: 80%;" src="Imagenes/Valoraciones.jpg" alt=""/>
                    </div>
                    <!--VALORACIONES-->
                    <div id="valoraciones" class="hidden">
                        
                    </div>
                    <!--COMPRAR-->
                    <div id="comprar" class="hidden">
                        <div class="row">
                            <div class="col-md-6" style="text-align: center;">
                                <img style="width: 80%;" src="imagenes/Valoraciones.jpg" alt=""/>
                            </div>
                            <div class="col-md-6">
                                <form action="carrito1.php?precioGuardado=<?php echo $precioGuardado?>" method="post">
                                    <h2 name="articulo">Pajita</h2>
                                    <p>Precio: 3,99€ <input type="number" class="" name="cantidad" placeholder="0" min="0" style=" width: 50px;"></p>                                   
                                    <select name="color">
                                        <option name="color" selected="selected">Naranja</option>
                                        <option name="color" >Amarillo</option>
                                        <option name="color" >Rojo</option>
                                        <option name="color" >Azul</option>
                                        <option name="color" >Plata</option>
                                        <option name="color" >Homolografico</option>
                                        <option name="color" >Negro</option>
                                    </select>
                                    <button class="btn btn-group">Comprar</button>
                                </form>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
            <!--PIE DE PAGINA-->
                      
        </div>
        <div class="footer">
            Hanni Company
        </div>  
        <script>    
            function descripcion(){
                $('#comprar').addClass('hidden');
                $('#valoraciones').addClass('hidden');
                $('#descripcion').removeClass('hidden');
            }

            function valoraciones(){
                $('#descripcion').addClass('hidden');
                $('#comprar').addClass('hidden');
                $('#valoraciones').removeClass('hidden');
            }

            function comprar(){
                $('#valoraciones').addClass('hidden');
                $('#descripcion').addClass('hidden');
                $('#comprar').removeClass('hidden');
            }
        </script>      
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
