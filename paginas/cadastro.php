 <!DOCTYPE html>
<html>
    
    <head>
        <title>E-Sports Society</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
    <body>
        <?php include "../includes/menu.php"?>
        
        
        
        
            <h1 style="text-align:center;" type="text/css">
                
            Cadastro</h1>
            
            <form id="cadastro">
                <p><label for="nome"> Nome Completo:</label>
                <input type="text" name="nome" id="nome" size="30" required/></p>
                
                 <p><label for="email"> E-Mail:</label>
                 <input type="email" name="email" id="email" size="20" required/></p>
 
                 <p><label for="cemail"> Confirmar E-Mail:</label>
                 <input type="email" name="cemail" id="cemail" size="20" required/></p>
                 
                  <p><label for="username"> Username</label>
                 <input type="text" name="username" id="username" size="30" required/></p>
                 
                  <p><label for="senha"> Senha</label>
                 <input type="password" name="senha" id="senha" size="30" required/></p>
                 
                  <p><label for="csenha"> Confirmar Senha</label>
                 <input type="password" name="csenha" id="csenha" size="30" required/></p>
                 
                
                 
                 <p><input type="submit" value="Enviar" name="enviar" ></p>
 
                
            </form>
            
            
       
        
        
        
        
        
        
        <?php include "../includes/footer.php"?>
    </body>
    
</html>