<?php

include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <div class="container">
        <form>
            <input type="text" name="Task" placeholder="Task..." />
            <button class="add-btn">Add</button>
        </form>
        <div class="container">
            <div class="item">
                <span class="task-text">1</span>
                <button class="task-delete-btn">delete</button>
            </div>
            <div class="item">
                <span class="task-text">2</span>
                <button class="task-delete-btn">delete</button>
            </div>
            <div class="item">
                <span class="task-text">3</span>
                <button class="task-delete-btn">delete</button>
            </div>
        </div>
    </div>

</body>
</html>