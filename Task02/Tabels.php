<?php
// main data
$users = [
  (object)[
    'id' => 1,
    'name' => 'Ahmed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'football', 'swimming', 'running'
    ],
    'activities' => [
      "school" => 'drawing',
      'home' => 'painting'
    ],

  ],
  (object)[
    'id' => 2,
    'name' => 'Mohamed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'swimming', 'running',
    ],
    'activities' => [
      "school" => 'painting',
      'home' => 'drawing'
    ],
  ],
  (object)[
    'id' => 3,
    'name' => 'Menna',
    "gender" => (object)[
      'gender' => 'f'
    ],
    'hobbies' => [
      'running',
    ],
    'activities' => [
      "school" => 'painting',
      'home' => 'drawing'
    ],
  ],
];

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


<!-- check of data  -->

  <?php if (!empty($users)) { ?>

    <table class="table table-striped table-dark">
      <thead>
<!-- putting the titels -->
        <tr>
          <?php foreach ($users[0] as $userTab => $userValue) {


            echo "<th class='col-2'> {$userTab}</th>";
          }

          ?>

        </tr>

      </thead>

      <tbody>
        <!-- first loop on the array -->
        <?php foreach ($users as $userLvl1) { ?>
          <tr>
        <!--nesting loop of the first loop -->

            <?php foreach ($userLvl1 as $property => $userLvl2) { ?>
              

              <!--nesting loop of the second loop -->
  <td class="col-2"><?php

                    if (gettype($userLvl2) == 'array' || gettype($userLvl2) == 'object') {

                      //getting the data from the third level array 
                      foreach ($userLvl2 as $userLvl3 => $lvl3Value) {
                        if ($userLvl3 == 'gender' && $property == 'gender') {
                          if ($lvl3Value == 'm'){
                            $lvl3Value = 'Male';
                          }else{
                            $lvl3Value = 'Female';}
                        }
                        echo " ($lvl3Value)  ";
                      }
                    } else {
                      echo $userLvl2;
                    }



                    ?></td>
            <?php } ?>

          </tr>
        <?php } ?>
      </tbody>
    </table>

  <?php } ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>