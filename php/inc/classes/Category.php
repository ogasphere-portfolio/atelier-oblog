<?php

class Category {
    
    public $title;
    
    public function __construct($title = '') {
        $this->title = $title;   
    }

    public function articles($articlesList) {

        $articles = [];

        foreach ($articlesList as $key => $articleObject) {
            if ($articleObject->category == $this->title) {

                $articles[$key] = $articleObject;
                
            }
        }
        return $articles;
    }
}