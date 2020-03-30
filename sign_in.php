<?php
include ('session.php');
include_once ('autorizationProof.php');
protect_page(1);
include ('header.php');
include ('Include/css_connect.php');
?>

<form class="formRegistration needs-validation" method="post" action="sign_inController" novalidate>
    <div class="container py-3">
    <div class="form-group row">
            <div class="col-sm-12">
                <input type="email" class="form-control" value="<? if(isset($_SESSION['email'])) echo $_SESSION['email']?>"
                       name="emailSignIn" id="inputName" placeholder="Email" aria-describedby="emailExists" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите email
                </div>
                <?php
                if(isset($_SESSION['invalidEmail'])){
                    echo '<small id="emailExists" class="form-text text-danger">
                    Пользователя с таким email не существует.
                </small>';
                    unset($_SESSION['invalidEmail']);
                }
                ?>
            </div>
    </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" name="passwordSignIn" class="form-control" id="inputPassword1"
                       placeholder="Пароль" aria-describedby="passwordHelpBlock" aria-describedby="passwordProof" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите пароль
                </div>

                <?php
                if(isset($_SESSION['invalidPassword'])){
                    echo '<small id="passwordProof" class="form-text text-danger">
                    Неправильный пароль
                </small>';
                    unset($_SESSION['invalidPassword']);
                }
                ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="buttonSignIn" class="btn btn-outline-success" id="submitbutton">Войти</button>
            </div>
        </div>
    </div>
</form>

<?php if(isset($_SESSION['email'])) {unset($_SESSION['email']);}

