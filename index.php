
<?php include "database.php"; ?>
<?php

$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>JS Shoutbox</title>
        <link rel = "stylesheet" href = "style.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src = "script.js"></script>
    </head>
    
    <body>
            <div id = "container">
                <header>
                    <h1> JS Shoutbox </h1>
                </header>
                <div id = "shouts">
                
                
                <ul>
                  
                   <?php while($row = mysqli_fetch_assoc($shouts)): ?>
                        <li><?php echo $row['name']; ?> <?php echo $row['shout']; ?></li>
                    <?php endwhile ?>
                    
                </ul>
                
                
                
                
                </div>
                <footer>
                    <form>
                        
                        <label> Name:</label>
                        <input type = "text" id = "name">
                        <label>Shout Text</label>
                        <input type = "text" id = "shout">
                        <input type = "submit" id = "submit" value = "SHOUT!">
                        
                    </form>
                </footer>
            </div>
    </body>
    
</html>