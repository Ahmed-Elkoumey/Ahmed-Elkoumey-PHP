<?php

if ($_POST['grade']) {
  
  
  $total = $_POST['grade'] * 5;
  $precent_grade = $total * 100 / 250;

  if($total <= 250 && $total >= 225){
        $message = "A";
    }elseif($total >= 200 && $total <= 224){
        $message = "B";
    }elseif($total >= 175 && $total <= 200){
        $message = "C";
    }elseif($total >= 150 && $total <= 175){
      $message = "D";
  }elseif($total >= 100 && $total <= 150){
    $message = "E";
}else{
        $message = "F";
    }
    
  
  
// echo $message;  



  if ($total >= 0 && $total <= 250) {
    



    $res = "<div class='alert alert-success offset-2 mt-3 text-center'>
            Your Degree is {$total} <br> Your precent is {$precent_grade}% <br/> You Grade Is {$message}
            </div>";
  } else {
    $res = "<div class='alert alert-warning offset-2 mt-3 text-center'>
            please enter a valied number
            </div>";
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
      <div class="col-12">
        <h1 class="text-center text-primary mt-3">Grade Of The Year</h1>
      </div>
      <div class="col-10">



        <form method="POST"  class="row w-100 offset-1">
          <div class="form-group col-4">
            <label  for="Physics">Physics</label>
            <input type="number" name="grade" id="Physics" class="form-control" placeholder="Physics" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Physics</small>
          </div>


          <div class="form-group col-4">
            <label  for="Chemistry">Chemistry</label>
            <input type="number" name="grade" id="" class="form-control" placeholder="Chemistry" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Chemistry</small>
          </div>


          <div class="form-group col-4">
            <label  for="Biology">Biology</label>
            <input type="number" name="grade" id="" class="form-control" placeholder="Biology" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Biology</small>
          </div>


          <div class="form-group col-4">
            <label  for="Mathematics ">Mathematics </label>
            <input type="number" name="grade" id=" " class="form-control" placeholder="Mathematics " aria-describedby="helpId">
            <small id="helpId" class="text-muted">Mathematics </small>
          </div>
          <div class="form-group col-4 offset-4">
            <label  for="Computer ">Computer </label>
            <input type="number" name="grade" id=" " class="form-control" placeholder="Computer " aria-describedby="helpId">
            <small id="helpId" class="text-muted">Computer </small>
          </div>
          <button class="btn btn-primary offset-3 w-50">Claculate The Grade</button>
        </form>
        <?php echo $res ?? "" ?>
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