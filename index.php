<?php

require "BaseRequest.php";

require "RegisterFormValidator.php";

$request = new BaseRequest();

$validator = new RegisterFormValidator($request);

if($validator->success() == true){
    echo "Здарова ".$request->get("login");
} else {
    foreach ($validator->errors() as $error) {
        echo $error;
    }
}
?>
<h1>Форма регистрации</h1>
<form action="" method="post">
    <input type="text" name="login" value="<?=$request->get("login")?>" placeholder="Логин" /><br>
    <input type="text" name="email" value="<?=$request->get("email")?>" placeholder="Емайл" /><br>
    <input type="password" name="password" value="<?=$request->get("password")?>" placeholder="Пароль" /><br>
    <input type="password" name="password_repeat" value="<?=$request->get("password_repeat")?>" placeholder="Повтори пароль" /><br>
    <input type="submit" value="Регистрация" />
</form>