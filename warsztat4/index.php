<?php include('tasks.php');?>
<body>
    <h1>Twoje zadania</h1>
    <form action="tasks.php" method="POST">
        <label>
            Wprowadź nowe zadanie
            <input type="text" name="task" value=""><br>
            <input type="submit" value="Potwierdź zadanie">
        </label>
    </form>
</body>

