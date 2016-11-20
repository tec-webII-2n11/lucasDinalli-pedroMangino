<header><figure>
 <a style="color:black" href="index.php" >
  <img style="float:left;" src="../img/LogoFinal.png" width="150" height="130" alt="logo">
   </a>
 </figure></header>
<nav>   
    <ul id="menu-bar">
     <li><a href="index.php">Home</a></li>
     <li><a href="#">Jogos</a>
      <ul>
       <li><a href="jlol.php">League of Legends </a></li>
       <li><a href="jcs.php">Counter Strike: Global Offensive</a></li>
       <li><a href="jhs.php">Hearthstone</a></li>
       <li><a href="jdota.php">Dota 2 </a></li>
       <li><a href="jsmite.php">Smite </a></li>
       <li><a href="jsc.php">StarCraft 2 </a></li>
      </ul>
     </li>
     <li><a href="timeline.php">Posts</a>
      
     
     
     
     
      <?php if(isset($_COOKIE['usuario'])){
        
        echo('<li><a href="novopost.php">Postar</a></li> <li><a href="#">'.$_COOKIE['usuario'].'</a></li> <li><a href="logout.php">Sair</a></li> ');
        }
        else{echo('<li><a href="entrar.php">Entrar</a></li> <li><a href="cadastro.php">Cadastre-se</a></li>');}
        ?>
        
        <li><a href="suporte.php">Suporte</a></li>
    </ul>
</nav>