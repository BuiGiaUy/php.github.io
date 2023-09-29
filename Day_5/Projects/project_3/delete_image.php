<?php
    if (isset($_GET["image_name"])) {
        $imageToDelete = $_GET["image_name"];
        $imageDirectory = './uploads/';

        unlink($imageDirectory . $imageToDelete);

        header('Location: index.php');
    } else {
        header('Location: index.php');
    }