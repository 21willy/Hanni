
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
            
            <!--TABLA-->
                table {
                    width: 100%;
                    text-align: center;
                    border-collapse: collapse;
                    margin: 0 0 1em 0;
                    caption-side: top;
                }
                caption, td, th {
                    padding: 0.3em;
                }
                tbody {
                    border-top: 1px solid #000;
                    border-bottom: 1px solid #000;
                }
                th, td{
                    text-align: center;
                    font-size: 2vh;
                    width: 25%;
                }
        </style>
            
    </head> 
    <body>
        <?php
            error_reporting(E_ERROR);
        
            $precio = 3.99; 
            $precio2 = 6.99;
            $precio3 = 9.99;
            
        ?>
        <div class="container"> 
            <!------CABECERA------->
            <div id="cabecera" style="text-align: center;">
                <img src="Imagenes/logo.png" alt="Logo" width="300" height="300">
            </div>
            <!------CUERPO------->
            <div class="cuerpo">
                <div class="col-md-4" style="text-align: center;">
                    <img style="width: 90%;" src="imagenes/fundapajita.jpg" alt=""/>
                </div>
                <div class="col-md-8">
                    <form action="carrito3.php?precioGuardado=<?php echo $precioGuardado?>" method="post">
                        <table cellspacing="1" class="shop_table cart">
                            <thead>
                                <tr>
                                    <th class="product-articulo">Artículo</th>
                                    <th class="product-cantidad">Cantidad</th>
                                    <th class="product-color">Color</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item">
                                    <td class="product-articulo">
                                        <a href=""><?php $articulo=$_GET["articulo"]; echo "".$articulo;?></a>
                                    </td>
                                    <td class="product-cantidad">
                                        <a href=""><?php $cantidad=$_POST["cantidad"]; echo "".$cantidad;?></a>
                                    </td>
                                    <td class="product-color">
                                        <a href=""><?php $color=$_POST["color"]; echo "".$color;?></a>
                                    </td>
                                    <td class="product-total">
                                        <a href=""><?php $total = $cantidad*$precio3; echo "".$total; echo "€";?></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <a href="producto3.php?precioGuardado=<?php echo $precioGuardado?>"><button action="producto3.php?precioGuardado=<?php echo $precioGuardado?>" class="btn btn-group">Página del producto</button></a>
                </div> 
            </div>
        </div>
        <script>
            function pajita(){
                $('#color').addClass('hidden');
                $('#articulo').removeClass('hidden');
            }
        </script>
        <!---------PIE DE PAGINA---------->
        <div class="footer">
            Hanni Company
        </div>
        <script src="../js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" ></script>
    </body>
</html>
        
    