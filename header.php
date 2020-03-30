<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-secondary ">
    <a class="navbar-brand" href="/">Главная</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">

            <?php if(isset($_SESSION['currentUser'])):?>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">Привет, <?php echo $_SESSION['currentUser']?></a>
                </li>
            <?php endif; ?>
            <?php if(isset($_SESSION['currentUser'])):?>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="addPost">
                    <i class="fas fa-plus"></i> Добавить пост
                </a>
            </li>
            <?php endif; ?>

            <?php if(isset($_SESSION['currentUser'])):?>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="logout">
                    <i class="fas fa-sign-out-alt"></i> Выйти</a>
            </li>

            <?php endif; ?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Профиль </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <?php if(!isset($_SESSION['currentUser'])):?>
                    <a class="dropdown-item waves-effect waves-light" href="sign_in">Войти в аккаунт</a>
                    <a class="dropdown-item waves-effect waves-light" href="registrationForm">Зарегистрироваться</a>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['currentUser'])):?>
                        <a class="dropdown-item waves-effect waves-light" href="#">Информация об аккаунте</a>
                    <?php endif; ?>

                </div>
            </li>
        </ul>
    </div>
</nav>