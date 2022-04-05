<?php







if ($_POST) {

  $total = $_POST['Physics'] + $_POST['Chemistry'] + $_POST['Biology'] + $_POST['Mathematics'] + $_POST['Computer'];
  if ($total >= 0 && $total <= 250) {
    $precent_grade = $total * 100 / 250;
    $precent = "";

  switch ($precent) {
    case '90':
       $grade = 'A';
      break;

    case '80':
       $grade = 'B';
      break;

    case '70':
       $grade = 'C';
      break;

    case '60':
       $grade = 'D';
      break;

    case '40':
       $grade = 'E';
      break;

    case '39':
       $grade = 'F';
      break;
  }


    $res = "<div class='alert alert-success offset-2 mt-3 text-center'>
            Your Grade is {$total} <br> Your precent is {$precent_grade}%  You are {$grade}
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



        <form method="POST" name="Grade" class="row w-100 offset-1">
          <div class="form-group col-4">
            <label name="Grade" for="Physics">Physics</label>
            <input type="text" name="Physics" id="Physics" class="form-control" placeholder="Physics" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Physics</small>
          </div>


          <div class="form-group col-4">
            <label name="Grade" for="Chemistry">Chemistry</label>
            <input type="text" name="Chemistry" id="" class="form-control" placeholder="Chemistry" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Chemistry</small>
          </div>


          <div class="form-group col-4">
            <label name="Grade" for="Biology">Biology</label>
            <input type="text" name="Biology" id="" class="form-control" placeholder="Biology" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Biology</small>
          </div>


          <div class="form-group col-4">
            <label name="Grade" for="Mathematics ">Mathematics </label>
            <input type="text" name="Mathematics" id=" " class="form-control" placeholder="Mathematics " aria-describedby="helpId">
            <small id="helpId" class="text-muted">Mathematics </small>
          </div>
          <div class="form-group col-4 offset-4">
            <label name="Grade" for="Computer ">Computer </label>
            <input type="text" name="Computer" id=" " class="form-control" placeholder="Computer " aria-describedby="helpId">
            <small id="helpId" class="text-muted">Computer </small>
          </div>
          <button class="btn btn-primary offset-3 w-50">Claculate The Grade</button>
        </form>
        <?= $res++  ?>
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