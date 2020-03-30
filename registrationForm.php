<?php
include ('session.php');
include_once ('autorizationProof.php');
protect_page(1);
include ('header.php');
include ("Include/css_connect.php");
?>

<form class="formRegistration needs-validation" method="post" action="registrationController"
      oninput='passwordRegistrationConfirm.setCustomValidity(passwordRegistration.value != passwordRegistrationConfirm.value ? "Пароли не совпадают." : "")' novalidate>
    <div class="container py-3">
        <div class="form-group row">

            <div class="col-sm-12">
                <input type="text" class="form-control" value="<?if(isset($_SESSION['name'])) echo $_SESSION['name']?>"
                       aria-describedby="userExists" name="nameRegistration" class="form-control" id="inputName" placeholder="Логин" aria-describedby="loginHelpBlock" required>
                <small id="loginHelpBlock" class="form-text text-muted hidden">
                    Логин должен состоять только из русских букв, пробелов и дефисов и содежать как минимум 3 символа (без учёта пробелов в начале и в конце).
                </small>
                <div class="invalid-feedback">
                    Пожалуйста, введите логин
                </div>
                <?php
                if(isset($_SESSION['invalidName'])){
                    echo '<small id="userExists" class="form-text text-danger">
                    Пользователь с таким логином уже существует.
                </small>';
                    unset($_SESSION['invalidName']);
                }
               ?>

            </div>
        </div>
        <div class="form-group row">

            <div class="col-sm-12">
                <input type="email" class="form-control" value="<?if(isset($_SESSION['email'])) echo $_SESSION['email']?>"
                       name="emailRegistration" aria-describedby="emailExists" id="inputEmail" placeholder="Email" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите email
                </div>
                <?php
                if(isset($_SESSION['invalidEmail'])){
                    echo '<small id="emailExists" class="form-text text-danger">
                    Пользователь с таким email уже существует.
                </small>';
                    unset($_SESSION['invalidEmail']);
                }
                ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" name="passwordRegistration" class="form-control" id="inputPassword1" placeholder="Пароль" aria-describedby="passwordHelpBlock" required>
                <small id="passwordHelpBlock" class="form-text text-muted hidden">
                   Не менее 6 символов (без учёта пробелов в начале и в конце).
                </small>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" name="passwordRegistrationConfirm" class="form-control" id="inputPassword2" placeholder="Подтверждение пароля" required>
            </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="invalidCheck" required>
            <label class="form-check-label" for="exampleCheck1">Согласие на обработку персональных данных</label>
            <div class="invalid-feedback">
                Вы должны согласиться, прежде чем зарегистрироваться.
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-outline-success" name="register" onclick="return validateFormRegistration()" id="submitbutton">Зарегистрироваться</button>
            </div>
        </div>
    </div>
</form>

<?php
if(isset($_SESSION['name'])){
    unset($_SESSION['name']);
}

if(isset($_SESSION['email'])){
    unset($_SESSION['email']);
}
?>
