<?php
    include"conecta.php";
    
    $username = strip_tags($_POST["username"]);
    $pass = md5(strip_tags($_POST["senha"]));
    
    $erro = 0;
    
    $selectcad = "SELECT username FROM usuario WHERE username = '$username'";
    $select = mysqli_query($conexao,$selectcad);
    $array = mysqli_fetch_array($select);
    $userdata = $array['username'];
    
    if($userdata == $username){
        $selectpas = "SELECT senha FROM usuario WHERE senha = '$pass'";
        $select2 = mysqli_query($conexao,$selectpas);
        $array2 = mysqli_fetch_array($select2);
        $passdata = $array2['senha'];
            if($passdata == $pass){
                
                setcookie('usuario',$username,time()+(24*60*60*7));
                setcookie('senha',$pass,time()+(24*60*60*7));
            
                header("Location: index.php");
            }
            else{
                $mensagem = "Senha incorreta";
                $erro = 1;
            }
        if($userdata != $username){
        $mensagem = "Username não existe";
        $erro = 1;
    }
    }
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
          
           
            <p> <?php echo($mensagem);
              
              
              ?></p>
            
            
        </section>
        
        
        
        
        
        
        <?php include "../includes/footer.php"?>
    </body>
    
</html>