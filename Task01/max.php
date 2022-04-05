<?php
if ($_POST) {

$maxVal=$_POST['MaxNum'];

$midVal =$_POST['MidNum'];

$Min_Val =$_POST['MinNum'];



    if($maxVal > $midVal && $maxVal>$Min_Val) {
        $message = "<div class='alert alert-primary mt-3 p-5'> max value is => {$maxVal} <br> MIn number is => {$Min_Val}
        </div>";
        
    } elseif($maxVal < $midVal && $midVal>$Min_Val)
    {
        $message = "<div class='alert alert-warning mt-3 p-5'>Pleas write in the right inputs</div>";
        
    }else{
        $message = "<div class='alert alert-warning mt-3 p-5'>Pleas write in the right inputs</div>";
        
    }
}

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
  </head>
  <body>
      



<div class="container">
    <div class="row">
        <div class="col-12 text-center text-primary mt-3">
            <h1>MAX & MIN NUMBER</h1>
            <div class="col-6 offset-3 mt-3">
                <form method="post">
                <input type="number" class="w-100 mt-2" placeholder="Max_Number" name="MaxNum" id="">
                <input type="number" class="w-100 mt-2" placeholder="Mid_Number" name="MidNum" id="">
                <input type="number" class="w-100 mt-2" placeholder="Min_Number" name="MinNum" id="">
                <button class="btn btn-info mt-2 w-75">See Resulte</button>


                </form>
                <?php 
                if(isset($message)){
                    echo $message;
                }
                ?>
            </div>
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