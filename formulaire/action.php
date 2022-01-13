<?php

// Exo 1
if(isset($_POST['age']) && isset($_POST['nom']))
{

    $nom = $_POST['nom'];
    $age = $_POST['age'];
    if ($age < 18) {
        echo "<script>alert('Vous ne pouvez pas acceder au site')</script>";
    
    } else {
        echo "<script>alert('Vous pouvez accéder au site')</script>";
      
    }
}

//Exo 2
if(isset($_POST['bday']))
{

    $bday = date("Y",strtotime($_POST["bday"]));
    $today = date("Y");
    $end = $today - $bday;

    if ($end < 18) {
        echo "<script>alert('Vous ne pouvez pas acceder au site')</script>";
    } else {
        echo "<script>alert('Vous pouvez accéder au site')</script>";
    }
}