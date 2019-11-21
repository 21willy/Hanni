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
                    <img src="Imagenes/fundapajita.jpg" width="400" alt=""/>
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
                        <p>Las pajillas reutilizables son perfectas para tu bar. El paquete perfecto incluye 4 pajitas de Uds., 1 Cepillo de paja y 1 bolsa organizadora.</p>
                        <p>Cabeza de cubierta de silicona reutilizable y desmontable, fácil de limpiar, seguridad antiarañazos.
                        Tienen el tamaño perfecto para que quepan en un vaso o en muchas otras copas cortas de cóctel.
                        Puedes usar estas pajitas una y otra vez en lugar de tirar las de plástico. A prueba de óxido y no se rompe como vaso pajillas.</p>
                        <br/>
                        <p>-Nombre del artículo: paja para beber</p>
                        <p>-Material: acero inoxidable, silicona, fibra de poliéster.</p>
                        <p>-Características: estilo recto/doblado, reutilizable, cubierta de punta de silicona, cepillo de paja, bolsa organizadora.</p>
                        <p>-Pincel: 23 cm/9,06 "(aprox.)</p>
                        <p>-DE PAJA: 21,5 cm x 0,6 cm/8,46 "x 0,24" gruesos pesados doce constelaciones-Capricornio (La cabra) colgantes charms.</p>
                        <p>-Funda de silicona: 4 cm x 1 cm/1,57 "x 0,39" (aprox.)</p>
                        <br/>
                        <p>El paquete incluye:</p>
                        <p>1 x bolsa organizador</p>
                        <p>1 x cepillo de limpieza</p>
                        <p>2 pajitas dobladas</p>
                        <p>2 x pajitas rectas para beber</p>
                        
                    </div>
                    <!--VALORACIONES-->
                    <div id="valoraciones" class="hidden">
                        <h1>Valoraciones</h1>
                        <table class="table table-dark" style="width:100%">                            
                            <tr>
                                <td>                                     
                                    <div>
                                        <img src="Imagenes/perfil3.jpg" width="200px" alt=""/>
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/>
                                        El estuche es muy práctico.
                                    </div>                                  
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <div>
                                        <img src="Imagenes/perfil1.jpg" width="200px" alt=""/>
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/>
                                        Es un prodcuto de calidad.                                     
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div>
                                        <img src="Imagenes/perfil2.png" width="200px" alt=""/> 
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/> 
                                        Me parece una idea muy ecologica.
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
                                <img style="width: 80%;" src="imagenes/fundapajita.jpg" alt=""/>
                            </div>
                            <div class="col-md-6">
                                <form action="carrito3.php?precioGuardado=<?php echo $precioGuardado?>&articulo=Pajita con funda de colores" method="post">
                                    <h2 name="articulo">Pajita con funda de colores</h2>
                                    <p>Precio: 9,99€ </p>
                                    <p>Cantidad: <input type="number" class="" name="cantidad" placeholder="0" min="0" style=" width: 50px;"></p>                                   
                                    <select name="color">
                                        <option name="color" selected="selected">Naranja</option>
                                        <option name="color" >Azul Claro</option>
                                        <option name="color" >Rojo</option>
                                        <option name="color" >Rosa</option>
                                        <option name="color" >Morado</option>
                                        <option name="color" >Verde</option>
                                        <option name="color" >Azul Oscuro</option>
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
