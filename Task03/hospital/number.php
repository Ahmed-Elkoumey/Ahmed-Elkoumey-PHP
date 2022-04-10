<?php
session_start();

// $_POST['userNumber']='';


if(isset($_POST['userNumber'])){
  $_SESSION['num']=$_POST['userNumber'];
  header('location:review.php');die;
  }


?>

<!doctype html>
<html lang="en">

<head>
    <title>Number</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
       <div class='row m-5'>
            <div class="col-12 text-center mt-5 text-primary">
                <i class="fa fa-hospital-o text-primary" style="font-size:60px" ></i>
                <h1>Please Tell us Your Review About The Hospital</h1>
            </div>
        <form  method="post" class="col-10 offset-2 txet-center my-5">

<input type="number" name="userNumber" class="w-50" value="<?= $_POST['userNumber'] ?? ""; ?>"" placeholder="Please Enter Your Number">
            <button class="btn btn-primary col-4">Click Here</button>
        </form>
    
       </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>