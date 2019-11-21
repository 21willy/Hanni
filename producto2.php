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
                h1{
                    border-bottom: 1px solid #000;        
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
            <a href="index.php"><button action="index.php" class="btn btn-group">Inicio</button></a>
            <div id="cabecera" style="text-align: center;">
                <img src="Imagenes/logo.png" alt="Logo" width="300" height="300">
            </div>    
            <!------CUERPO------->
            <div id="cuerpo" class="">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <img src="Imagenes/fundapajitalimpiador.jpg" width="400" alt=""/>
                </div>
                <div class="col-md-4">
                    
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
                        <h1>Descripción</h1>
                        <h4>Especificación:</h4>
                        <p>-Reutilizable y el reemplazo perfecto para pajitas de plástico. Incluye 2 pajitas rectas y 2 en ángulo de 8.5 "/
                            21.5 cm de largo y 2 pajitas rectas y 2 en ángulo de 6" / 15cm para bebidas más cortas.</p>
                        <p>-Las pajitas se pueden limpiar fácilmente tanto en el lavavajillas como con los cepillos de limpieza que se proporcionan.</p>
                        <p>-Grado alimenticio y aprobado por la FDA, hecho de acero inoxidable 18/8 de calidad superior. 
                            Nuestras pajitas no son tóxicas, no contienen BPA ni plomo y no tienen un regusto metálico. 
                            Son robustos y no se pueden doblar fuera de forma ni rayarse.</p>
                        <p>Embalaje de residuos cero. Las pajitas vienen dentro de una bolsa de terciopelo negro gratis para un almacenamiento fácil y seguro.</p>
                        <p>Las pajitas son perfectas con jugos, cócteles, batidos, batidos y bebidas calientes.</p>
                        
                    </div>
                    <!--VALORACIONES-->
                    <div id="valoraciones" class="hidden">
                        <h1>Valoraciones</h1>
                        <table class="table table-dark" style="width:100%">                            
                            <tr>
                                <td>                                     
                                    <div>
                                        <img src="Imagenes/perfil2.png" width="200px" alt=""/>
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/>
                                        Me encanta que sean de acero inoxidable.
                                    </div>                                  
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <div>
                                        <img src="Imagenes/perfil3.jpg" width="200px" alt=""/>
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/>
                                        Viene con una funda y con un limpiador. Es muy util.                                        
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div>
                                        <img src="Imagenes/perfil1.jpg" width="200px" alt=""/> 
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/> 
                                        Buen producto.
                                    </div>
                                </td>
                            </tr>                                                                               
                        </table>
                    </div>
                    <!--COMPRAR-->
                    <div id="comprar" class="hidden">
                        <h1>Comprar</h1>
                        <div class="row">
                            <div class="col-md-6" style="text-align: center;">
                                <img style="width: 80%;" src="imagenes/fundapajitalimpiador.jpg" alt=""/>
                            </div>
                            <div class="col-md-6">
                                <form action="carrito2.php?precioGuardado=<?php echo $precioGuardado?>&articulo=Pajita con funda y limpiador" method="post">
                                    <h2 name="articulo">Pajita con funda y limpiador</h2>
                                    <p>Precio: 6,99€ </p>
                                    <p>Cantidad: <input type="number" class="" name="cantidad" placeholder="0" min="0" style=" width: 50px;"></p>                                   
                                    <select name="color">
                                        <option name="color" selected="selected">Plata</option>
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
