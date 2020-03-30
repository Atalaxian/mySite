'use strict';

function validateFormRegistration(){
    let proof=true;
    let pass=document.getElementById('inputPassword1');
    let redElem=document.getElementById('passwordHelpBlock');
    let len=pass.value.trim().length;
    if(len>=6){
        redElem.classList.remove('myRed');
        redElem.classList.add('hidden');
    }
    else{
        redElem.classList.remove('hidden');
        redElem.classList.add('myRed');
        proof=false;
    }

    let login=document.getElementById('inputName');
    let hint=document.getElementById('loginHelpBlock');
    len=login.value.trim().length;
    if(len>=3){
        let newStr=login.value.trim().replace(/[^а-яА-ЯёЁ\-\' ']/g, '');
        if(len!=newStr.length){
           hint.classList.remove('hidden');
           hint.classList.add('myRed');
            proof=false;
        }
        else{
            hint.classList.add('hidden');
            hint.classList.remove('myRed');
        }
    }
    else{
        hint.classList.remove('hidden');
        hint.classList.add('myRed');
        proof=false;
    }
    return proof;
};

function validateAddPost() {
    let proof=true;
    let name=document.getElementById('inputName');
    let len=name.value.trim().length;
    if(len<1){
        name.classList.remove('is-valid');
        name.classList.add('is-invalid');
        proof=false;
    }
    else{
        name.classList.remove('is-invalid');
        name.classList.add('is-valid');
    }

    let description=document.getElementById('inputDescription');
    len=description.value.trim().length;
    if(len<1){
        description.classList.remove('is-valid');
        description.classList.add('is-invalid');
        proof=false;
    }
    else{
        description.classList.remove('is-invalid');
        description.classList.add('is-valid');
    }


    let files=document.getElementById('validatedCustomFile');
    if(files.value){
        files.classList.add('is-valid');
        files.classList.remove('is-invalid');
    }
    else{
        files.classList.add('is-invalid');
        files.classList.remove('is-valid');
        proof=false;
    }
    return proof;
};

(function() {
    window.addEventListener('load', function() {
        let forms = document.getElementsByClassName('needs-validation');
        let validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$(document).ready(function(){
    $(".custom-file-input").on("change", function () {
        if ($(this).val() != '') $(this).siblings(".custom-file-label").addClass("selected").html('Выбрано файлов: ' + $(this)[0].files.length);
        else $(this).siblings(".custom-file-label").addClass("selected").html('Выберите файлы');
    })
});

function newClasses() {
    let input=document.getElementById('validatedCustomFile');
    let button=document.getElementById('myButtonReady');
    button.classList.add('margin-top');
    input.classList.add('is-invalid');
    return true;
};



