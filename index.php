<?php

spl_autoload_register(function($classname){
    require "{$classname}.php";
});

$data = [
    new News("новость 1", "ничего не произошло"),
    new Article("Статья 2", "бла бла бла"),
    new BlogPost("Пост 3", "я пришёл")
];

foreach ($data as $object) {
    if($object instanceof AbstractModel){
        echo $object->printHtml();
    }
}