<?php
$title = "Sign-Up";
include_once "layout_include/headers.php";
include_once "layout_include/nav.php";
include_once "layout_include/bread_area.php";
?>
<div class="login-register-area ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-12 ml-auto mr-auto">
<div class="login-register-wrapper">
<div class="login-register-tab-list nav">
<a class="active" data-toggle="tab" href="#lg2">
<h4> <?= $title ?> </h4>
</a>
</div>
<div class="tab-content">
<div id="lg2" class="tab-pane active">
<div class="login-form-container">
    <div class="login-register-form">
       
        <form action="App/Http/Post/signup.php" method="post">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?=$_POST['first_name']??''; ?>">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name </label>
                <input type="text" name="last_name" id="last_name" value="<?= $_POST['last_name']??''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" value="<?= $_POST['email']??''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Phone</label>
                <input type="number" name="phone" value="<?= $_POST['phone']??''; ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender">
                    <option <?= 'gender' == 'm' ? 'selected' : '' ?> value="m">Male</option>
                    <option <?= 'gender' == 'f' ? 'selected' : '' ?> value="f">Female</option>
                </select>
            </div>
            <div class="button-box mt-5">
                <button type="submit"><span><?= $title ?></span></button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include_once "layout_include/footr.php";
include_once "layout_include/foo_scripts.php";
//  getError('first_name'); 

// <!-- <?= getError('last_name');

// <!-- <?= getError('email');

// <!-- <?= getError('phone');

// <!-- <?= getError('password');

// <!-- <?= getError('password_confirmation');

// <!-- <?= getError('gender');  
// <?= //getError('something');  
// <?= //getError('mail'); 
?>