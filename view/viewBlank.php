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
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.img{
    width: 10px;
    border-radius: 10%;    
}
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col-2"></div>
    <div class="col-8">
      <form action="/view/inputForm.php" method="post">
      <table>
  <tr>
    <td>
      <input type="checkbox" id="vehicle1" name="bank" value="kbank">
    </td>
    <td class="img">
        <img src="../image/kbank.jpg"  width="100px" style="border-radius: 10%;"  alt="">
    </td>
    <td>
      <h6>กสิกรไทย</h6>
      <h6>สะพานเหลือง</h6>
      <h6>011-2-25379-3</h6>
    </td>
  </tr>
  <tr>
    <td><input type="checkbox" id="vehicle1" name="bank" value="KTB"></td>
    <td class="img">
        <img src="../image/KTB.jpg"  width="100px" style="border-radius: 10%;"  alt="">
    </td>
    <td>
      <h6>กรุงไทย</h6>
      <h6>สุรวงศ์</h6>
      <h6>023-1-19265-7</h6>
    </td>
  </tr>
  <tr>
    <td><input type="checkbox" id="vehicle1" name="bank" value="BAY"></td>
    <td class="img">
        <img src="../image/BAY.png"  width="100px" style="border-radius: 10%;"  alt="">
    </td>
    <td>
      <h6>กรุงศรีอยุธยา</h6>
      <h6>สะพานเหลือง</h6>
      <h6>131-1-00001-6</h6>
    </td>
  </tr>
  <tr>
    <td><input type="checkbox" id="vehicle1" name="bank" value="BBL"></td>
    <td class="img">
        <img src="../image/BBL.png"  width="100px" style="border-radius: 10%;"  alt="">
    </td>
    <td>
      <h6>กรุงเทพ</h6>
      <h6>สยามสแควร์</h6>
      <h6>131-1-00001-6</h6>
    </td>
  </tr>
  <tr>
    <td><input type="checkbox" id="vehicle1" name="bank" value="SCB"></td>
   <td class="img">
        <img src="../image/SCB.png"  width="100px" style="border-radius: 10%;"  alt="">
    </td>
    <td>
      <h6>ไทยพาณิชย์</h6>
      <h6>สภากาชาดไทย</h6>
      <h6>045-2-35809-1</h6>
    </td>
  </tr>
  <tr>
    <td><input type="checkbox" id="vehicle1" name="bank" value="TMB"></td>
    <td class="img">
        <img src="../image/TMB.jpg"  width="100px" style="border-radius: 10%;"  alt="">
    </td>
    <td>
      <h6>ทีเอ็มบีธนาชาต</h6>
      <h6>จามจุรีสแควร์</h6>
      <h6>238-2-11007-6</h6>
    </td>
  </tr>
</table>
<br>
<br>
        <button type="submit" name="OK" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-2"></div>
  </div>
</div>
</body>
</html>
