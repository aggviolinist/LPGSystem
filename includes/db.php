<?php
$connection=mysqli_connect("localhost","root","","LPGSYSTEM");
if(mysqli_connect_errno())
{
    echo "No connection to the database:".mysqli_connect_errno();
}

?>