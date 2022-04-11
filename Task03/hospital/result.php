<?php
session_start();


// if (isset($_POST)) {



$result =0;

foreach ($_POST as  $ansewr) {

if($ansewr =='Bad'){
    $result +=0;
}elseif($ansewr =='good'){
    $result +=3;
}elseif($ansewr =='very Good'){
    $result +=5;
}elseif($ansewr =='Excellent'){
    $result +=10;
}


}

if($result>=25){
    $message="<div class='alert alert-success text-center'> Your Total Reviews IS (Good) <br> Thank You</div>";
}else{
    $message ="<div class='alert alert-danger text-center'> Your Total Reviews IS (Bad) <br> We'r Sorry About Your Experince And We Will Call You on Your Number ({$_SESSION['num']})</div>";
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

    <form method="POST">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col-5">Question</th>
                    <th class="col-7">Ansewrs</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th scope="row">Are you satisfied with the level of hygiene?</th>


                    <td><?= $_POST['hygiene']; ?></td>

                </tr>

                <tr>
                    <th scope="row">Are you satisfied with the prices of services?</th>

                    <td><?= $_POST['prices']; ?></td>

                </tr>

                <tr>
                    <th scope="row">Are you satisfied with the nursing service?</th>


                    <td><?= $_POST['nursing']; ?></td>


                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the level of doctors?</th>

                    <td><?= $_POST['doctors']; ?></td>


                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the calm at the hospital?</th>

                    <td><?= $_POST['calm']; ?></td>


                </tr>

            </tbody>
        </table>

        <?php echo $message;?>
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>