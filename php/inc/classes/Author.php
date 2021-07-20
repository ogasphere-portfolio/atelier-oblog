<?php


class Author {
    
    public $name;
    
    public function __construct($name = '') {
        $this->name = $name;   
    }

    public function articles($articlesList) {

        $articles = [];

        foreach ($articlesList as $key => $articleObject) {
            if ($articleObject->author == $this->name) {

                $articles[$key] = $articleObject;
                
            }
        }
        return $articles;
    }
}