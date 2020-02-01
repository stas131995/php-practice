<?php

abstract class AbstractModel
{
    private string $title;

    protected string $content;

    public function getTitle() : string
    {
        return $this->title;
    }

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public abstract function printHtml();
}