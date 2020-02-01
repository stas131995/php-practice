<?php

/**
 * Функция которая возвращзает ключ из массива
 * с предварительной проверкой существования ключа
 *
 * @param string $name
 * @param array $source
 * 
 * @return string
 */
if(!function_exists('get')){
    function get(string $name, array $source) : string {
        return array_key_exists($name, $source) ? $source[$name] : "";
    }
}