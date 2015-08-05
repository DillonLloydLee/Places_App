<?php

class Place{

    private $description;
    private $date;
    private $souvenir;
    private $image;

    function __construct($description, $date, $souvenir, $image) {
        $this->description = $description;
        $this->date = $date;
        $this->souvenir = $souvenir;
        $this->image = $image;
    }

    function setDescription($new_description) {
        $this->description = (string) $new_description;
    }

    function getDescription() {
        return $this->description;
    }

    function setDate($new_date) {
        $this->date = (string) $new_date;
    }

    function getDate() {
        return $this->date;
    }

    function setSouvenir($new_souvenir) {
        $this->souvenir = (string) $new_souvenir;
    }

    function getSouvenir() {
        return $this->souvenir;
    }

    function setImage($new_image) {
        $this->image = (string) $new_image;
    }

    function getImage() {
        return $this->image;
    }

    function save() {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll() {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll() {
        $_SESSION['list_of_places'] = array();
    }

}
