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
            <a href="index.php"><button action="index.php" class="btn btn-group">Inicio</button></a>
            <!------CABECERA------->
            <div id="cabecera" style="text-align: center;">
                <img src="Imagenes/logo.png" alt="Logo" width="300" height="300">
            </div>    
            <!------CUERPO------->
            <div id="cuerpo" class="">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <img src="Imagenes/cajadeviaje.jpg" width="400" alt=""/>
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
                        <p>-Reutilizable, Saludable & Ecológico: Hecho de acero inoxidable de grado alimenticio 304, aprobado por la FDA, libre de BPA,
                            no tóxico, resistente a la corrosión, contra la oxidación, reutilizable, apto para lavavajillas y ecológico. 
                            Mucho más saludable y seguro que las pajitas de plástico. Reduzca la contaminación del medio ambiente y proteja la tierra del plástico desechable.</p>
                        <p>-Diseño Telescópico Innovador: La longitud de la pajita plegable se puede ajustar de 23,6 cm (9,25 pulgadas) a 10,2 cm (4,02 pulgadas), 
                            se adapta a todo tipo de tazas, vasos y vasos con diferentes alturas. Satisfaga sus diferentes necesidades con su diseño flexible. 
                            Las puntas de silicona suave desmontables incluidas para proteger mejor sus dientes y puntas.</p>
                        <p>-Versátil: Con pajita telescópica y estuche liviano, es perfecto para tomar café, refrescos, jugos, cócteles, batidos, agua, etc.
                            Adecuado para el hogar, la oficina, el bar, la fiesta, el picnic al aire libre, la barbacoa, el campamento, el senderismo, viajar
                            y disfrutar con tu familia y amigos con esta pajita reutilizable y saludable. Siéntase libre de que sus hijos lo usen de manera segura.</p>
                        <p>-Portátil para llevar: Nuestra pajita telescópica de metal viene en un hermoso portador de pajita ligera específicamente diseñado 
                            para mantenerlo limpio y práctico. El estuche es liviano para tirar fácilmente en tu bolso. Siempre que necesite una pajita, 
                            simplemente despliegue la caja y colóquela en su bebida preferida. ¡Letforward es la gota que necesitas para viajar</p>
                        <p>-Fácil de limpiar: La Letforward pajita reutilizable y fácil de usar viene con accesorios útiles para brindarle la máxima 
                            satisfacción. Dentro del estuche Letforward, recibirá un cepillo de acero plegable para ayudar a mantener su paja en perfecto estado en todo momento.</p>
                        
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
                                <img style="width: 80%;" src="imagenes/cajadeviaje.jpg" alt=""/>
                            </div>
                            <div class="col-md-6">
                                <form action="carrito5.php?precioGuardado=<?php echo $precioGuardado?>&articulo=Funda de viaje" method="post">
                                    <h2 name="articulo">Funda de viaje</h2>
                                    <p>Precio: 10,99€ </p>
                                    <p>Cantidad: <input type="number" class="" name="cantidad" placeholder="0" min="0" style=" width: 50px;"></p> 
                                    <br/>
                                    <p>Color de la caja:</p>
                                    <select name="colorcaja">
                                        <option name="color" selected="selected">rosa</option>
                                        <option name="color">oro</option>
                                    </select>
                                    <br/>
                                    <p>Color de la pajita:</p>
                                    <select name="colorpajita">
                                        <option name="color" selected="selected">plata</option>
                                        <option name="color">homografico</option>
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
