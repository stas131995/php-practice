<?php

class News extends AbstractModel
{
    public function printHtml()
    {
        echo "<h1>".$this->getTitle()."</h1>";
        echo "<p>{$this->content}</p>";
    }
}
