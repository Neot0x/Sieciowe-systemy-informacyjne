<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="get" id="gra">
            <input type="submit" name="dobierz" value="DOBIERZ">
            <input type="submit" name="pas" value="PASS">
        </form>
        <br>
        <?php
          $talia = array('ACE_H' => 11, 'KING_H' => 4, 'QUEEN_H' => 3, 'JACK_H' => 2, '10_H' => 10, '9_H' => 9, '8_H' => 8, '7_H' => 7, '6_H' => 6, '5_H' => 5, '4_H' => 4, '3_H' => 3, '2_H' => 2,
                         'ACE_S' => 11, 'KING_S' => 4, 'QUEEN_S' => 3, 'JACK_S' => 2, '10_S' => 10, '9_S' => 9, '8_S' => 8, '7_S' => 7, '6_S' => 6, '5_S' => 5, '4_S' => 4, '3_S' => 3, '2_ S' => 2,
                         'ACE_D' => 11, 'KING_D' => 4, 'QUEEN_D' => 3, 'JACK_D' => 2, '10_D' => 10, '9_D' => 9, '8_D' => 8, '7_D' => 7, '6_D' => 6, '5_D' => 5, '4_D' => 4, '3_D' => 3, '2_D' => 2,
                         'ACE_C' => 11, 'KING_C' => 4, 'QUEEN_C' => 3, 'JACK_C' => 2, '10_C' => 10, '9_C' => 9, '8_C' => 8, '7_C' => 7, '6_C' => 6, '5_C' => 5, '4_C' => 4, '3_C' => 3, '2_C' => 2);
          
        $key_player_1 = array_rand($talia);
        $key_player_2 = array_rand($talia);
        while($key_player_1 == $key_player_2){
            $key_player_2 = array_rand($talia);
        }

        $wynik_player = $talia[$key_player_1]+$talia[$key_player_2];
        echo("Twoje karty: ".$key_player_1."---------".$key_player_2." SUMA: ".$wynik_player."<br>");

        $key_krupier_1 = array_rand($talia);
        $key_krupier_2 = array_rand($talia); 

        while($key_krupier_1 == $key_player_1 || $key_krupier_1 == $key_player_2){
            $key_krupier_1 = array_rand($talia);
        }

        while($key_krupier_2 == $key_player_1 || $key_krupier_2 == $key_player_2 || $key_krupier_1 == $key_krupier_2){
            $key_krupier_2 = array_rand($talia);
        }

        $wynik_krupier = $talia[$key_krupier_1] + $talia[$key_krupier_2];
        echo("Karty krupiera: ".$key_krupier_1."---------".$key_krupier_2."SUMA: ".$wynik_krupier."<br>");
        if(21 - $wynik_player == 21 - $wynik_krupier){
            echo("REMIS");
        }else if(21 - $wynik_player < 21 - $wynik_krupier){
            echo("Wygrywa gracz");
        }else{
            echo("Wygrywa krupier");
        }

        ?>
    </body>
</html>