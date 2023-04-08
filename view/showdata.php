<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showdata</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/showdata.css">
</head>
<body>
<div class="container">

        <div class="card mb-3" style="width: 600px;">
          <div class="row g-0">
            <div class="col-md-4">
            <img id = "img" src="<?= $_SESSION['image'] ?>" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h2>ธนาคาร <?= $_SESSION['bank_name']?></h2>
                <p class="card-text">ชื่อ : <?= $_SESSION['firstname'] . " " .  $_SESSION['lastname']?></p>
                <p class="card-text">จำนวนเงิน : <?= $_SESSION['wallet'] ?> บาท</p>
                <p class="card-text">ชื่อบัญชี : <?= $_SESSION['name'] ?></p>
                <p class="card-text">เลขบัญชี : <?= $_SESSION['account_number'] ?></p>

              </div>
            </div>
          </div>
        </div>

</div>
</body>
</html>