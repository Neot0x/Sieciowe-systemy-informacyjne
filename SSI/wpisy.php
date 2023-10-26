<?php
    $tytul1 = "Monkey"; 
    $tytul2 = "Monke"; 
    $tytul3 = "Tytul3";

    $tresc1 = "MONKEY MONKEY MONKEY";
    $tresc2 = "MONKE MONKE MONKE";
    $tresc3 = "Tresc3";

    $articles = array(
        array($tytul1, $tresc1),
        array($tytul2, $tresc2),
        array($tytul3, $tresc3)
    );

    for ($i = 0; $i < count($articles); $i++){
        echo "<article><h4>".$articles[$i][0]."</h4><br>".$articles[$i][1]."<br>
        Sekcja komentarzy: <br>
        <span class = 'error'>* pola wymagane</span>
        <form action = ".htmlspecialchars($_SERVER['PHP_SELF'])." method = 'post'>
        Twój nick: <input type = 'text' name = 'nick'><span class = 'error'>* </span><br>
        Twój email: <input type = 'text' name = 'email'><span class = 'error'>* </span><br>
        Treść Twojego komentarza: <br><textarea name = 'komentarz' rows = '5' cols = '40'></textarea>
        <span class = 'error'>* </span><br>
        <input type = 'submit'>
        </form>
        </article>";
    }

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

echo "Twój nick to: ".$nick." Twój email to: ".$email." <br> Twój komentarz: <br>".$komentarz;

?>