<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
    </head>
    <body>
        <form action = "index.php" method = "get">
            Nick: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            Hasło: <input type="text" name="haslo"><br>
            Powtórz hasło: <input type="text" name="haslo_2"><br>
            <input type="submit">
        </form>
       
        <?php
            $nick = $email = $haslo = $haslo_2 = "";
            if ($_SERVER['REQUEST_METHOD'] == "GET"){
                $nick = test_input($_GET['name']);
                $email = test_input($_GET['email']);
                $haslo = test_input($_GET['haslo']);
                $haslo_2 = test_input($_GET['haslo_2']);
            }
            
            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if($haslo == $haslo_2 ){
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "blog";

                $haslo = password_hash($haslo, PASSWORD_BCRYPT);

                $conn = mysqli_connect($hostname, $username, $password, $dbname);

                if(!$conn){
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "INSERT INTO users (nick, haslo, email) VALUES ('$nick', '$haslo', '$email')";

                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                
            }


        ?>
    </body>
</html>