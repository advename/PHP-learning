<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Todo List</h1>

    <form action="index.php" method="POST">
        <input name="title" placeholder="Buy some milk..">
        <input type="date" name="due" value=<?=date("Y-m-j")?> >
        <input type="submit">
    </form>

    <ul id="todos">
        <?php foreach ($todos as $todo): ?>
            <li data-id=<?=$todo->id?> >
                    <a href="index.php?delete_id=<?=$todo->id?>"><?=$todo->title?></a>
                </a>
            </li>
        <?php endforeach;?>
    </ul>

    <script src="public/scripts/main.js" type="text/javascript"></script>
</body>
</html>
