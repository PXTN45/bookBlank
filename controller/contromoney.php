<?php
session_start();
$json = file_get_contents("../view/databank.json");
// print_r(json_decode($json));
$data_bank = json_decode($json);
        // collect value of input field
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $wallet = $_POST['wallet'];
        $image = $data_bank[$_POST['bank']]->image;
        $bank_name = $data_bank[$_POST['bank']]->bank_name;
        $name = $data_bank[$_POST['bank']]->name;
        $account_number = $data_bank[$_POST['bank']]->account_number;


        if (empty($firstname)) {
            echo "Name is empty";
        } else {
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['wallet'] = $wallet;
            $_SESSION['image'] = $image;
            $_SESSION['bank_name'] = $bank_name;
            $_SESSION['name'] = $name;
            $_SESSION['account_number'] = $account_number;

        }
        header("location: ../view/showdata.php");
        exit(0);
   
?>