<?php

class BlogPost extends AbstractModel
{
    public function printHtml()
    {
        echo "<h1><u>".$this->getTitle()."</u></h1>";
        echo "<p>{$this->content}</p>";
    }
}