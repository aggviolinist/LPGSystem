<DOCTYPE html>
 <?php
 include("functions/functions.php"); //includes specific folders and files into html

 //ini_set("display_errors","1");
 //ini_set("display_startup_errors","1");
 //error_reporting(E_ALL);
 ?>
    <head>
    <title>BOOK A CYLINDER</title>
    <link rel="stylesheet" href="css/style.css" media="all"> <!--Linking relationship stylesheet with hypertext reference on all kind of devices -->
    <link rel="stylesheet" type="text/css"href="css font_awesome/all.min.css"><!--font awesome link-->

</head>
<body>
<div class= "main_wrapper"> <!--css class-->
    <div class = "header_wrapper"> <!--header div -->
    <img id= "lpg" src = "images/dial.png" />  <!--image source-->
    <img style='margin-left: 250px;'id= "logo"src = "images/run.jpg"/>
    </div>
</div>
<div class="menubar"> <!--menu div -->
<ul id="menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="allgases.php">Book Cylinder</a></li>
    <li><a href="cart.php">Cart</a></li>
    <li><a href="login.php">Log in</a></li>
    <li><a href="signup.php">Sign up</a></li>
</ul>
<div id="form">
    <form method="get" action="gas.php" enctype="mutlipart/form-data"><!--Multitype  used when getting images from DB-->
    <input style= 'margin-left:220px;' type="text" name="user_text" placeholder="what are you looking for?"/>
    <input type="submit" name="search" value="find gas cylinder" />
    </form> 
</div>
</div> 

     <div class="content_wrapper">
        <div style="width: 800px; height: 40px;background-color: lawngreen; padding-left: 700px; margin:right:100px; margin-left:250px;"><!--shopping cart -->
          <span style="float:left; text-align: center; font-size: 18px; padding:5px; line-height:40px">
          Welcome User!
          </span>
          <i style='padding:18px;'class="fa-solid fa-cart-shopping"></i><a style='text-decoration:none;color:blue' href="cart.php">My Cart</a>


        </div>

        <div id="sidebar">  <!--side div -->
        <div>
            <ul id="siddy">
            <li><i class="fa-solid fa-house-user"></i><a href="index.php">Dashboard</a></li><br>
            <li><i class="fa-solid fa-cart-shopping"></i><a href="cart.php">Cart</a></li><br>
            <li><i class="fa-solid fa-calendar-check"></i><a href="allgases.php">Book cylinder</a><li padding-right:10px;><?php getWeight(); ?></li></li><br> 
            <li><i class="fa-solid fa-user"></i><a href="customer_account.php">My account</a></li><br>
            <li><i class="fa-solid fa-power-off"></i><a href="#">Log out</a></li>


        
        </ul>

        
        </div>



        </div>
        <div id= "content_area" ><!--content area div -->
        <div id="display"> <!--calling the display function --->
           <?php
            global $connection; //connection
            $curr = "shillings";
            $cart = "<i class='fa-solid fa-cart-shopping'></i>";
        
           $get_gases = "select * products ";
           $show_gases = mysqli_query($connection,$get_gases);

           while($show_gases_now=mysqli_fetch_array($show_gases))
           {
            $lpg_gas_id = $show_gases_now['gas_id'];
            $lpg_gas_name = $show_gases_now['gas_name'];
            $lpg_gas_company = $show_gases_now['gas_company'];
            $lpg_gas_weight = $show_gases_now['gas_weight'];
            $lpg_gas_price = $show_gases_now['gas_price'];
            $lpg_gas_description = $show_gases_now['gas_description'];



            echo 



           }



           ?>


         </div>



        </div> 

      </div>
         <div id ="footer" style=padding-top:30px;>Kelvin Mulandi &copy; All Rights Reserved</div> <!--footer div -->





</body>

</html>