<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">

        <title>Zarządzanie postami</title>
    </head>
    <body>
        <h1>Witaj w zarządzaniu postami</h1>
        <p> 
        <?php
            $host = "localhost";
            $username = "root";
            $passwd = "";
            $dbname = "blog";
            $conn = new mysqli($host, $username, $passwd, $dbname);

            if($conn){
                $sql = "Select ID, posty FROM test";
                $result = mysqli_query($conn, $sql);;

                if(mysqli_num_rows($result) > 0){
                    echo "<h2>Wszystkie posty</h2>";
                    echo "<table><tr><th>ID</th><th>Treść</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr><td>".$row["ID"]."</td><td>".$row["posty"]."</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "Brak postów do wyświetlenia";
                }

            }
            else{
                print("Przepraszamy nastąpił problem z bazą danych ");
            }

            mysqli_close($conn);
        ?>
        </p>

        <p>
            <?php
                $conn = new mysqli($host, $username, $passwd, $dbname);
                if($conn){
                    $sql = "INSERT INTO test(posty) VALUES ('blabla5')";
                    if(mysqli_query($conn, $sql)){
                        echo("poprawnie dodano post");
                    }else{
                        echo "nie działa";
                    }
                }else{
                    echo "nie działa";
                }
            ?>
        </p>

    </body>
</html>