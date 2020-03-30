<?include ('session.php');
include_once ('autorizationProof.php');
protect_page(0);
include ('header.php');
require ('Include/css_connect.php');

?>
<form class="formRegistration needs-validation" method="post" action="addPostController" enctype="multipart/form-data" novalidate>
    <div class="container body py-3">
        <div class="form-group row">

            <div class="col-sm-12">
                <input type="text" class="form-control"  name="namePost" value="<? if(isset($_SESSION['namePost'])) echo $_SESSION['namePost']?>"
                       id="inputName" placeholder="Название поста" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите название поста
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="description"
                          aria-describedby="inputGroupPrepend" placeholder="Описание" required><? if(isset($_SESSION['description'])) echo $_SESSION['description']?></textarea>
                <div class="invalid-feedback">
                    Пожалуйста, введите описание
                </div>
            </div>
        </div>
        <div class="form-group row" id="main">
            <div class="col-sm-12" id="restOf">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="filename[]" multiple required>
            <label class="custom-file-label " for="validatedCustomFile " data-placement="top">Выберите файлы</label>
            <?php
            if (isset($_SESSION['invalidData'])){
                echo '<div class="invalid-tooltip">Допустимы только следующие типы файлов: zip, doc, docx, xls, xlsx, pdf, jpg, png.</div>';
            };?>
            </div></div></div>

        <div class="form-group row">
            <div class="col">
                <button type="submit" class="btn btn-outline-success" id="myButtonReady">Создать пост</button>
                            <?php
            if (isset($_SESSION['invalidData'])){
                echo '<script type="text/javascript">',
                'newClasses()',
                '</script>';
                unset($_SESSION['invalidData']);
            }
            ;?>
            </div>
        </div>
    </div>
</form>

<?php
if(isset($_SESSION['namePost'])){
    unset($_SESSION['namePost']);
}

if(isset($_SESSION['description'])){
    unset($_SESSION['description']);
}

