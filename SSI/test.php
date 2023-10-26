<?php
$nick = $email = $komentarz ="";
$nickErr = $emailErr = $komentarzErr ="";
//$nick = $_POST["nick"];
//$email = $_POST["email"];
//$tresc = $_POST["komentarz"];


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["nick"])){
        $nickErr = "Wprowadź swój nick";
    }else{
        $nick = test_input($_POST["nick"]);
    }

    if(empty($_POST["email"])){
        $nickErr = "Wprowadź swój email";
    }else{
        $nick = test_input($_POST["email"]);
    }

    if(empty($_POST["komentarz"])){
        $nickErr = "Dodaj treść komentarza";
    }else{
        $nick = test_input($_POST["komentarz"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//echo "Twój nick to: ".$nick." Twój email to: ".$email." <br> Twój komentarz: <br>".$tresc;
?>