<?php
require "Interfaces/RequestInterface.php";

class BaseRequest implements RequestInterface
{
    protected array $request = [];

    protected array $server = [];

    public function __construct()
    {
        $this->request = $_REQUEST;
        $this->server = $_SERVER;
    }

    /**
     * Метод который будет получать параметр запроса
     *
     * @param string $key
     * @return void
     */
    public function get(string $key)
    {
        return $this->request[$key] ?? null;
    }

    /**
     * Метод возвращающий все параметры запроса
     *
     * @return array
     */
    public function all() : array
    {
        return $this->request;
    }

    /**
     * Возвращает метод запроса
     *
     * @return string
     */
    public function method() : string
    {
        return $this->server['REQUEST_METHOD'];
    }
}