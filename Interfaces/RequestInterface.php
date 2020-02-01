<?php

/**
 * Интерфейс класса обработчика запроса
 */
interface RequestInterface
{
    /**
     * Метод который будет получать параметр запроса
     *
     * @param string $key
     * @return mixed
     */
    public function get(string $key);

    /**
     * Метод возвращающий все параметры запроса
     *
     * @return array
     */
    public function all() : array;

    /**
     * Возвращает метод запроса
     *
     * @return string
     */
    public function method() : string;
}