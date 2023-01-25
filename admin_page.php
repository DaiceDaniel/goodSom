<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   
<!-- Bootstrap core CSS -->
    <link href="../good som trabalho de we/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../good som trabalho de we/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../good som trabalho de we/css/style.css" rel="stylesheet">
    <link href="../good som trabalho de we/css/style-responsive.css" rel="stylesheet">
    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

      <div class="box">
         <?php
            $total_pendings = 0;
            $select_pending = mysqli_query($conn, "SELECT total_price FROM `orders` WHERE payment_status = 'pending'") or die('query failed');
            if(mysqli_num_rows($select_pending) > 0){
               while($fetch_pendings = mysqli_fetch_assoc($select_pending)){
                  $total_price = $fetch_pendings['total_price'];
                  $total_pendings += $total_price;
               };
            };
         ?>
         <h3>$<?php echo $total_pendings; ?>/-</h3>
         <p>Conta Total</p>
      </div>

      <div class="box">
         <?php
            $total_completed = 0;
            $select_completed = mysqli_query($conn, "SELECT total_price FROM `orders` WHERE payment_status = 'aceite'") or die('query failed');
            if(mysqli_num_rows($select_completed) > 0){
               while($fetch_completed = mysqli_fetch_assoc($select_completed)){
                  $total_price = $fetch_completed['total_price'];
                  $total_completed += $total_price;
               };
            };
         ?>
         <h3>$<?php echo $total_completed; ?>/-</h3>
         <p>pagamentos concluidso</p>
      </div>

      <div class="box">
         <?php 
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
            $number_of_orders = mysqli_num_rows($select_orders);
         ?>
         <h3><?php echo $number_of_orders; ?></h3>
         <p>pedios feitos</p>
      </div>

      <div class="box">
         <?php 
            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            $number_of_products = mysqli_num_rows($select_products);
         ?>
         <h3><?php echo $number_of_products; ?></h3>
         <p>adicionar produtos</p>
      </div>

      <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p>usurio normal</p>
      </div>

      <div class="box">
         <?php 
            $select_admins = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'admin'") or die('query failed');
            $number_of_admins = mysqli_num_rows($select_admins);
         ?>
         <h3><?php echo $number_of_admins; ?></h3>
         <p>usuario admin</p>
      </div>

      <div class="box">
         <?php 
            $select_account = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            $number_of_account = mysqli_num_rows($select_account);
         ?>
         <h3><?php echo $number_of_account; ?></h3>
         <p>conta total</p>
      </div>

      <div class="box">
         <?php 
            $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>nova mensagem </p>
      </div>



	
	</div>
  
   <div class="row ">
		<div class="col-lg-12">
			<div class="card card-info">
				<h3 class="card-title center">Produtos Favoritos</h3>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="tbl_products+">
							<thead>
								<tr>
									<th>Produto id</th>
									<th>Nome do Produto</th>
									<th>Quantidade de Pedidos</th>

								</tr>
								
								<tr>
									<td><a href="../good som trabalho de we/pesquisar.php">7</a></td>
									<td><a href="../good som trabalho de we/pesquisar.php"> Guitarra aucustica</a></td>
									<td><a href="../good som trabalho de we/admin_banner.php">20</a></td>
								</tr>
								<tr>
									<td><a href="../good som trabalho de we/admin_products.php">8</a></td>
									<td><a href="../good som trabalho de we/admin_banner.php">Guitarra electrica</a></td>
									<td><a href="../good som trabalho de we/admin_products.php">12</a></td>
								</tr>
								<tr>
									<td><a href="../good som trabalho de we/admin_products.php">9</a></td>
									<td><a href="../good som trabalho de we/admin_products.php">microfones captador</a></td>
									<td><a href="../good som trabalho de we/admin_products.php">10</a></td>
								</tr>
								<tr>
									<td><a href="../good som trabalho de we/admin_products.php">10</a></td>
									<td><a href="../good som trabalho de we/admin_products.php">micro fone aucustico</a></td>
									<td><a href="../good som trabalho de we/admin_products.php">4</a></td>
								</tr>

							</thead>
						</table>
					</div>

				</div>
			</div>
		</div>

</section>

<!-- admin dashboard section ends -->









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>