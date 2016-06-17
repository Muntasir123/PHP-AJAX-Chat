<?php

$connection = mysqli_connect('localhost','root','','muntasirshoutbox');

if(isset($_POST['name']) && isset($_POST['shout']))
{
    
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $shout = mysqli_real_escape_string($connection,$_POST['shout']);
    $query = "INSERT INTO shouts(name,shout) ";
	$query.= "VALUES('$name','$shout')";
	$result = mysqli_query($connection,$query);
   
    if(!$result)
    {
        echo "doesent work".mysqli_error($connection);
    }
    else
    {
        echo '<li>'.$name.': '.$shout.'</li>';
    } 
    
    
}


?>