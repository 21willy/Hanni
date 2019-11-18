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
                        Inicio
                    </div>
                    <div id="productos" class="hidden">
                        <table class="table table-dark" style="width:100%">
                            
                            <tr>
                                <td> 
                                    <a href="productos.php">
                                        <div>
                                            <img src="Imagenes/pajita.jpg" width="200px" alt=""/>
                                            Descripcion de la pajita
                                        </div>
                                    </a>
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <a href="productos.php">
                                        <div>
                                            <img src="Imagenes/fundapajitalimpiador.jpg" width="200px" alt=""/>
                                            Descripcion de la funda con limpiador
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <a href="productos.php">
                                        <div>
                                            <img src="Imagenes/fundapajita.jpg" width="200px" alt=""/> 
                                            Descripcion funda
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <a href="productos.php">
                                        <div>
                                            <img src="Imagenes/funda.jpg" width="200px" alt=""/>
                                            descripcion de funda
                                        </div>
                                    </a> 
                                </td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <a href="productos.php">
                                        <div>
                                            <img src="Imagenes/cajadeviaje.jpg" width="200px" alt=""/>
                                            descripcion de funda
                                        </div>
                                    </a> 
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                    <div id="sobreNosotros" class="hidden">
                        Sobre Nosotros
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
