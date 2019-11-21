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
                    <img src="Imagenes/funda.jpg" width="400" alt=""/>
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
                        <p>-Tamaño: el estuche para pajitas es de aprox. 10.6 pulgadas de largo, el ancho es de 2.3 pulgadas, la longitud máxima 
                            que se puede acomodar es de 11 pulgadas.</p>
                        <p>-Gran material: el material principal de la bolsa con cordón es de algodón y lino, incluye diferentes patrones, suave y cómodo.</p>
                        <p>-Fácil de usar: la bolsa de paja tiene un cordón, fácil de usar y cómodo de llevar.</p>
                        <p>-Estuche de paja reutilizable: la bolsa de paja está hecha de material reutilizable, se puede lavar a mano; Puedes almacenarlo y usarlo la próxima vez.</p>
                        
                    </div>
                    <!--VALORACIONES-->
                    <div id="valoraciones" class="hidden">
                        <h1>Valoraciones</h1>
                        <table class="table table-dark" style="width:100%">                            
                            <tr>
                                <td>                                     
                                    <div>
                                        <img src="Imagenes/perfil1.jpg" width="200px" alt=""/>
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/>
                                        Los modelos son muy bonitos.
                                    </div>                                  
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <div>
                                        <img src="Imagenes/perfil2.png" width="200px" alt=""/>
                                        <img style="width: 15%;" src="Imagenes/estrellas.png" alt=""/>
                                        Es una calidad escelente                                     
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div>
                                        <img src="Imagenes/perfil3.jpg" width="200px" alt=""/> 
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
                                <img style="width: 80%;" src="imagenes/funda.jpg" alt=""/>
                            </div>
                            <div class="col-md-6">
                                <form action="carrito4.php?precioGuardado=<?php echo $precioGuardado?>&articulo=Funda de colores" method="post">
                                    <h2 name="articulo">Funda de colores</h2>
                                    <p>Precio: 2,99€ </p>
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
