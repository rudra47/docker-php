<?php

abstract class PolymorphismUser{
    private $numberOfArticles;

    public function setNumberOfArticles($numberOfArticles){
        $this->numberOfArticles = (int)$numberOfArticles;
    }

    public function getNumberOfArticles(){
        return $this->numberOfArticles;
    }

    abstract public function calcScore();
}

class Author extends PolymorphismUser
{
    public function calcScore()
    {
        return $this->getNumberOfArticles() * 10 + 20;   
    }
}

class Editor extends PolymorphismUser
{
    public function calcScore()
    {
        return $this->getNumberOfArticles() * 6 + 15;
    }
}

$author = new Author();
$author->setNumberOfArticles(8);
echo $author->calcScore()." ";

$editor = new Editor();
$editor->setNumberOfArticles(15);
echo $editor->calcScore();