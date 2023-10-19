<!DOCTYPE html>
<html>
    <head>
        <title>Monkey Space</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styl.css">
		<link rel="icon" type="image/x-icon" href="banan.png">
        <link rel="icon" type="image/x-icon" href="banan.png">
    </head>
    <body>
        <header><h1>Monkey Space<img src="monkey_logo.jpg" alt="Logo bloga"></h1>
                    
        </header>
        <div class = "row">
             <div class = "column left">Główna sekcja
                <p><b>Małpokształtne, małpy właściwe (Simiiformes)</b> – infrarząd ssaków naczelnych z podrzędu wyższych naczelnych obejmujący małpy szerokonose i małpy wąskonose.<br>
                <?php include 'wpisy.php' ?>
                
             </div>
             <div class = "column right">Pasek boczny
                <ol>
                    <li><a href = #>O mnie</a></li>
                    <li><a href = #>Kalendarz</a></br>
						<?php include 'czas.php';
						?>
					</li>
                    <li><a href = #>Archiwum</a></li>
                    <li><a href = #>Linki do stron</a></li>
                    <li><a href = #>Panel administratorów</a></li>
                    <li><a href = "rownanie.php">Link do rownania kwadratowego</a></li>
                </ol>
             </div>
        </div>
        <footer> Stworzone przez Mateusz Białek </footer>
    </body>
</html>
