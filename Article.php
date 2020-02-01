<?php

class Article extends AbstractModel
{
    public function printHtml()
    {
        echo "<h1><i>".$this->getTitle()."</i></h1>";
        echo "<p>{$this->content}</p>";
    }
}