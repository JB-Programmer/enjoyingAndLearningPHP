
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        h1{
            text-align:center;
            color:#00F;
            border-bottom:dotted #0000FF;
            width:50%;
            margin:auto;
            
            
        }

        table{
            border:1px solid #F00;
            padding:20px 50px;
            margin-top:50px;
        }

        body{
            background-color:#FFC;
        }


</style>

    </head>



<body>
<h1>Insertar to database PDO</h1>
        <form name="form1" method="get" action="52-PDO-conex-y-select-from-database.php">
        <fielset>
            <table border="0" align="center">
                <tr>
                <td>Código Artículo</td>
                <td><label for="c_art"></label>
                <input type="text" name="c_art" id="c_art"></td>
                </tr>
                <tr>
                <td>Sección</td>
                <td><label for="seccion"></label>
                <input type="text" name="seccion" id="seccion"></td>
                </tr>
                <tr>
                <td>Nombre artículo</td>
                <td><label for="n_art"></label>
                <input type="text" name="n_art" id="n_art"></td>
                </tr>
                <tr>
                <td>Precio</td>
                <td><label for="precio"></label>
                <input type="text" name="precio" id="precio"></td>
                </tr>
                <tr>
                <td>Fecha</td>
                <td><label for="fecha"></label>
                <input type="text" name="fecha" id="fecha"></td>
                </tr>
                <tr>
                <td>Importado</td>
                <td><label for="importado"></label>
                <input type="text" name="importado" id="importado"></td>
                </tr>
                <tr>
                <td>País de Origen</td>
                <td><label for="p_orig"></label>
                <input type="text" name="p_orig" id="p_orig"></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
                <tr>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
                <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
                </tr>
            </table>
            </fieldset>
        </form>
</body>
</html>