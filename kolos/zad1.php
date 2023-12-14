<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php

            function czyAnagram($t1, $t2){
                $t1 = trim($t1);
                $t1 = stripslashes($t1);
                $t1 = strtolower($t1);
                $t1 = htmlspecialchars($t1);
                str_replace(" ", "", $t1);
                str_replace("   ", "", $t1);


                $t2 = trim($t2);
                $t2 = stripslashes($t2);
                $t2 = strtolower($t2);
                $t2 = htmlspecialchars($t2);
                str_replace(" ", "", $t2);
                str_replace("   ", "", $t2);
                

                if($t1 == "" || $t2 == "" || $t1 != $t2){
                    echo("fałsz<br>");
                }else{
                    echo("prawda<br>");
                }
            }
            czyAnagram("kolej", "olejk");
            czyAnagram("kolej", "kole");
            czyAnagram("kolej", "KOLEJ");
            czyAnagram("ko le j", "ole  jk");

        ?>
    </body>
</html>