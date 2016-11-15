<!DOCTYPE html>
<html>
    
    <head>
        <title>E-Sports Society</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
    <body>
        <?php include "../includes/menu.php"?>
        
        
       <section style="height:100%">
       
          <br>
          <br>
           <?php
                include"conecta.php";
                $line = "SELECT pID, uID, user, titulo, pic FROM post ORDER BY pID DESC";
                $result = mysqli_query($conexao,$line);
                
                if($result){
                    while ($row = mysqli_fetch_array($result)){
                       
                        
                        echo '<div = "row">';
                        
                        echo '<h2>'.$row['titulo'].'<a href="viewpost.php?id='.$row['pID'] .'"></a></h2>';
                        
                        echo '<p>Postado por '.$row['user'].' </p>';
                        
                        echo '<p> <a href="#" id='.$row['uID'].$row['user'].'</a></p>';
                        
                        
                        echo '<p><a href="viewpost.php?id='.$row['pID'].'"><img style="text-align: center" width="40%"  src="'.$row['pic'].'" alt="'.$row['titulo'].'"></a></p>';
                        echo '</div>';
                        
                        echo '</div>';
                        echo '<br>';
                    }
                }
                
            ?>
            
        
        </section> 
        
        
        
        
        
        <?php include "../includes/footer.php"?>
    </body>
    
</html>