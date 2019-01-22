<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Tasks:</h1>

    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li>
                <?php if ($todo->getCompleted()): ?>
                    <strike> <?=$todo->getDescription(); ?> </strike>
                <?php else : ?>
                    <?= $todo->getDescription(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
