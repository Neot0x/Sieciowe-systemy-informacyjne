<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
            <input type = "text" name = ciag></input>
            <input type = "submit" />
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $liczby = $_POST["ciag"];
            }
            $jaki_ciag = "";
            $suma = "";
            $dwucyf = 0;
            $i;

            $obrobka = str_getcsv($liczby);
            for($i = 0; $i < count($obrobka); $i++){
                $obrobka[$i] = $obrobka[$i]+0;
                echo($obrobka[$i]."<br>"); //.gettype($obrobka[$i])
                if(($obrobka[$i] > 9 && $obrobka[$i] < 100) && ($obrobka[$i]%2 == 0) && ($obrobka[$i]%3 == 0 )){
                    $dwucyf++;
                }
            }
            
            $suma = $obrobka[0] + $obrobka[$i-1];
            if($obrobka[0] > $obrobka[1] && $obrobka[1] > $obrobka[2] && $obrobka[2] > $obrobka[3]){
                $jaki_ciag = "malejacy";
            }else if($obrobka[0] < $obrobka[1] && $obrobka[1] < $obrobka[2] && $obrobka[2] < $obrobka[3]){
                $jaki_ciag = "rosnący";
            }else{
                $jaki_ciag = "inny";
            }


            echo("<br>");
            echo("Ciąg jest: ".$jaki_ciag."<br>");
            echo("Suma pierwszego i ostatniego elementu: ".$suma."<br>");
            echo("Liczb elementów parzystych, dwucyfrowych i podzielnych przez 3: ".$dwucyf."<br>");
        ?>
    </body>
</html>