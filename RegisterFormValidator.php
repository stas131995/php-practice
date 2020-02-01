<?php
require "BaseValidator.php";

class RegisterFormValidator extends BaseValidator
{
    public function rules() : array
    {
        return [
            "login" => [ "" ],
            "email" => [ "required", "email" ]
        ];
    }
}