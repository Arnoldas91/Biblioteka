<?php

include "./models/Author.php" ;

class AuthorController{

    public static function index()
    {
        $authors = Author::all();
        return $authors;
    }

   

}














?>