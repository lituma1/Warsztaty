<?php include 'cookies.php'; ?>
<body>

    <h1>Witaj <h1>
    <h2>Ostatni raz na naszej stronie byłeś <?php echo '<br>'. displayCookie() ?></h2>
        <form action="cookies.php" method="POST">
            <input type="submit" value="wyzeruj dane">
        </form>
</body>
