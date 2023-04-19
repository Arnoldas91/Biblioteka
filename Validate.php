<?php

class Validate
{

    public static function Book() 
    {
        $author = Author::find($_POST['authorId']);
        if (strlen($_POST['title']) == 0) {
            $_SESSION['errors']['title'] = "Įveskite knygos pavadinimą";
        }

        if (strlen($_POST['genre']) == 0) {
            $_SESSION['errors']['genre'] = "Įveskite knygos žanrą";
        }

       

        if ($author->id == null) {
            $_SESSION['errors']['author'] = "Tokio autoriaus nėra";
        }

        if (isset($_SESSION['errors'])) {
            return false;
        }
        return true;
    }
}