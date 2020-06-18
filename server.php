<?php
    $name = "";
    $Message = "";
    $time= date("m/d/y H:i");
    $notifcations = array();
    $posts = array();
    $i=0;

    //connect to the database
    $db = mysqli_connect('localhost','root','','namelist');

    // pull post from database
    $sql= "Select * FROM list ORDER BY time DESC";
    $result = mysqli_query($db, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $posts['name'][$i]=$row["name"];
            $posts['message'][$i]=$row["message"];
            $posts['time'][$i]=$row["time"];
            $i++;
        }
    }

    //if the post button is clicked
    if(isset($_POST['Post'])){
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $Message = mysqli_real_escape_string($db, $_POST['Message']);


        // ensure that form fields are filled properly
        if (empty($name)){
            array_push($notifcations,"Username is required");
        }
        if (empty($Message)){
            array_push($notifcations,"Message is required");
        }

        // If ther are no error, save user to database
        if (count($notifcations) == 0) {
            $sql = "INSERT INTO list (name, message, time) VALUES ('$name','$Message','$time')";
            mysqli_query($db, $sql);
            echo "<script type='text/javascript'>alert('Post Sent');</script>";
            header('location: index.php');
        }


    }

    //if the delete button is clicked
        if(isset($_POST['del'])){

            $name = mysqli_real_escape_string($db, $_POST['name']);
    
            // ensure that form fields are filled properly
            if (empty($name)){
                array_push($notifcations,"Username is required");
            }

            $sql= "Select * FROM list WHERE name= '$name'";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                $sql = "Delete From list where name = '$name'";
                mysqli_query($db, $sql);
                echo "<script type='text/javascript'>alert('Post Deleted');</script>";
                header('location: index.php');
            }
            else{
                array_push($notifcations,"User not found");
            }
        }  
?>