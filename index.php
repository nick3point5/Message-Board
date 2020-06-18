<?php 
    include('server.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            List of names
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>
                Send Message
            </h2>
        </div>
        <form method="post" action="index.php">
            <?php
                include('notifactions.php');
            ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="name" value ="<?php echo $name; ?>">
            </div>
            <div class="input-group">
                <label>Message</label>
                <input type="text" name="Message" value ="<?php echo $Message; ?>">
            </div>    
            </div>            
            <div>
                <button type="submit" name="Post" class="btn">
                    Post
                </button>
                <button type="submit" name="del" class="del-btn">
                    Delete User's Post
                </button>
            </div>

            <?php
                include('log.php');
            ?>
        </form>
    </body>
</html>