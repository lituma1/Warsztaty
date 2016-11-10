<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Witamy w naszym lottomacie<h1>
                <h2>Wybierz 6 cyfr</h2>
                <?php 
                //include ('lotto.php'); 
                ?>
                <form action="lotto.php" method="POST">
                    <?php
                    for ($i = 1; $i <= 49; $i++) {
                        echo'<label>';
                        echo $i;
                        echo '<input type="checkbox" name="numbers[]" value='.$i.'>';
                        echo '</label>';
                    }
                    ?>
                    <br>
                    <br>
                    <input type="submit" value='Potwierdź'>

                </form>
                
                </body>
                </html>