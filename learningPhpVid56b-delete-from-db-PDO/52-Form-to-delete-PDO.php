
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
<h1>Delete article from DataBase Via PDO</h1>
        <form name="form1" method="get" action="52-PDO-delete-to-db-PDO.php">
        <fielset>
            <table border="0" align="center">
                <tr>
                <td>Código Artículo</td>
                <td><label for="c_art"></label>
                <input type="text" name="c_art" id="c_art"></td>
                </tr>
                
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
                <tr>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="Delete"></td>
                <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Clear Form"></td>
                </tr>
            </table>
            </fieldset>
        </form>
</body>
</html>