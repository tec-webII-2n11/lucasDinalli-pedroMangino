 <!DOCTYPE html>
<html>
    
    <head>
        <title>E-Sports Society</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
    <body>
        <?php include "../includes/menu.php"?>
        
        
        
        
            <h1 style="margin-left:800px">Entrar</h1>
            
            <!-- o id antes era cadastro, se der problema, voltar para cadastro -->
            <form id="cadastro" method="POST" action="login.php">
                
                  <p><label for="username"> Username</label>
                 <input type="text" name="username" id="username" size="30" required/></p>
                 
                  <p><label for="senha"> Senha</label>
                 <input type="password" name="senha" id="senha" size="30" required/></p>
                 
                 
                 <p><input type="submit" value="Entrar" name="entrar" ></p>
 
                
            </form>
            
            
        
        
        
        
        
        
        
        <?php include "../includes/footer.php"?>
    </body>
    
</html>