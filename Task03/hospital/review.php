<?php
session_start();


// if ($_SERVER['REQUEST_METHOD'] === "GET") {
//   echo "<h1>Error 405 Method Not Allowed </h1>";
//   http_response_code(405);
//   die;
// }

foreach ($_POST as $value) {

if (isset($value)) {
  // $_POST=["nursing" ,"hygiene","prices","doctors","calm"];

  $_SESSION['reviews']=$value ;

  echo $value;
  
  
}
}
//   // header('location:result.php');
//   // die;
// }


?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


  <div class="row">
  <div class="col-12 text-center mt-5 text-primary">
    <i class="fa fa-hospital-o text-primary" style="font-size:60px"></i>
    <h1>Please Rate Our Ser</h1>
  </div>
  </div>

  <form action="result.php" method="POST">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col-5">Question</th>
          <th scope="col-1">BAD</th>
          <th scope="col-1">GOOD</th>
          <th scope="col-1">VERY GOOD</th>
          <th scope="col-1">EXCELLENT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Are you satisfied with the level of hygiene?</th>
          <td><input type="radio" name="hygiene" value="Bad"></td>
          <td><input type="radio" name="hygiene" value="good"></td>
          <td><input type="radio" name="hygiene" value="very Good"></td>
          <td><input type="radio" name="hygiene" value="Excellent"></td>

        </tr>



        <tr>
          <th scope="row">Are you satisfied with the prices of services?</th>
          <td><input type="radio" name="prices" value="Bad"></td>
          <td><input type="radio" name="prices" value="good"></td>
          <td><input type="radio" name="prices" value="very Good"></td>
          <td><input type="radio" name="prices" value="Excellent"></td>

        </tr>

        <tr>
          <th scope="row">Are you satisfied with the nursing service?</th>
          <td><input type="radio" name="nursing" value="Bad"></td>
          <td><input type="radio" name="nursing" value="good"></td>
          <td><input type="radio" name="nursing" value="very Good"></td>
          <td><input type="radio" name="nursing" value="Excellent"></td>

        </tr>
        <tr>
          <th scope="row">Are you satisfied with the level of doctors?</th>
          <td><input type="radio" name="doctors" value="Bad"></td>
          <td><input type="radio" name="doctors" value="good"></td>
          <td><input type="radio" name="doctors" value="very Good"></td>
          <td><input type="radio" name="doctors" value="Excellent"></td>

        </tr>
        <tr>
          <th scope="row">Are you satisfied with the calm at the hospital?</th>
          <td><input type="radio" name="calm" value="Bad"></td>
          <td><input type="radio" name="calm" value="good"></td>
          <td><input type="radio" name="calm" value="very Good"></td>
          <td><input type="radio" name="calm" value="Excellent"></td>

        </tr>
      </tbody>
    </table>
    <button class="w-100 btn btn-primary" style="font-size: 1.3em;">Submit Your Answer</button>

  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>