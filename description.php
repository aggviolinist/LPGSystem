<DOCTYPE html>
 <?php
 include("functions/functions.php"); //includes specific folders and files into html
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
    <img id= "logo"src = "images/run.jpg"/>
    </div>
</div>
<div class="menubar"> <!--menu div -->
<ul id="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Book Cylinder</a></li>
    <li><a href="#">Cart</a></li>
    <li><a href="#">Log in</a></li>
    <li><a href="#">Sign up</a></li>
</ul>
<div id="form">
    <form method="get" action="gas.php" enctype="mutlipart/form-data"><!--Multitype  used when getting images from DB-->
    <input type="text" name="user_text" placeholder="what are you looking for?"/>
    <input type="submit" name="search" value="find gas cylinder" />
    </form> 
</div>
</div> 

     <div class="content_wrapper">
        <div style="width: 800px; height: 40px;background-color: lawngreen; padding-left: 750px; margin-left:50px;"><!--shopping cart -->
          <span style="float:left; text-align: center; font-size: 18px; padding:5px; line-height:40px">
          Welcome User!
          </span>
          <i style='padding:18px;'class="fa-solid fa-cart-shopping"></i><a style='text-decoration:none;color:blue' href="cart.php">My Cart</a>


        </div>

        <div id="sidebar">  <!--side div -->
        <div>
            <ul id="siddy">
            <li><i class="fa-solid fa-house-user"></i><a href="#">Dashboard</a></li><br>
            <li><i class="fa-solid fa-cart-shopping"></i><a href="#">Cart</a></li><br>
            <li><i class="fa-solid fa-calendar-check"></i><a href="#">Book cylinder</a><li padding-right:10px;><?php getCategory();?></li></li><br> 
            <li><i class="fa-solid fa-user"></i><a href="#">My account</a></li><br>
            <li><i class="fa-solid fa-power-off"></i><a href="#">Log out</a></li>


        
        </ul>

        
        </div>



        </div>
        <div id= "content_area" ><!--content area div -->
        <div id="display"> <!--calling the display function --->
            <?php
            //display();

            
            ?>


         </div>



        </div> 

      </div>
         <div id ="footer" style=padding-top:30px;>Kelvin Mulandi &copy; All Rights Reserved</div> <!--footer div -->





</body>

</html>
