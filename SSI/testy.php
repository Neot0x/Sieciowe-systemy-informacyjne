<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    Sekcja komentarzy: <br>
        <span class = 'error'>* pola wymagane</span>
        <form method = 'post'>
        <label for = 'nick'>Twój nick: </label>
        <input type = 'text' name = 'nick'><span class = 'error'>* </span><br>
        <label for = 'email'>Twój email: </label>
        <input type = 'text' name = 'email'><span class = 'error'>* </span><br>
        <label>Treść Twojego komentarza: </label>
        <br><textarea name = 'komentarz' rows = '5' cols = '40'></textarea>
        <span class = 'error'>* </span><br>
        <?php
        $a = rand(0, 9);
        $b = rand(0, 10 - $a);
        echo("Ile to ".$a." + ".$b." ?");
        echo("
        <input name = 'captcha' type = 'number' min = '0' max = '10' autofocus><br>
        <input type = 'submit'>
        </form>
        </article>
        ");
        $nick = $email = $komentarz = "";
        $captcha = 0;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nick = test_input($_POST["nick"]);
            $email = test_input($_POST["email"]);
            $komentarz = test_input($_POST["komentarz"]);
            $captcha = test_input($_POST["captcha"]);
        } 

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        $captcha_result = $a + $b;

        if($captcha_result != $captcha){
            echo("oj nie nie mordeczko to nie ta captcha, skill issue");
        }else{
            echo("udalo ci sie, super jestes");
        }
        ?>
    </body>
</html>