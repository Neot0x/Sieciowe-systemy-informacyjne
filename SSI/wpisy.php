<?php
    $tytul1 = "Tytul1"; 
    $tytul2 = "Tytul2"; 
    $tytul3 = "Tytul3";

    $tresc1 = "Tresc1";
    $tresc2 = "Tresc2";
    $tresc3 = "Tresc3";

    $articles = array(
        array($tytul1, $tresc1),
        array($tytul2, $tresc2),
        array($tytul3, $tresc3)
    );

    for ($i = 0; $i < count($articles); $i++){
        echo "<article><h4>".$articles[$i][0]."</h4><br>".$articles[$i][1]."<br> </article>";
    }
?>