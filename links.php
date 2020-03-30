<?php
function addLinks($filesPath,$dirMain){
    foreach ($filesPath as $path){
        $fullPath=$dirMain.$path;
        $format = '<a href="%s" download><i class="fas fa-download"></i></i></a>';
        echo sprintf($format,$fullPath);
        echo' ';
    }
}
