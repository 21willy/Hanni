<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hanni</title>
        <link rel="shortcut icon" href="Imagenes/logo.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <style>
  
            input[type=submit]{
              background-color:red;
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
              color: white;
            }

            input[type=text]{
              color: black;
              cursor: pointer;
              width: 100%;
            }

            button:hover {
              opacity: 0.8;
            }
            a{
                color: black;
            }
            
            a:link{
                text-decoration:none;
            }
            
            a:hover{
                color: black;
            }
            
        </style>
    </head>
    <body>
        
        <div class="container">
            
            <div id="cabecera" style="text-align: center;">
                <img src="Imagenes/logo.png" alt="Logo" width="300" height="300">
            </div>
            
            <div class="row">
                
                <div class="col-md-2">
                    <div style="margin-left: 5%;" class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menú
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="btn btn-block btn-warning" onclick="inicio()">Inicio</button>

                          <button class="btn btn-block btn-warning" onclick="producto()">Productos</button>

                          <button class="btn btn-block btn-warning" onclick="nosotros()">Sobre Nosotros</button>

                          <button class="btn btn-block btn-warning" onclick="contacto()">Contacto</button>

                        </div>
                    </div>
            
                </div>
            

                <div class="col-md-8">
                    <div id="inicio">
                        <div class="col-md-20" align="center">
                            <div id="inicio2" >
                                <u><font size="7">Inicio</font></u>
                            </div>
                            
                            <div id="explicacion" >
                                <p style="font-size: 18px;">
                                    Hanni S.A. es una empresa que se dedica a fabricar pajitas compuestas de acero inoxidable.
                                </p>
                                <p style="font-size: 18px;">
                                    La singularidad de estas pajitas son que al estar fabricadas con acero inoxidable es que pueden ser reutilizadas y así consumir menos plástico.
                                </p>
                                <p style="font-size: 18px;">
                                    Además hemos adherido un producto el cual al entrar en contacto con la bebida es capaz de detectar si hay algún tipo de sustancia estupefaciente en dicha bebida,
                                    de momento solo se usa como esmalte de uñas por ello somos pioneros en incluirlos en nuestras pajitas.
                                </p>
                                <p style="font-size: 18px;">
                                    A continuación les dejamos un video explicativo que demuestra la función de dicho producto capaz de detectarlo.
                                </p>
                                
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/7IX4t2D0LbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div id="productos" class="hidden">
                        <table class="table table-dark" style="width:100%">
                            
                            <tr>
                                <td> 
                                    <a href="producto1.php">
                                        <div>
                                            
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="Imagenes/pajita.jpg" width="200px" alt=""/>
                                                    </td>
                                                    
                                                    <td>
                                                        Pajita de acero inoxidable de distintos colores, con sistema antidroga.
                                                        <br>
                                                        <button class='btn btn-success'> 3'99€ </button>
                                                    </td>
                                                </tr>
                                            </table>
                                           
                                        </div>
                                    </a>
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <a href="producto2.php">
                                        <div>
                                            
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="Imagenes/fundapajitalimpiador.jpg" width="200px" alt=""/>
                                                    </td>
                                                    
                                                    <td>
                                                        Pack de pajita más limpiador y funda.
                                                        <br>
                                                        <button class='btn btn-success'> 6'99€ </button>
                                                    </td>
                                                </tr>
                                            </table>
                                           
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <a href="producto3.php">
                                        <div>
                                            
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="Imagenes/fundapajita.jpg" width="200px" alt=""/>
                                                    </td>
                                                    
                                                    <td>
                                                        Funda más pajita con protector de colores.
                                                        <br>
                                                        <button class='btn btn-success'> 9'99€ </button>
                                                    </td>
                                                </tr>
                                            </table>
                                           
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <a href="producto4.php">
                                        <div>
                                            
                                            <table>
                                                <tr>
                                                    <td>
                                                       <img src="Imagenes/funda.jpg" width="200px" alt=""/>
                                                    </td>
                                                    
                                                    <td>
                                                        Funda para pajita Hanni, no incluye la pajita.
                                                        <br>
                                                        <button class='btn btn-success'> 2'99€ </button>
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                        </div>
                                    </a> 
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <a href="producto5.php">
                                        <div>
                                            
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="Imagenes/cajadeviaje.jpg" width="200px" alt=""/>
                                                    </td>
                                                    
                                                    <td>
                                                        Doble pack de pajita retractil Hanni más funda y limpiador.
                                                        <br>
                                                        <button class='btn btn-success'> 10'99€ </button>
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                        </div>
                                    </a> 
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                    <div id="sobreNosotros" class="hidden">
                        <div>
                            <div>
                                <div>
                                    <img src="Imagenes/Irene.jpg" width="200px" alt="200"/>
                                    <div style="float: right">
                                        <h3>Irene Benito</h3>
                                        <h4>CEO.</h4>
                                        <div style="margin-left: 2%">Creadora del producto Hanni y de la compañia.</div>
                                    </div>
                                
                                </div>
                            </div>
                            
                            <div >
                                    <div>
                                        <img src="Imagenes/Jorge.jpg" width="200px" alt="200"/>
                                    <div style="float: right">
                                        <h3>Jorge Rodríguez</h3> 
                                        <h4>Director de Departamentos.</h4>
                                        <div style="margin-left: 2%">Encargado de los departamentos de la empresa. </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div >
                                    <div>
                                        <img src="Imagenes/Guillermo.jpg" width="200px" alt="200"/>
                                    <div style="float: right">
                                        <h3>Guillermo Maroto</h3> 
                                        <h4>Marketing Director.</h4>
                                        <div style="margin-left: 2%">Encargado del departamento de publicidad y encargado de 
                                    contactar con otras compañias para la cooperacion de actos publicitarios </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                    <div>
                                        <img src="Imagenes/Maria.jpg" width="200px" alt="200"/>
                                    <div style="float: right">
                                        <h3>Maria Arriola</h3> 
                                        <h4>Community Manager.</h4>
                                        <div style="margin-left: 2%">Encargada de la página web, Instagram y FaceBook.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div >
                                    <div>
                                        <img src="Imagenes/Angel.jpeg" width="200px" alt="200"/>
                                    <div style="float: right">
                                        <h3>Angel Jimenez</h3> 
                                        <h4>Director de Comercio.</h4>
                                        <div style="margin-left: 2%">Encargado de las compras de materiales.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contacto" class="hidden">
                    
                        <form class="formulario" action="send.php" method="post">  
                        <h2>CONTACTO</h2>
                        <div>
                            <label for="nombre"><b>Nombre:</b></label> <input type="text" name="nombre"><br>
                            <label for="nombre"><b>Apellidos:</b></label> <input type="text" name="apellidos">
                            <br>
                            <br>
                            <label for="nombre"><b>Problema:</b></label>
                            <br>
                            <select name="educacion">
                                <option name="Problema" selected="selected">No me permite comprar un producto</option>
                                <option name="Problema" >Hay un problema al meter mi tarjeta a la hora del pago</option>
                                <option name="Problema" >No funciona la pagina correctamente</option>
                                <option name="Problema" >No me salen las imagenes de los productos</option>
                                <option name="Problema" >Hice una compra y no me llegó el producto</option>
                                <option name="Problema" >Producto defectuoso</option>
                                <option name="Problema" >Otro</option>
                            </select> 
                            <br>
                            <br>

                            <label for="nombre"><b>Email:</b></label>
                            <input type="text" name="email" value="@"><br>


                            <label for="nombre"><b>Breve comentario sobre su problema:</b></label>
                            </br>
                            <textarea rows="10" cols="30" name="comentario" style="font-family:Arial" placeholder=" Escriba aqui"></textarea>
                            </br>


                            <!-- Botón de enviar-->
                            <input type="submit" name="submit" value="Enviar">
                       </div>
                    </form>
                    </div>
                </div>
                
                <div class="col-md-2"></div>
                
            </div>
        </div>
    </div>
            
        <script>
            
            function inicio(){
                $('#productos').addClass('hidden');
                $('#sobreNosotros').addClass('hidden');
                $('#contacto').addClass('hidden');
                $('#inicio').removeClass('hidden');
            }
            
            function producto(){
                $('#inicio').addClass('hidden');
                $('#sobreNosotros').addClass('hidden');
                $('#contacto').addClass('hidden');
                $('#productos').removeClass('hidden');
            }
            
            function nosotros(){
                $('#productos').addClass('hidden');
                $('#inicio').addClass('hidden');
                $('#contacto').addClass('hidden');
                $('#sobreNosotros').removeClass('hidden');
            }
            
            function contacto(){
                $('#productos').addClass('hidden');
                $('#inicio').addClass('hidden');
                $('#sobreNosotros').addClass('hidden');
                $('#contacto').removeClass('hidden');
            }
                
    
        </script>
        
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
