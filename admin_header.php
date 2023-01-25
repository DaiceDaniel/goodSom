<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">
   
      <a href="admin_page.php" class="logo">Admin<span>goodsom</span></a>
      <img src="images/IMAGENS/LOGO.png" alt="" width="70px" heght="70px"> 
      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">produtos</a>
         <a href="admin_orders.php">pedidos</a>
         <a href="admin_users.php">usuarios</a>
         <a href="admin_contacts.php">Mensagens</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>nome do usuario : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">sair</a>
         <div>novo <a href="login.php">login</a> | <a href="register.php">registar</a></div>
      </div>
      
   </div>

</header>