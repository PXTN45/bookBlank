<?php
session_start();
        // collect value of input field
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        // $date = $_POST['date'];
        $wallet = $_POST['wallet'];

        if (empty($firstname)) {
            echo "Name is empty";
        } else {
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            // $_SESSTION['date'] = $date;
            $_SESSION['wallet'] = $wallet;
        }
        header("location: ../view/showdata.php");
    exit(0);
   
?>