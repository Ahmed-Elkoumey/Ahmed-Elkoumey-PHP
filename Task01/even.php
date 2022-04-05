
<?php
    $res = "";
if($_POST){

$number = $_POST['Number'];

   if(($number % 2) == 1){
        $res = "<div class='alert alert-primary'>
            <p>Your Number IS {$number} and it is Odd</p>
                </div>";
    }
    
    elseif(($number % 2) == 0){
        $res = "<div class='alert alert-success'>
                <p>Your Number IS {$number} and it is Even</p>
                </div>";
    } 
}
?>




<!doctype html>
<html lang="en">
  <head>
    <title>odd Even check</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="text-primary text-center">
                ODD & EVEN NUMBER CHECK 
            </h1>
            
        </div>
        <div class="col-6 offset-3">
        <form  method="POST">
              <label for="odd_even"></label>
              <input type="number" name="Number" id="odd_even" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
              <button class="btn btn-primary mt-2 w-100 font-weight-bold"">Check Number</button>
              
            </form>
            <?php
               
               echo $res;
           
           
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