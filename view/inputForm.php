<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <br><br><br>
  <?php
    $json = file_get_contents("./databank.json");
    // print_r(json_decode($json));
    $data_bank = json_decode($json);
    ?>
  <center>

<form method="post" action="../controller/contromoney.php">
    <div class="container-md mt-4">
            <h1>เพิ่มคอร์ส</h1>
            <div  class="col-4"></div>
            <div class="col-4"> 

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firstname" name = "firstname" placeholder="firstname">
                <label for="floatingPassword">firstname</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lastname" name = "lastname" placeholder="lastname">
                <label for="floatingInput">lastname</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="wallet" name = "wallet" placeholder="wallet">
                <label for="floatingInput">wallet</label>
            </div>

            <!-- <div class="form-floating mb-3">
                <input type="text" class="form-control" id="image" name = "image" placeholder="image">
                <label for="floatingInput">image</label>
            </div> -->
            <!-- </center> -->
                <!-- <p class="text-lg text-gray-800 mt-5 mb-5">เลือกธนาคาร</p> -->

                <form action="/view/showdata.php">
                <select id="bank" name="bank"
                    class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>เลือกธนาคาร</option>
                    <?php
                    foreach ($data_bank as $value) {
                        ?>
                        <option value="<?= $value->id ?>">
                            <?= $value->bank_name ?>
                        </option>

                    <?php } ?>
                </select>
    </form>
            </div>
            <!-- <center> -->
            <button type="submite" class="btn btn-success">เพิ่มข้อมูล</button>
        </center>
    </div>
</div>
</form>


</body>
</html>
