<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hanni</title>
        <link rel="shortcut icon" href="Imagenes/logo.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
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
                        Productos
                    </div>
                    <div id="sobreNosotros" class="hidden">
                        Sobre Nosotros
                    </div>
                    <div id="contacto" class="hidden">
                        Contacto
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
