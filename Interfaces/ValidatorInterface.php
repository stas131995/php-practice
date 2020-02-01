<?php

require "RequestInterface.php";

/**
 * Интерфейс класса валидирующего запрос
 */
interface ValidatorInterface
{
    /**
     * Коструктов который принимает в себя объект обработчика запроса
     *
     * @param RequestInterface $request
     */
    public function __construct(RequestInterface $request);

    /**
     * Метод который будет возвращать состояние валидации запроса
     *
     * @return boolean
     */
    public function success() : bool;

    /**
     * Метод возвращающий массив ошибок при валидации
     *
     * @return array
     */
    public function errors() : array;

    /**
     * Метод возвращиющий привали валидации
     *
     * @return array
     */
    public function rules() : array;
}