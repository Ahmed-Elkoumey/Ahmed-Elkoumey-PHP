

<?php


// $numberVal = ;
// if ($_SERVER['REQUEST_METHOD'] === "GET") {
//     echo "<h1>Error 405 Method Not Allowed</h1>";
//     http_response_code(405);
//     die;
// }
if($_POST){
    if($_POST['Number'] >= 0){
        $res= "<div class='alert alert-primary text-center'>
        Positive
            </div>";
    }else{
        $res= "<div class='alert alert-danger text-center'>
        Negative
            </div>";
    }
    
    
}
    ?>


<!doctype html>
<html lang="en">
  <head>
    <title>NEG_POS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>




<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5 text-info">
            <h2>Negative  or Postive</h2>
        </div>
        <div class="col-6 offset-3 mt-5">
        <form method="POST">
            <input type="number" class="w-100" name="Number" id="">
            <button class="btn btn-primary w-100 mt-2">Get Value</button>
        </form>
        <?php
        if(isset($res)){
            
        echo $res;
        
        }
        ?>
        </div>
    </div>
</div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>