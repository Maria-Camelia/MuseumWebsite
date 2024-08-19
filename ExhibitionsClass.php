<?php

class ExhibitionsClass{
    public $id;
    public $date;
    public $title;
    public $short_description;
    public $complete_description;
    public $images;

    function __construct(string $date = "",string $title = "",string $short_description = "",string $complete_description = "",string $images = ""){
        $this->date = $date;
        $this->title = $title;
        $this->short_description = $short_description;
        $this->complete_description = $complete_description;
        $this->images = $images;
    }

    public static function getAllExhibitions(){
        include_once 'connection.php';

        $getExhibitionsSQL = "SELECT * FROM exhibitions";

        return mysqli_query($connection, $getExhibitionsSQL);

    }

    public static function deleteExhibitions(string $exhibitionsId){
        include_once 'connection.php';

        $deleteExhibitionsSQL = "DELETE FROM exhibitions WHERE id ='{$exhibitionsId}'";

        if(mysqli_query($connection, $deleteExhibitionsSQL)) {
            echo '<script>alert("Expozitia a fost ștearsa cu succes!"); window.location = "view_exhibition.php";</script>';
        } else {
            echo 'Eroare la stergerea expozitiei: ' .mysqli_error($connection);
        }

        mysqli_close($connection);
    }

    public function save(){
        require_once("connection.php");

        $date = mysqli_real_escape_string($connection, $this->date);
        $title = mysqli_real_escape_string($connection, $this->title);
        $short_description = mysqli_real_escape_string($connection, $this->short_description);
        $complete_description = mysqli_real_escape_string($connection, $this->complete_description);
        $images = mysqli_real_escape_string($connection, $this->images);

        $SQL = "INSERT INTO exhibitions (date, title, short_description, complete_description, images) VALUES ('{$date}', '{$title}', '{$short_description}', '{$complete_description}', '{$images}')";
        return mysqli_query($connection, $SQL);
    }
    
}