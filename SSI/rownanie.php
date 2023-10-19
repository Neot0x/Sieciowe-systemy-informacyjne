<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="rownanie.php" method="post">
                    Rozwiązywanie równań kwadratowych<br>
                    a: <input type="number" name="a"><br>
                    b: <input type="number" name="b"><br>
                    c: <input type="number" name="c"><br>
                    <input type="submit" value="Znajdz x!">
        </form>

<?php
    
    echo "Rozwiązywanie rownań kwadratowych <br>";
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
    $a = $_POST['a'];
    $b = $_POST['b']; 
    $c = $_POST['c']; 

    $x = $b*$b - 4*$a*$c;
    echo "$x <br>";

    if ($x > 0) {
        echo "x1 = ";
        echo ((-$b + sqrt($x))/(2*$a));
        echo "<br>";
        echo "x2 = ";
        echo ((-$b - sqrt($x))/(2*$a));
    } else if($x == 0){
        echo "x = ";
        echo (-$b / 2*$a);
    } else{
        echo "Brak rozwiazania";
    }
}
?>
</body>
</html>