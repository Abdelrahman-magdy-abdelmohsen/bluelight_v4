<?php
include_once VIEWS . "home/header.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= path ?>front/css/register.css">
    <link rel="stylesheet" href="<?= path ?>front/css/root.css">

</head>

<body>
<?php
if (isset($success)) {
    echo "<div class='alert alert-success' role='alert'>
            $success
        </div>";
}
if (isset($errormsg)) {
    echo "<div class='alert alert-danger' role='alert'>
            $errormsg
        </div>";
}
if (isset($captacha_error)) {
    echo "<div class='alert alert-danger' role='alert'>
            $captacha_error;
        </div>";
}
?>
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="register_con m-auto pb-2 pt-2">
        <h3 class="text-center mb-3">register</h3>
        <div class="icon text-center">
            <i class="fa-solid fa-user register_icon mb-1"></i>
        </div>
        <p class="text-center mb-0">enter your email</p>
        <form method="post" class="register_from d-flex justify-content-center flex-column" action="post_user">
            <input type="text" class="form-control" placeholder="username" name="username">
            <?php if (isset($validationErrors['username'])) : ?>
                <div class="rakit alert alert-danger error-text text-center"><?= $validationErrors['username'] ?></div>
            <?php endif; ?>

            <input type="text" class="form-control" aria-describedby="" name="firstname" placeholder="Enter your firstname">
            <?php if (isset($validationErrors['firstname'])) : ?>
                <div class=" rakit alert alert-danger error-text text-center "><?= $validationErrors['firstname'] ?></div>
            <?php endif; ?>

            <input type="text" class="form-control" aria-describedby="" name="lastname" placeholder="Enter your lastname">
            <?php if (isset($validationErrors['lastname'])) : ?>
                <div class=" rakit alert alert-danger error-text text-center"><?= $validationErrors['lastname'] ?></div>
            <?php endif; ?>

            <input type="email" class="form-control" aria-describedby="" name="email" placeholder="Enter your email">
            <?php if (isset($validationErrors['email'])) : ?>
                <div class=" rakit alert alert-danger error-text text-center"><?= $validationErrors['email'] ?></div>
            <?php endif; ?>

            <input type="password" class="rounded-3 form-control" name="password" placeholder="Enter your password">
            <?php if (isset($validationErrors['password'])) : ?>
                <div class=" rakit alert alert-danger error-text text-center"><?= $validationErrors['password'] ?></div>
            <?php endif; ?>

            <input type="password" class="rounded-3 form-control " name="con_pass" placeholder="Confirm password">
            <?php if (isset($validationErrors['con_pass'])) : ?>
                <div class="rakit alert alert-danger error-text text-center"><?= $validationErrors['con_pass'] ?></div>
            <?php endif; ?>

            <a href="login" class="text-center mb-2">already have an account?</a>
            <div class="g-recaptcha d-flex justify-content-center mb-1" data-sitekey="6Le6pB4pAAAAAJUEf8zUZtLoJkIjUqeNcyZGc0SQ"></div>
            <button type="submit" class="btn btn-primary m-auto rounded-pill " name="register_btn">register</button>
        </form>
    </div>
</div>

</body>

</html>
<html>
<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>



</body>
</html>