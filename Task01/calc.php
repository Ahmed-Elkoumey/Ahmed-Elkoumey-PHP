<?php 
if($_POST){


    $firstNum= $_POST['firstNum'];

    $secNum= $_POST['secondNum'];
    $oprat = $_POST['opration'];

    $result="";



    switch($oprat){
        case 'add' : $result = $firstNum + $secNum; 
            break;
        case 'sub' : $result = $firstNum - $secNum;
            break;
        case 'pro' : $result = $firstNum * $secNum;
            break;
        case 'div' : $result = $firstNum / $secNum;
            break;
    }
    
    

   
    
}


?>




<!doctype html>
<html lang="en">
  <head>
    <title>Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
      


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-success mt-5">Calculate Numbers</h1>
            </div>
            <div class="col-10">

                <form method="POST" class="w-100 offset-3 mt-3">
                    <input type="number" name="firstNum" placeholder="First Number" class="col-4 p-3">



                    <input type="number" name="secondNum" placeholder="Second Number" class="col-4 p-3">



                 <div class="col-10 mt-3 offset-2">
                 <button name="opration" value="add"  class="btn btn-primary ml-4">&plus;</button>
              
                <button name="opration"  value="sub" class="btn btn-primary ml-4">&#8722;</button>

                <button name="opration"  value="div" class="btn btn-primary ml-4">&#247;</button>

                <button name="opration"  value="pro" class="btn btn-primary ml-4">&#215;</button>
                 </div>
                
                </form>
                <div class='alert alert-info w-50 offset-4 mt-3 text-center'> <?= $result?? ""; ?></div>
             
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