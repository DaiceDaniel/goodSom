<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Principal</title>
        <link rel="stylesheet" tupe="text/css" href="principal.css">
    </head>
        <script language="javascript" src="configuracao.js"></script>
    <body>
        <div id="pagina">
        <div class="barrapesquisa">
            <form method="post" id="cadastro" action="">
            <input type="text" name="tNome" id="cNome"  placeholder="digite para pesquisar"/> 
            <div class="bot"><input type="button" id="entrar" value=""/></div>
           
            </form>
        </div>

        <nav id="menu">
            <h1>MENU PRINCIPOAL</h1>
            <ul type="disk">
                <li><a href="blaa">HOME</a></li>
                <li><a href="blaa">GUITARRAS</a></li>
                <li><a href="blaa">PIANOS</a></li>
                <li><a href="login.php">BATERIAS</a></li>
                <li><a href="login.php">DASHBOARD</a></li>
            
            </ul>
        </nav>
       <div class="corpo">
        
        <div class="logotipo"> 
            <div class="log">
                <div class="logoimage"><img src="IMAGENS/LOGO.png" width="150px" height="130px"></div>
                <div class="logoletra"><img src="IMAGENS/LOGO2.png" width="450px" height="80-px"></div>
        </div> 
        
    </div>
        <div class="slider">
            <div class="slides">
            <input type="radio" name="radiobt" id="radio1">
            <input type="radio" name="radiobt" id="radio2">
            <input type="radio" name="radiobt" id="radio3">
            <input type="radio" name="radiobt" id="radio4">
            <input type="radio" name="radiobt" id="radio5">

            <div class="slide first">
                <img src="IMAGENS/SLIDER/AP3.png" alt="imagem 1"/>
            </div>
            <div class="slide">
                <img src="IMAGENS/SLIDER/AP4.jpg" alt="imagem 2"/>
            </div>
            <div class="slide">
                <img src="IMAGENS/SLIDER/AP3.jpg" alt="imagem 3"/>
            </div>
            <div class="slide">
                <img src="IMAGENS/SLIDER/AP5.JPG" alt="imagem 4"/>
            </div>
            <div class="slide">
                <img src="IMAGENS/SLIDER/AP1L.png" alt="imagem 4"/>
            </div>


            <div class="navegation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
            </div>
        </div>
    </div>
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
        </div>


        <div id="subcorpo">
            <div class="primeira">
                <img src="IMAGENS/guitarra.jpg" width="200px" height="200px">
                <h1><a href=""> 35.000KZ</a></h1>
                <h2><a href="">GUITARRA AUCUSTICA</a></h2>
            </div>
            <div class="segunda">
                <img src="IMAGENS/MICK.jpg" width="200px" height="200px">
                <h1><a href=""> 190.000KZ</a></h1>
                <h2><a href="">MICROFONES PARA CARAOKES</a></h2>
            </div>
            <div class="terceira">
                <img src="IMAGENS/GUITARRA4.jpg" width="200px" height="200px">
                <h1><a href="">68.000KZ</a></h1>
                <h2><a href="">GUITARRA AUCUSTICA ELECTRICA</a></h2>
            </div>
            <div class="quarta">
                <img src="IMAGENS/TECLADO.jpg" width="200px" height="200px">
                <h1><a href="">105.000KZ</a></h1>
                <h2><a href="">PIANO YAMAHA DE 350</a></h2>
            </div>
        </div>
        <div id="subcorpodois">
            <div class="primeira"> 
                <img src="IMAGENS/GUITARRA3.jpg" width="200px" height="200px">
                <h1>45.000KZ</h1>
                <h2>GUITARRA AUCUSTICA ELECTRICA</h2></h2>
            </div>
            <div class="segunda">
                <h1><img src="IMAGENS/MICK4.jpg " width="200px" height="180px">
                <h1>45.000KZ</h1>
                <h2>MICROFONES PARA PARA CAPTAÇÃO</h2>
            </div>
            <div class="terceira"> <h1>
                <img src="IMAGENS/VIOLA.png" width="200px" height="180px">
                <h1>75.000KZ</h1>
                <h2>GUITARRA ELECTROICA</h2>
            </div>
            <div class="quarta"><h1> <h1>
                <img src="IMAGENS/MICK8.jpg " width="200px" height="180px">
                <h1>75.000KZ</h1>
                <h2>MICROFONES PARA PARA CAPTAÇÃO</h2>
            </div>
        </div>
        <div id="subcorpotr">
            <div class="primeira"><h1>PRIMEIRA</h1>
                <h2>PRIMEIRA</h2></div>
            <div class="segunda"><h1>PRIMEIRA</h1>
                <h2>PRIMEIRA</h2></div>
            <div class="terceira"><h1>PRIMEIRA</h1>
                <h2>PRIMEIRA</h2></div>
            <div class="quarta"><h1>PRIMEIRA</h1>
                <h2>PRIMEIRA</h2></div>
        </div>

<div id="fim">
       
       <div class="conteiner">
          
            <div class="galeria-wrapper">
                <div class="galelia">
                    <img src="IMAGENS/MICK8.jpg " width="200px" height="180px" alt="Ga" class="item corrent-item">
                    <img src="IMAGENS/guitaarra.jpg " width="200px" height="180px" alt="Ge" class="item">
                    <img src="IMAGENS/GUITARRA3.jpg " width="200px" height="180px" alt="Gi" class="item">
                    <img src="IMAGENS/MICK5.jpg " width="200px" height="180px" alt="Go" class="item">
                    <img src="IMAGENS/VIOLA.png " width="200px" height="180px" alt="Gu" class="item">
                </div>
            </div>
       </div>

       <div id="rodape">

       </div>
    </div>
       <a href="blaa">link master</a>
       <img src="">
    </div>    
</div>
    
    
    <script>


let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function(){
    nextImage();
}, 6000)
 
function nextImage(){
    count++;
    if(count>6){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;
}




const control = document.querySelectorAll('.control');
         let correntItem = 0;
         const items = document.querySelectorAll('.item');
         const maxItems = items.length;

         controls.forEach(control => {
             control.addEventlistener('click', () => {
                 const isLeft = control.classlist.contains('arrow-left');
                 
                 if (isLeft){
                     correntItem -= 1;
                 }else {
                     correntItem +=1;
                 }
                 if(correntItem >= maxItems){
                    correntItem = 0; 
                 
                }
                  if(correntItem < 0){
                     correntItem = maxItems - 1;
                 }
                 item.forEach((item) => item.classlist.remove('corrent-item'));
                 items[correntItem].scrollIntoView({
                     inline: "center",
                     behavior: "smooth",
                 });
                 items[correntItem].classList.add("corrent-item");
                
         });
        });
    </script>
   
  

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>