<!DOCTYPE html>
<?php
    $usuario = $_COOKIE['usuario'];
    include"conecta.php";
    $resultado = "SELECT * FROM usuario WHERE username = '$usuario'";
    $pega = mysqli_query($conexao,$resultado);
    $infos = mysqli_fetch_array($pega);
    
    $uID = $infos['id'];
    
    ?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>E-Sports Society</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
    <body>
        <?php include "../includes/menu.php"?>
        
        
        
        <section>
          
            <form id="cadastro" method='POST' enctype="multipart/form-data" action='post.php'>
                    
                    <input type="hidden" name="name" value="<?=  $_COOKIE['usuario'] ?>"/>
                    <input type="hidden" name="uID" value="<?=  $uID ?>"/>
                    
                    <p><label for="text">Titulo:</label>
                    <input type="text" id = "titulo" name="titulo" /></p>
                    
                    <p><label for="pic">Imagem:</label>
                    
                   <input type="file" name="pic" id="pic"></p>
                   <input type="hidden" name="MAX" value="2500000">
                   <br>
                   <br>
                    
                  <p>  <input type="submit" name="Postar!"/></p>
                    
                </form>
            
            
        </section>
        
        
        
        
        
        
        <?php include "../includes/footer.php"?>
    </body>
    
</html>