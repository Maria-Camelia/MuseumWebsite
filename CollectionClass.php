<?php

class CollectionClass{
    public $id;
    public $title;
    public $description;
    public $cover_image;
    public $collection_items;

    function  __construct(string $title = "",string $description = "",string $cover_image = "",string $collection_items = ""){
        $this->title = $title;
        $this->description = $description;
        $this->cover_image = $cover_image;
        $this->collection_items = $collection_items;
    }

    public static function getAllCollection(){
        include_once 'connection.php';

        $getCollectionSQL = "SELECT * FROM collection";
        
        return mysqli_query($connection, $getCollectionSQL);
    }

    public static function deleteCollection(string $collectionId){
        include_once 'connection.php';

        $deleteCollectionSQL = "DELETE FROM collection WHERE id ='{$collectionId}'";

        if(mysqli_query($connection, $deleteCollectionSQL)) {
            echo '<script>alert("Colectia a fost ștearsa cu succes!"); window.location = "view_collection.php";</script>';
        } else {
            echo 'Eroare la stergerea colectiei: ' .mysqli_error($connection);
        }

        mysqli_close($connection);
    }

    public function save(){
        require_once("connection.php");

        $title = mysqli_real_escape_string($connection, $this->title);
        $description = mysqli_real_escape_string($connection, $this->description);
        $cover_image = mysqli_real_escape_string($connection, $this->cover_image);
        $collection_items = mysqli_real_escape_string($connection, $this->collection_items);

        $SQL = "INSERT INTO collection (title, description, cover_image, collection_items) VALUES ('{$title}', '{$description}', '{$cover_image}', '{$collection_items}')";
        return mysqli_query($connection, $SQL);
    }
}