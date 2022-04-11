<?php
if($_POST){
    // print_r($_POST);

$berMont =$_POST['loanYears']*12;


    if($_POST['loanYears'] <= 3){
        $bankInterest=0.1;
    }else{
        $bankInterest =0.15;
    }

    $money_insert =($_POST['loanAmount']*$bankInterest)* $_POST['loanYears'];
    $loan_after =$_POST['loanAmount']+$money_insert ;
    $Monthly = $loan_after / $berMont;




   $toal_calc= "
    
    <table class='table table-striped mt-5'>
  <thead>
    <tr class='table-dark'>
      <th class='font-weight-bold text-success' scope='col'>User Name</th>
      <th class='font-weight-bold text-success' scope='col'>Loant Rate</th>
      <th class='font-weight-bold text-success' scope='col'>Loan After Insert</th>
      <th class='font-weight-bold text-success' scope='col'>Monthly</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class='text-primary' scope='row'>".ucfirst($_POST['uesr'])."</th>
      <td class='text-primary' >{$money_insert}</td>
      <td class='text-primary' >{$loan_after}</td>
      <td class='text-primary' >{$Monthly}</td>
    </tr>
    
  </tbody>
</table>
    
    ";
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
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container ">

        <div class="row mt-5">
            <i class="fa fa-university col-12 text-center" style="font-size: 3em;" aria-hidden="true"></i>

        </div>

        <form class="mt-5" method="POST">
            <div class="form-group">
                <label for="name" class="text-primary" style="font-weight: 900; font-size: 1.5em;">User Name</label>
                <input type="text"   value="<?= $_POST['uesr'] ?? "";?>" name="uesr" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="text-primary" style="font-weight: 900; font-size: 1.5em;">Loan Amount</label>
                <input type="number"  value="<?= $_POST['loanAmount'] ?? "";?>" name="loanAmount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Loan Amount">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="text-primary" style="font-weight: 900; font-size: 1.5em;">Loan Years</label>
                <input type="number" value="<?= $_POST['loanYears'] ?? "";?>" name="loanYears" class="form-control" id="exampleInputPassword1" placeholder="Loan Years Numbers">
            </div>

            <button type="submit" class="btn btn-primary offset-3 col-6">Submit</button>
        </form>
        <?= $toal_calc ?? "";?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>