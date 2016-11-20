<?php

$nome = strip_tags($_POST["nome"]);
$pass = md5(strip_tags($_POST["senha"]));
$confPass = md5(strip_tags($_POST["csenha"]));
$email = strip_tags($_POST["email"]);
$confirmarEmail = strip_tags($_POST["cemail"]);
$username = strip_tags($_POST["username"]);
//1 conectando ao BD
include"conecta.php";

 $erro = 0; 
   //Verifica se o usuario já existe no banco de dado
   $selectcad = "SELECT username FROM usuario WHERE username = '$username'";
   $select = mysqli_query($conexao,$selectcad);
   $array = mysqli_fetch_array($select);
   $userdata = $array['username'];
   
   if($userdata == $username){
       $mensagem = "Esse nome de usuario ja existe.<br>";
       $erro=1;
   }
   
   $selectmail = "SELECT email FROM usuario WHERE email = '$email'";
   $select3 = mysqli_query($conexao,$selectmail);
   $array3 = mysqli_fetch_array($select3);
   $emaildata = $array3['email'];
   
   if($emaildata == $email){
       $mensagem = "Esse email ja foi cadastrado.<br>";
       $erro=1;
   }
   
   if (empty($nome) OR strstr($nome, ' ')==FALSE) { 
    $mensagem = "Favor digitar seu nome completo.<br>";  
    $erro=1; 
   } 
   if (strlen($email) < 8 || strstr($email, '@') == FALSE) { 
    $mensagem = "Favor digitar o seu e-mail corretamente.<br>"; 
    $erro=1; 
   } 
   if ($confirmarEmail != $email) { 
    $mensagem = "Os e-mails não batem.<br>"; 
    $erro=1; 
   } 
   if ($confPass != $pass) { 
    $mensagem = "As senhas não batem.<br>"; 
    $erro=1; 
   } 
   if (empty($username) OR strstr($username, ' ')==TRUE) { 
    $mensagem = "Nome de Usuario invalido.<br>";  
    $erro=1; 
   } 
   if (strlen($pass) < 6 OR strstr($pass, ' ')==TRUE){
       $mensagem = "A senha deve conter no minimo 6 caracteres e não pode conter espaços.<br>"; 
    $erro=1;
   } 
   
   if ($erro==0) { 
        
        $sql = "INSERT INTO usuario (nome, username, senha, email) VALUES ('$nome','$username','$pass','$email')";
        $resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar a query" .mysqli_error());
        
        $mensagem = "Você foi cadastrado com sucesso! Seu nome de usuario é: ".$username;
   } 


/////////////////////////




//4 fechando a conexão
mysqli_close($conexao);
// Nota: a variável $conexao foi definida
// no conecta_mysql.php
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
            
            
            <p><?php echo $mensagem ?></p>
            
        </section>
        
        
        
        
        
        
        <?php include "../includes/footer.php"?>
    </body>
    
</html>